/**
 * CUP2EAT Interactive 2D & Live Sound Engine
 */

// Procedural Web Audio API sound synthesizer
window.SoundFX = {
    ctx: null,
    enabled: true,

    init() {
        if (!this.ctx) {
            const AudioCtx = window.AudioContext || window.webkitAudioContext;
            if (AudioCtx) this.ctx = new AudioCtx();
        }
    },

    toggleSound() {
        this.enabled = !this.enabled;
        return this.enabled;
    },

    // Crunchy wafer bite sound effect
    crunch() {
        if (!this.enabled) return;
        try {
            this.init();
            if (this.ctx && this.ctx.state === 'suspended') this.ctx.resume();
            
            const bufferSize = this.ctx.sampleRate * 0.18;
            const buffer = this.ctx.createBuffer(1, bufferSize, this.ctx.sampleRate);
            const data = buffer.getChannelData(0);
            for (let i = 0; i < bufferSize; i++) {
                data[i] = (Math.random() * 2 - 1) * Math.exp(-i / (bufferSize * 0.25));
            }
            const noise = this.ctx.createBufferSource();
            noise.buffer = buffer;
            
            const filter = this.ctx.createBiquadFilter();
            filter.type = 'bandpass';
            filter.frequency.setValueAtTime(1400, this.ctx.currentTime);
            filter.Q.value = 3;

            const gain = this.ctx.createGain();
            gain.gain.setValueAtTime(0.4, this.ctx.currentTime);
            gain.gain.exponentialRampToValueAtTime(0.01, this.ctx.currentTime + 0.18);

            noise.connect(filter);
            filter.connect(gain);
            gain.connect(this.ctx.destination);
            noise.start();
        } catch(e) {}
    },

    // Steaming beverage pouring sound effect
    pour() {
        if (!this.enabled) return;
        try {
            this.init();
            if (this.ctx && this.ctx.state === 'suspended') this.ctx.resume();

            const osc = this.ctx.createOscillator();
            const gain = this.ctx.createGain();
            osc.type = 'sine';
            osc.frequency.setValueAtTime(260, this.ctx.currentTime);
            osc.frequency.exponentialRampToValueAtTime(620, this.ctx.currentTime + 0.9);

            gain.gain.setValueAtTime(0.2, this.ctx.currentTime);
            gain.gain.linearRampToValueAtTime(0.01, this.ctx.currentTime + 0.9);

            osc.connect(gain);
            gain.connect(this.ctx.destination);
            osc.start();
            osc.stop(this.ctx.currentTime + 0.9);
        } catch(e) {}
    },

    // Cart notification chime
    ding() {
        if (!this.enabled) return;
        try {
            this.init();
            if (this.ctx && this.ctx.state === 'suspended') this.ctx.resume();

            const osc = this.ctx.createOscillator();
            const gain = this.ctx.createGain();
            osc.type = 'triangle';
            osc.frequency.setValueAtTime(880, this.ctx.currentTime); // A5 note
            gain.gain.setValueAtTime(0.25, this.ctx.currentTime);
            gain.gain.exponentialRampToValueAtTime(0.001, this.ctx.currentTime + 0.35);

            osc.connect(gain);
            gain.connect(this.ctx.destination);
            osc.start();
            osc.stop(this.ctx.currentTime + 0.35);
        } catch(e) {}
    }
};

