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
        soundActive: true,
        deliveryCity: '',
        orderNotes: '',

        // Live Social Proof Notification Data
        liveToast: {
            visible: false,
            title: '',
            subtitle: '',
            time: '',
            icon: 'fa-truck-fast'
        },

        liveOrdersQueue: [
            { title: "2x Wholesale Mega Box (396 Cups)", subtitle: "Dispatched to Bandra West, Mumbai", time: "4 mins ago", icon: "fa-truck-fast" },
            { title: "Cafe Sample Box (Assorted Flavors)", subtitle: "Requested by Roastery Cafe, Ahmedabad", time: "8 mins ago", icon: "fa-box-open" },
            { title: "100ml CC Premium Tray (200 Pcs)", subtitle: "Order confirmed for Cyber City, Gurugram", time: "14 mins ago", icon: "fa-mug-hot" },
            { title: "150ml Cold Coffee Shake Glasses", subtitle: "Dispatched to Indiranagar, Bengaluru", time: "19 mins ago", icon: "fa-ice-cream" },
            { title: "500 Edible Cups for Eco-Wedding", subtitle: "Inquiry received from Bhubaneswar, Odisha", time: "27 mins ago", icon: "fa-champagne-glasses" }
        ],
        liveQueueIdx: 0,

        init() {
            this.$watch('cart', (val) => {
                localStorage.setItem('cup2eat_cart', JSON.stringify(val));
            });

            // Start Live Ticker
            setTimeout(() => this.triggerNextLiveAlert(), 3500);
            setInterval(() => this.triggerNextLiveAlert(), 14000);
        },

        triggerNextLiveAlert() {
            const item = this.liveOrdersQueue[this.liveQueueIdx];
            this.liveToast = {
                visible: true,
                title: item.title,
                subtitle: item.subtitle,
                time: item.time,
                icon: item.icon
            };
            this.liveQueueIdx = (this.liveQueueIdx + 1) % this.liveOrdersQueue.length;

            // Hide after 5.5s
            setTimeout(() => {
                this.liveToast.visible = false;
            }, 5500);
        },

        toggleSound() {
            this.soundActive = window.SoundFX.toggleSound();
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

// 2D Interactive Simulator State Engine
function cupSimulator() {
    return {
        selectedFlavor: 'choco',
        liquidLevel: 0,
        bites: 0,
        isPouring: false,
        timerRunning: false,
        timerSeconds: 2400,
        zeroWasteAchieved: false,
        statusBubble: '👋 Welcome to the 2D Cup2Eat Simulator! Select a beverage below and click "Pour Drink".',

        drinks: {
            'choco': {
                name: 'Belgian Mocha Latte',
                temp: 'Hot (75°C)',
                liquidColor: '#4a2511',
                cremaColor: '#c49a6c',
                rimColor: '#2b1408',
                cupName: 'Dark Chocolate Lined Waffle Cup',
                price: 3200,
                pack: '200 Pcs Box',
                size: '100ml',
                steam: true,
                image: '/images/brand/latte-art-cup-4k.jpg',
                description: 'Rich Belgian dark chocolate interior coating that slowly infuses into hot coffee.'
            },
            'elaichi': {
                name: 'Kadak Masala Cutting Chai',
                temp: 'Piping Hot (85°C)',
                liquidColor: '#a05822',
                cremaColor: '#df9c56',
                rimColor: '#603813',
                cupName: 'Royal Cardamom Wafer Cup',
                price: 3200,
                pack: '200 Pcs Box',
                size: '100ml',
                steam: true,
                image: '/images/brand/chai-cup-4k.jpg',
                description: 'Infused with real green cardamom powder. Complements authentic Indian tapri tea.'
            },
            'cold_coffee': {
                name: 'Thick Oreo Cold Frappe',
                temp: 'Chilled (4°C)',
                liquidColor: '#553622',
                cremaColor: '#f8f4ee',
                rimColor: '#2b1408',
                cupName: '150ml Cold Drink Shake Glass',
                price: 4320,
                pack: '200 Pcs Box',
                size: '150ml',
                steam: false,
                image: '/images/brand/cold-coffee-4k.jpg',
                description: 'Double thick wafer walls designed specifically for cold iced milkshakes.'
            },
            'vanilla': {
                name: 'French Vanilla Espresso',
                temp: 'Hot (70°C)',
                liquidColor: '#3a1f0d',
                cremaColor: '#f3e5ab',
                rimColor: '#d4af37',
                cupName: 'French Vanilla Infused Cup',
                price: 3200,
                pack: '200 Pcs Box',
                size: '100ml',
                steam: true,
                image: '/images/brand/vanilla-cup-4k.jpg',
                description: 'Fragrant Madagascar bourbon vanilla wafer that harmonizes with espresso.'
            },
            'strawberry': {
                name: 'Strawberry Gelato & Shake',
                temp: 'Cold (2°C)',
                liquidColor: '#c93b66',
                cremaColor: '#ffb3c6',
                rimColor: '#e0537e',
                cupName: 'Strawberry Dessert Cup',
                price: 3400,
                pack: '200 Pcs Box',
                size: '100ml',
                steam: false,
                image: '/images/brand/strawberry-cup-4k.jpg',
                description: 'Natural berry flavoring creating a sweet dessert experience.'
            }
        },

        get activeDrink() {
            return this.drinks[this.selectedFlavor];
        },

        get timerDisplay() {
            const mins = Math.floor(this.timerSeconds / 60);
            const secs = this.timerSeconds % 60;
            return `${mins.toString().padStart(2, '0')}:${secs.toString().padStart(2, '0')}`;
        },

        selectFlavor(key) {
            this.selectedFlavor = key;
            this.resetSimulator();
            this.statusBubble = `Selected ${this.activeDrink.name}! Click "Pour Drink" to fill the edible cup.`;
        },

        pourDrink() {
            if (this.liquidLevel > 0) return;
            window.SoundFX.pour();
            this.isPouring = true;
            this.statusBubble = `Pouring hot ${this.activeDrink.name}... Listen to that pour! ☕`;
            
            setTimeout(() => {
                this.liquidLevel = 80;
                this.isPouring = false;
                this.timerRunning = true;
                this.statusBubble = `Filled! The edible cup holds ${this.activeDrink.temp} without softening. Try "Take a Sip" or "CRUNCH THE CUP!"`;
            }, 800);
        },

        sipDrink() {
            if (this.liquidLevel <= 0) {
                this.statusBubble = 'The cup is empty! Click "CRUNCH THE CUP!" to eat your snack.';
                return;
            }
            window.SoundFX.ding();
            this.liquidLevel = Math.max(0, this.liquidLevel - 28);
            if (this.liquidLevel > 0) {
                this.statusBubble = 'Ahh, delicious sip! Notice the cup wall is still 100% crispy and leak-free!';
            } else {
                this.statusBubble = 'Drink finished! Now the best part: CRUNCH INTO THE WAFER CUP! 😋';
            }
        },

        crunchCup(event) {
            window.SoundFX.crunch();
            window.spawnWaferCrumbs(event);
            this.bites++;

            if (this.bites === 1) {
                this.statusBubble = `*CRUUUNCH!* 🍪 ${this.activeDrink.cupName} is super crispy with rich gourmet lining!`;
            } else if (this.bites === 2) {
                this.statusBubble = `*MUNCH MUNCH!* No plastic trash, no cardboard aftertaste, just pure delicious wafer!`;
            } else {
                this.bites = 3;
                this.liquidLevel = 0;
                this.zeroWasteAchieved = true;
                window.SoundFX.ding();
                this.statusBubble = `🎉 ZERO WASTE ACHIEVED! You ate the entire cup! 1 plastic cup prevented from entering the landfill!`;
            }
        },

        resetSimulator() {
            this.liquidLevel = 0;
            this.bites = 0;
            this.isPouring = false;
            this.timerRunning = false;
            this.timerSeconds = 2400;
            this.zeroWasteAchieved = false;
            this.statusBubble = `Cup reset! Select your drink and test the crunch!`;
        },

        orderSimulatorCup() {
            const drink = this.activeDrink;
            this.addToCart({
                id: 'sim-' + this.selectedFlavor,
                name: drink.cupName,
                price: drink.price,
                piece_count: drink.pack,
                size: drink.size,
                flavor: drink.name,
                image: drink.image,
                qty: 1
            });
        }
    };
}
window.cupSimulator = cupSimulator;