// 2D Wafer Particle Burst Generator
window.spawnWaferCrumbs = function(e) {
    const rect = e.currentTarget.getBoundingClientRect();
    const originX = rect.left + rect.width / 2;
    const originY = rect.top + rect.height / 2;

    const colors = ['#8B4513', '#D4AF37', '#E8C39E', '#5C3A21', '#F4E8DC'];
    for (let i = 0; i < 24; i++) {
        const particle = document.createElement('div');
        particle.className = 'wafer-crumb-particle';
        const size = Math.floor(Math.random() * 8) + 4;
        const color = colors[Math.floor(Math.random() * colors.length)];
        
        particle.style.cssText = `
            position: fixed;
            left: ${originX}px;
            top: ${originY}px;
            width: ${size}px;
            height: ${size}px;
            background: ${color};
            border-radius: ${Math.random() > 0.5 ? '50%' : '2px'};
            pointer-events: none;
            z-index: 99999;
            transform: translate(-50%, -50%);
            transition: all 0.7s cubic-bezier(0.25, 1, 0.5, 1);
        `;
        document.body.appendChild(particle);

        const angle = Math.random() * Math.PI * 2;
        const velocity = Math.random() * 120 + 40;
        const destX = Math.cos(angle) * velocity;
        const destY = Math.sin(angle) * velocity + 40; // slight gravity pull

        requestAnimationFrame(() => {
            particle.style.transform = `translate(${destX}px, ${destY}px) rotate(${Math.random() * 360}deg) scale(0)`;
            particle.style.opacity = '0';
        });

        setTimeout(() => particle.remove(), 700);
    }
};

// Global Alpine Application State
function globalApp() {
    return {
        cart: JSON.parse(localStorage.getItem('cup2eat_cart') || '[]'),
        cartDrawerOpen: false,
        deliveryCity: '',
        orderNotes: '',

        init() {
            this.$watch('cart', (val) => {
                localStorage.setItem('cup2eat_cart', JSON.stringify(val));
            });
        },

        addToCart(item) {
            window.SoundFX.ding();
            const existing = this.cart.find(c => c.id === item.id);
            if (existing) {
                existing.qty++;
            } else {
                this.cart.push({
                    id: item.id,
                    name: item.name,
                    price: parseFloat(item.price),
                    piece_count: item.piece_count,
                    size: item.size || '100ml',
                    flavor: item.flavor || 'Signature Flavor',
                    image: item.image,
                    qty: item.qty || 1
                });
            }
            this.cartDrawerOpen = true;
        },

        updateQty(id, delta) {
            const item = this.cart.find(c => c.id === id);
            if (!item) return;
            item.qty += delta;
            if (item.qty <= 0) {
                this.cart = this.cart.filter(c => c.id !== id);
            }
        },

        removeItem(id) {
            this.cart = this.cart.filter(c => c.id !== id);
        },

        clearCart() {
            this.cart = [];
        },

        get cartCount() {
            return this.cart.reduce((sum, item) => sum + item.qty, 0);
        },

        get cartTotal() {
            return this.cart.reduce((sum, item) => sum + (item.price * item.qty), 0);
        },

        get cartCupsCount() {
            return this.cart.reduce((sum, item) => {
                const match = item.piece_count ? item.piece_count.match(/(\d+)/) : null;
                const cups = match ? parseInt(match[1]) : 1;
                return sum + (cups * item.qty);
            }, 0);
        },

        checkoutWhatsApp() {
            if (this.cart.length === 0) return;
            window.SoundFX.ding();

            let msg = "🌟 *CUP2EAT QUICK CART ORDER* 🌟\n\n";
            msg += "*Items Selected:*\n";
            this.cart.forEach((it, idx) => {
                msg += `${idx + 1}. *${it.name}* (${it.piece_count}) x ${it.qty} = ₹${(it.price * it.qty).toLocaleString()}\n`;
            });

            msg += `\n*Total Edible Cups:* ${this.cartCupsCount.toLocaleString()} Cups`;
            msg += `\n*Total Amount:* ₹${this.cartTotal.toLocaleString()} (Includes Free Pan-India Delivery)`;
            if (this.deliveryCity) msg += `\n*Delivery City:* ${this.deliveryCity}`;
            if (this.orderNotes) msg += `\n*Notes:* ${this.orderNotes}`;
            msg += "\n\nPlease confirm dispatch date & payment!";

            const url = `https://wa.me/919818192575?text=${encodeURIComponent(msg)}`;
            window.open(url, '_blank');
        }
    };
}
