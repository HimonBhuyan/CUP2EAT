@extends('layouts.app')

@section('title', 'CUP2EAT | Eat Your Drink - 100% Edible Cups, Zero Waste, Pan-India')
@section('meta_description', 'Say goodbye to plastic and paper cups. Cup2Eat offers delicious edible cups for chai, coffee, and shakes. Wholesale supply for cafes and retail packs for home.')

@section('content')

<!-- Hero Section (With Cinematic Cafe Ambiance & Live Interactive Elements) -->
<section id="hero-section" class="relative text-white pt-20 sm:pt-28 lg:pt-32 pb-24 lg:pb-32 overflow-hidden bg-forest-950">
    
    <!-- 1. Cinematic 4K Artisan Coffee & Roastery Background with Rich Emerald & Cocoa Vignette -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/brand/hero-bg-4k.jpg') }}" alt="Artisan Coffee Roastery Ambiance" class="w-full h-full object-cover object-center scale-105 transition-transform duration-1000 ease-out">
        <!-- Subtle dark emerald & cocoa vignette overlays for appetizing warmth and razor-sharp readability -->
        <div class="absolute inset-0 bg-forest-950/65 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-forest-950/95 via-forest-950/80 to-forest-950/40"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-forest-950/75 via-transparent to-forest-950"></div>
    </div>

    <!-- 2. Interactive Cursor Glow Layer (Follows Mouse in Real-Time) -->
    <div class="absolute inset-0 pointer-events-none live-interactive-glow z-0"></div>

    <!-- 3. Living Ambient Aurora Orbs (Smooth Floating & Breathing Light) -->
    <div class="absolute -top-20 left-1/4 w-[520px] h-[520px] bg-emerald-500/15 rounded-full blur-3xl pointer-events-none animate-float-slow z-0"></div>
    <div class="absolute top-1/3 -right-20 w-[480px] h-[480px] bg-gold-500/15 rounded-full blur-3xl pointer-events-none animate-float-reverse z-0"></div>
    <div class="absolute -bottom-24 left-1/3 w-[550px] h-[550px] bg-amber-600/12 rounded-full blur-3xl pointer-events-none animate-pulse-glow z-0"></div>

    <!-- 4. Live 60fps Golden Aroma & Eco Motes Particle Canvas -->
    <canvas id="live-hero-canvas" class="absolute inset-0 w-full h-full pointer-events-none z-0"></canvas>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">

            <!-- Hero Left Copy -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">

                <!-- Pill Badge -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-forest-700/60 border border-gold-500/40 text-gold-300 text-xs sm:text-sm font-semibold shadow-inner">
                    <span class="w-2 h-2 rounded-full bg-gold-400 animate-pulse"></span>
                    <span>Revolutionizing the way India drinks Chai & Coffee ☕</span>
                </div>

                <!-- Main Heading -->
                <h1 class="font-heading font-black text-4xl sm:text-5xl lg:text-6xl tracking-tight leading-[1.1]">
                    Don't Just Drink It... <br>
                    <span class="text-gradient-gold">Eat Your Cup!</span>
                </h1>

                <!-- Subheading -->
                <p class="text-slate-200 text-base sm:text-lg lg:text-xl font-normal leading-relaxed max-w-2xl mx-auto lg:mx-0 text-slate-300/90">
                    Crispy, leak-proof, delicious edible wafer cups lined with rich dark chocolate, elaichi, vanilla, and mango. 
                    <strong class="text-white">Zero plastic. Zero paper waste. 100% crunch and pure delight.</strong>
                </p>

                <!-- Value Proposition Highlights -->
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 pt-2 text-xs sm:text-sm">
                    <div class="flex items-center gap-2 bg-forest-800/80 px-3 py-2 rounded-xl border border-forest-700/60">
                        <i class="fa-solid fa-clock-rotate-left text-gold-400 text-base"></i>
                        <span class="text-slate-200 font-medium">40+ Mins Leak Proof</span>
                    </div>
                    <div class="flex items-center gap-2 bg-forest-800/80 px-3 py-2 rounded-xl border border-forest-700/60">
                        <i class="fa-solid fa-leaf text-emerald-400 text-base"></i>
                        <span class="text-slate-200 font-medium">100% Pure Veg</span>
                    </div>
                    <div class="flex items-center gap-2 bg-forest-800/80 px-3 py-2 rounded-xl border border-forest-700/60 col-span-2 sm:col-span-1">
                        <i class="fa-solid fa-award text-gold-400 text-base"></i>
                        <span class="text-slate-200 font-medium">FSSAI Certified</span>
                    </div>
                </div>

                <!-- CTA Actions -->
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-4">
                    <a href="{{ route('menu') }}"
                       class="w-full sm:w-auto px-8 py-4 rounded-xl bg-gradient-to-r from-gold-500 via-gold-400 to-amber-500 text-forest-900 font-heading font-extrabold text-base shadow-xl hover:shadow-gold-500/25 hover:scale-[1.02] transition-all duration-200 flex items-center justify-center gap-2">
                        <span>Explore Menu & Flavors</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="{{ route('wholesale') }}#sample-request"
                       class="w-full sm:w-auto px-7 py-4 rounded-xl bg-forest-800 hover:bg-forest-700 text-white font-semibold text-base border border-forest-600 transition flex items-center justify-center gap-2">
                        <i class="fa-solid fa-box-open text-gold-400"></i>
                        <span>Get Cafe Sample Box</span>
                    </a>
                </div>

                <!-- Social Proof Avatars & Orders -->
                <div class="pt-4 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 text-xs text-slate-300">
                    <div class="flex -space-x-2">
                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-forest-800 object-cover" src="{{ asset('images/brand/logo.jpg') }}" alt="Cup2Eat Official">
                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-forest-800 object-cover" src="{{ asset('images/brand/latte-art-cup-4k.jpg') }}" alt="Barista Latte Cup">
                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-forest-800 object-cover" src="{{ asset('images/brand/chai-cup-4k.jpg') }}" alt="Kadak Chai Cup">
                    </div>
                    <div>
                        <span class="font-bold text-white">150,000+ Cups Dispatched</span> across Mumbai, Ahmedabad, Gurugram, Odisha & Pan-India.
                    </div>
                </div>

            </div>

            <!-- Hero Right Visual Card -->
            <div class="lg:col-span-5 relative">
                <div class="relative mx-auto max-w-md lg:max-w-none">

                    <!-- Outer decorative frame with gold gradient border -->
                    <div class="relative rounded-3xl p-2.5 bg-gradient-to-tr from-gold-500/40 via-forest-600 to-gold-400/30 shadow-2xl">
                        <div class="relative rounded-2xl overflow-hidden bg-forest-800 aspect-[4/5] group">
                            <img src="{{ asset('images/brand/latte-art-cup-4k.jpg') }}"
                                 alt="Cup2Eat Edible Latte Art Cup"
                                 class="w-full h-full object-cover object-center group-hover:scale-105 transition duration-700 ease-out">
                            
                            <!-- Overlay gradient -->
                            <div class="absolute inset-0 bg-gradient-to-t from-forest-900/90 via-forest-900/20 to-transparent"></div>

                            <!-- Bottom Floating Card -->
                            <div class="absolute bottom-4 left-4 right-4 bg-forest-900/95 backdrop-blur-md border border-gold-500/40 p-4 rounded-2xl shadow-xl">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <div class="flex items-center gap-1.5 text-gold-400 text-xs font-bold uppercase tracking-wider">
                                            <i class="fa-solid fa-mug-hot"></i> Barista Signature
                                        </div>
                                        <h3 class="font-heading font-black text-white text-lg sm:text-xl">Heart Latte Choco-Cup</h3>
                                        <p class="text-xs text-slate-300">Waffle Cup + Rich Cocoa Seal</p>
                                    </div>
                                    <div class="text-right">
                                        <span class="text-xs text-slate-400 line-through">₹4,200</span>
                                        <div class="text-xl font-extrabold text-gold-400 font-heading">₹3,200<span class="text-xs text-white font-normal">/bulk</span></div>
                                    </div>
                                </div>
                                <div class="mt-3 pt-3 border-t border-forest-700/60 flex items-center justify-between text-xs text-slate-300">
                                    <span class="flex items-center gap-1 text-emerald-400"><i class="fa-solid fa-check"></i> 100% Leak Proof</span>
                                    <a href="{{ route('wholesale') }}" class="text-gold-400 font-bold hover:underline flex items-center gap-1">Order Bulk <i class="fa-solid fa-arrow-right text-[10px]"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Badge: Free Shipping -->
                    <div class="absolute -top-4 -left-4 bg-gold-500 text-forest-900 font-heading font-black text-xs px-3.5 py-2 rounded-xl shadow-lg border border-gold-300 flex items-center gap-1.5 transform -rotate-3">
                        <i class="fa-solid fa-truck-fast"></i>
                        <span>PAN-INDIA DISPATCH</span>
                    </div>

                    <!-- Floating Badge: Eco Impact (positioned left to avoid fixed action collision) -->
                    <div class="absolute -bottom-4 -left-3 bg-forest-700/95 backdrop-blur-md text-white text-xs px-4 py-2.5 rounded-xl shadow-xl border border-forest-500/60 flex items-center gap-2">
                        <div class="w-7 h-7 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold">
                            ♻️
                        </div>
                        <div>
                            <p class="font-bold text-[11px] uppercase tracking-wider text-emerald-300">Zero Trash</p>
                            <p class="font-semibold text-xs">Eat Your Cup Clean!</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- Impact Metrics Bar -->
<section class="bg-forest-900 border-y border-forest-800 py-8 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 text-center">
            
            <div class="p-4 rounded-2xl bg-forest-800/40 border border-forest-700/40">
                <div class="text-3xl sm:text-4xl font-heading font-black text-gradient-gold">150,000+</div>
                <p class="text-xs sm:text-sm font-semibold text-slate-200 mt-1">Plastic & Wax Cups Replaced</p>
                <span class="text-[11px] text-emerald-400">Saving Indian Landfills</span>
            </div>

            <div class="p-4 rounded-2xl bg-forest-800/40 border border-forest-700/40">
                <div class="text-3xl sm:text-4xl font-heading font-black text-gradient-gold">40+ Mins</div>
                <p class="text-xs sm:text-sm font-semibold text-slate-200 mt-1">Leak-Proof Hot & Cold</p>
                <span class="text-[11px] text-gold-300">Up to 85°C Chai & Coffee</span>
            </div>

            <div class="p-4 rounded-2xl bg-forest-800/40 border border-forest-700/40">
                <div class="text-3xl sm:text-4xl font-heading font-black text-gradient-gold">28+ Cities</div>
                <p class="text-xs sm:text-sm font-semibold text-slate-200 mt-1">Active Deliveries Across India</p>
                <span class="text-[11px] text-emerald-400">Mumbai, Ahmedabad, Gurugram</span>
            </div>

            <div class="p-4 rounded-2xl bg-forest-800/40 border border-forest-700/40">
                <div class="text-3xl sm:text-4xl font-heading font-black text-gradient-gold">100% Veg</div>
                <p class="text-xs sm:text-sm font-semibold text-slate-200 mt-1">FSSAI Registered Safe</p>
                <span class="text-[11px] text-gold-300">Natural Grains & Pure Cocoa</span>
            </div>

        </div>
    </div>
</section>

<!-- Professional Infinite Moving Marquee Ticker -->
<section class="relative overflow-hidden bg-forest-950 border-y border-gold-500/25 py-3.5 sm:py-4 text-white shadow-2xl z-20">
    <!-- Gradient Edge Fades for Seamless In/Out Horizon -->
    <div class="absolute left-0 top-0 bottom-0 w-20 sm:w-36 bg-gradient-to-r from-forest-950 via-forest-950/90 to-transparent z-10 pointer-events-none"></div>
    <div class="absolute right-0 top-0 bottom-0 w-20 sm:w-36 bg-gradient-to-l from-forest-950 via-forest-950/90 to-transparent z-10 pointer-events-none"></div>

    <div class="animate-marquee-infinite flex items-center gap-10 whitespace-nowrap text-sm sm:text-base font-heading select-none">
        
        <!-- Track 1 Set -->
        <div class="flex items-center gap-10">
            <!-- 1. Slogan -->
            <div class="flex items-center gap-3">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-gold-500/20 text-gold-300 font-extrabold text-xs uppercase tracking-wider border border-gold-400/40">
                    <i class="fa-solid fa-fire text-amber-400"></i> Trending
                </span>
                <span class="text-white font-extrabold tracking-wide text-base">EAT YOUR DRINK 🍷😋</span>
            </div>

            <span class="text-gold-500/60 text-xs select-none">✦</span>

            <!-- 2. Edible -->
            <div class="flex items-center gap-2 text-emerald-400 font-bold">
                <i class="fa-solid fa-leaf text-emerald-400"></i>
                <span class="text-slate-100">100% Edible Wafer Cups</span>
            </div>

            <span class="text-gold-500/60 text-xs select-none">✦</span>

            <!-- 3. Leak Proof -->
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-clock-rotate-left text-gold-400"></i>
                <span class="text-gold-300 font-bold">40+ Mins Leak-Proof</span>
                <span class="text-xs text-slate-300 hidden sm:inline">(Hot & Cold up to 85°C)</span>
            </div>

            <span class="text-gold-500/60 text-xs select-none">✦</span>

            <!-- 4. FSSAI & Pure Veg -->
            <div class="flex items-center gap-3">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-500/20 text-emerald-300 font-extrabold text-xs uppercase tracking-wider border border-emerald-400/40">
                    <i class="fa-solid fa-shield-check text-emerald-400"></i> Certified
                </span>
                <span class="text-white font-bold">FSSAI Licensed & 100% Pure Veg</span>
            </div>

            <span class="text-gold-500/60 text-xs select-none">✦</span>

            <!-- 5. Chai & Coffee -->
            <div class="flex items-center gap-2 text-amber-300 font-bold">
                <i class="fa-solid fa-mug-hot text-gold-400"></i>
                <span class="text-slate-100">Kadak Chai • Barista Latte • Cold Frappes</span>
            </div>

            <span class="text-gold-500/60 text-xs select-none">✦</span>

            <!-- 6. Pan-India Delivery -->
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-truck-fast text-emerald-400"></i>
                <span class="text-slate-200 font-semibold">Pan-India Dispatch:</span>
                <span class="text-gold-300 font-bold">Mumbai • Ahmedabad • Gurugram • Delhi NCR • Odisha</span>
            </div>

            <span class="text-gold-500/60 text-xs select-none">✦</span>

            <!-- 7. Startup Mahakumbh -->
            <div class="flex items-center gap-3">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-gold-500/20 text-gold-300 font-extrabold text-xs uppercase tracking-wider border border-gold-400/40">
                    <i class="fa-solid fa-trophy text-gold-400"></i> Recognition
                </span>
                <span class="text-white font-bold">Featured at Startup Mahakumbh 2026</span>
            </div>

            <span class="text-gold-500/60 text-xs select-none">✦</span>

            <!-- 8. Flavors -->
            <div class="flex items-center gap-2 text-gold-300 font-bold">
                <i class="fa-solid fa-cookie-bite text-amber-500"></i>
                <span class="text-slate-100">Chocolate Glaze • Cardamom Elaichi • French Vanilla • Strawberry</span>
            </div>

            <span class="text-gold-500/60 text-xs select-none">✦</span>

            <!-- 9. Zero Waste -->
            <div class="flex items-center gap-2 text-emerald-400 font-black tracking-wide">
                <i class="fa-solid fa-recycle text-emerald-400"></i>
                <span>Zero Plastic • Zero Paper Waste • Pure Crunch!</span>
            </div>

            <span class="text-gold-500/60 text-xs select-none">✦</span>
        </div>

        <!-- Track 2 Set (Exact clone for seamless infinite loop) -->
        <div class="flex items-center gap-10" aria-hidden="true">
            <!-- 1. Slogan -->
            <div class="flex items-center gap-3">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-gold-500/20 text-gold-300 font-extrabold text-xs uppercase tracking-wider border border-gold-400/40">
                    <i class="fa-solid fa-fire text-amber-400"></i> Trending
                </span>
                <span class="text-white font-extrabold tracking-wide text-base">EAT YOUR DRINK 🍷😋</span>
            </div>

            <span class="text-gold-500/60 text-xs select-none">✦</span>

            <!-- 2. Edible -->
            <div class="flex items-center gap-2 text-emerald-400 font-bold">
                <i class="fa-solid fa-leaf text-emerald-400"></i>
                <span class="text-slate-100">100% Edible Wafer Cups</span>
            </div>

            <span class="text-gold-500/60 text-xs select-none">✦</span>

            <!-- 3. Leak Proof -->
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-clock-rotate-left text-gold-400"></i>
                <span class="text-gold-300 font-bold">40+ Mins Leak-Proof</span>
                <span class="text-xs text-slate-300 hidden sm:inline">(Hot & Cold up to 85°C)</span>
            </div>

            <span class="text-gold-500/60 text-xs select-none">✦</span>

            <!-- 4. FSSAI & Pure Veg -->
            <div class="flex items-center gap-3">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-500/20 text-emerald-300 font-extrabold text-xs uppercase tracking-wider border border-emerald-400/40">
                    <i class="fa-solid fa-shield-check text-emerald-400"></i> Certified
                </span>
                <span class="text-white font-bold">FSSAI Licensed & 100% Pure Veg</span>
            </div>

            <span class="text-gold-500/60 text-xs select-none">✦</span>

            <!-- 5. Chai & Coffee -->
            <div class="flex items-center gap-2 text-amber-300 font-bold">
                <i class="fa-solid fa-mug-hot text-gold-400"></i>
                <span class="text-slate-100">Kadak Chai • Barista Latte • Cold Frappes</span>
            </div>

            <span class="text-gold-500/60 text-xs select-none">✦</span>

            <!-- 6. Pan-India Delivery -->
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-truck-fast text-emerald-400"></i>
                <span class="text-slate-200 font-semibold">Pan-India Dispatch:</span>
                <span class="text-gold-300 font-bold">Mumbai • Ahmedabad • Gurugram • Delhi NCR • Odisha</span>
            </div>

            <span class="text-gold-500/60 text-xs select-none">✦</span>

            <!-- 7. Startup Mahakumbh -->
            <div class="flex items-center gap-3">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-gold-500/20 text-gold-300 font-extrabold text-xs uppercase tracking-wider border border-gold-400/40">
                    <i class="fa-solid fa-trophy text-gold-400"></i> Recognition
                </span>
                <span class="text-white font-bold">Featured at Startup Mahakumbh 2026</span>
            </div>

            <span class="text-gold-500/60 text-xs select-none">✦</span>

            <!-- 8. Flavors -->
            <div class="flex items-center gap-2 text-gold-300 font-bold">
                <i class="fa-solid fa-cookie-bite text-amber-500"></i>
                <span class="text-slate-100">Chocolate Glaze • Cardamom Elaichi • French Vanilla • Strawberry</span>
            </div>

            <span class="text-gold-500/60 text-xs select-none">✦</span>

            <!-- 9. Zero Waste -->
            <div class="flex items-center gap-2 text-emerald-400 font-black tracking-wide">
                <i class="fa-solid fa-recycle text-emerald-400"></i>
                <span>Zero Plastic • Zero Paper Waste • Pure Crunch!</span>
            </div>

            <span class="text-gold-500/60 text-xs select-none">✦</span>
        </div>

    </div>
</section>

<!-- How It Works: 4-Step Interactive Journey -->
<section class="py-20 bg-[#FAF7F2]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs font-bold uppercase tracking-widest text-forest-700 bg-forest-100 px-3.5 py-1.5 rounded-full border border-forest-200">
                Simple • Delicious • Eco-Friendly
            </span>
            <h2 class="font-heading font-black text-3xl sm:text-4xl text-forest-900 mt-3">
                How Does An Edible Cup Work?
            </h2>
            <p class="text-slate-600 text-sm sm:text-base mt-2">
                No plastic liners. No cardboard taste. Experience the future of beverage consumption in 4 easy steps.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 relative">

            <!-- Step 1 -->
            <div class="bg-white rounded-3xl p-7 shadow-sm border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition duration-300 relative group">
                <div class="w-14 h-14 rounded-2xl bg-forest-700 text-gold-300 font-heading font-black text-2xl flex items-center justify-center mb-6 group-hover:bg-gold-500 group-hover:text-forest-900 transition">
                    01
                </div>
                <h3 class="font-heading font-bold text-xl text-forest-900 mb-2">Pour Your Drink</h3>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Pour steaming kadak chai, barista latte, espresso, thick cold coffee, or scoop fresh ice cream right into the wafer cup.
                </p>
                <div class="mt-4 pt-4 border-t border-slate-100 text-xs font-semibold text-forest-700 flex items-center gap-1.5">
                    <i class="fa-solid fa-temperature-arrow-up text-amber-500"></i> Holds up to 85°C heat
                </div>
            </div>

            <!-- Step 2 -->
            <div class="bg-white rounded-3xl p-7 shadow-sm border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition duration-300 relative group">
                <div class="w-14 h-14 rounded-2xl bg-forest-700 text-gold-300 font-heading font-black text-2xl flex items-center justify-center mb-6 group-hover:bg-gold-500 group-hover:text-forest-900 transition">
                    02
                </div>
                <h3 class="font-heading font-bold text-xl text-forest-900 mb-2">Sip & Savor</h3>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Take your time! The cup stays solid, crispy, and 100% leak-proof for over 40 minutes without softening or leaking.
                </p>
                <div class="mt-4 pt-4 border-t border-slate-100 text-xs font-semibold text-forest-700 flex items-center gap-1.5">
                    <i class="fa-solid fa-shield-halved text-emerald-500"></i> Zero sogginess guarantee
                </div>
            </div>

            <!-- Step 3 -->
            <div class="bg-white rounded-3xl p-7 shadow-sm border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition duration-300 relative group">
                <div class="w-14 h-14 rounded-2xl bg-forest-700 text-gold-300 font-heading font-black text-2xl flex items-center justify-center mb-6 group-hover:bg-gold-500 group-hover:text-forest-900 transition">
                    03
                </div>
                <h3 class="font-heading font-bold text-xl text-forest-900 mb-2">Eat Your Snack</h3>
                <p class="text-slate-600 text-sm leading-relaxed">
                    The best part! Crunch into the wafer coated with rich melted chocolate, cardamom, or vanilla. Your cup is your snack!
                </p>
                <div class="mt-4 pt-4 border-t border-slate-100 text-xs font-semibold text-forest-700 flex items-center gap-1.5">
                    <i class="fa-solid fa-cookie-bite text-amber-600"></i> "Sip it. Snack it. Love it."
                </div>
            </div>

            <!-- Step 4 -->
            <div class="bg-white rounded-3xl p-7 shadow-sm border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition duration-300 relative group">
                <div class="w-14 h-14 rounded-2xl bg-forest-700 text-gold-300 font-heading font-black text-2xl flex items-center justify-center mb-6 group-hover:bg-gold-500 group-hover:text-forest-900 transition">
                    04
                </div>
                <h3 class="font-heading font-bold text-xl text-forest-900 mb-2">Zero Waste</h3>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Zero cups sent to landfills. Even if tossed in soil, it is 100% natural and decomposes naturally within days.
                </p>
                <div class="mt-4 pt-4 border-t border-slate-100 text-xs font-semibold text-forest-700 flex items-center gap-1.5">
                    <i class="fa-solid fa-earth-americas text-emerald-500"></i> Mother Nature approved
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Signature Flavors Showcase -->
<section class="py-20 bg-forest-900 text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
            <div>
                <span class="text-xs font-bold uppercase tracking-widest text-gold-400 bg-forest-800 px-3.5 py-1.5 rounded-full border border-forest-700">
                    Handcrafted Flavors
                </span>
                <h2 class="font-heading font-black text-3xl sm:text-4xl text-white mt-3">
                    Every Drink Finds Its Perfect Match
                </h2>
                <p class="text-slate-300 text-sm sm:text-base mt-2 max-w-xl">
                    Whether you love strong Indian Kadak Chai, Italian Cappuccino, or refreshing fruit shakes, we have an edible cup tailored for you.
                </p>
            </div>
            <div>
                <a href="{{ route('menu') }}" class="inline-flex items-center gap-2 text-gold-400 font-bold hover:text-white transition group">
                    <span>View Complete Menu & Prices</span>
                    <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition"></i>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Flavor 1: Dark Chocolate -->
            <div class="bg-forest-800 rounded-3xl overflow-hidden border border-forest-700/60 shadow-xl group hover:border-gold-500/50 transition duration-300">
                <div class="aspect-[16/10] overflow-hidden relative">
                    <img src="{{ asset('images/brand/latte-art-cup-4k.jpg') }}" alt="Chocolate Coated Cup" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-3 right-3 bg-forest-900/90 text-gold-400 text-xs font-bold px-3 py-1 rounded-full border border-gold-500/30">
                        ⭐ Best Seller
                    </div>
                </div>
                <div class="p-6 space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-wider text-gold-300">Coffee & Chai Classic</span>
                        <span class="text-xs bg-forest-700 text-emerald-300 font-semibold px-2 py-0.5 rounded">100ml</span>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Dark Chocolate Coated</h3>
                    <p class="text-slate-300 text-xs leading-relaxed">
                        Lined with rich Belgian-style dark chocolate that creates a natural leak-proof barrier and melts gracefully into your drink.
                    </p>
                    <div class="pt-3 border-t border-forest-700 flex items-center justify-between">
                        <div>
                            <span class="text-gold-400 font-bold text-sm">₹3,200</span>
                            <span class="text-[10px] text-slate-400 block">200 Pcs Bulk</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <button type="button"
                                    @click="addToCart({ id: '100ml-cc-premium-chocolate-coated-bulk', name: '100ml CC Premium Chocolate Coated', price: 3200, piece_count: '200 Pcs Box', size: '100ml', flavor: 'Dark Chocolate', image: '{{ asset('images/brand/latte-art-cup-4k.jpg') }}', qty: 1 })"
                                    class="px-2.5 py-1.5 rounded-lg bg-gold-500 hover:bg-gold-400 text-forest-900 font-bold text-xs flex items-center gap-1 transition">
                                <i class="fa-solid fa-plus text-[10px]"></i> Cart
                            </button>
                            <a href="{{ route('product.show', '100ml-cc-premium-chocolate-coated-bulk') }}" class="text-xs text-white font-semibold hover:text-gold-300 flex items-center gap-1">
                                Details <i class="fa-solid fa-chevron-right text-[10px]"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Flavor 2: Royal Elaichi -->
            <div class="bg-forest-800 rounded-3xl overflow-hidden border border-forest-700/60 shadow-xl group hover:border-gold-500/50 transition duration-300">
                <div class="aspect-[16/10] overflow-hidden relative">
                    <img src="{{ asset('images/brand/chai-cup-4k.jpg') }}" alt="Royal Elaichi Chai Cup" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-3 right-3 bg-amber-500 text-forest-900 text-xs font-bold px-3 py-1 rounded-full">
                        ☕ Chai Special
                    </div>
                </div>
                <div class="p-6 space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-wider text-gold-300">Authentic Indian Spice</span>
                        <span class="text-xs bg-forest-700 text-emerald-300 font-semibold px-2 py-0.5 rounded">100ml</span>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Royal Cardamom (Elaichi)</h3>
                    <p class="text-slate-300 text-xs leading-relaxed">
                        Infused with real green cardamom pods. The fragrant aroma complements hot cutting chai and creates a tea-stall phenomenon.
                    </p>
                    <div class="pt-3 border-t border-forest-700 flex items-center justify-between">
                        <div>
                            <span class="text-gold-400 font-bold text-sm">₹99</span>
                            <span class="text-[10px] text-slate-400 block">Pack of 10</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <button type="button"
                                    @click="addToCart({ id: 'retail-royal-elaichi-pack-10', name: 'Royal Cardamom Retail Pack', price: 99, piece_count: 'Pack of 10 Cups', size: '100ml', flavor: 'Elaichi Cardamom', image: '{{ asset('images/brand/chai-cup-4k.jpg') }}', qty: 1 })"
                                    class="px-2.5 py-1.5 rounded-lg bg-gold-500 hover:bg-gold-400 text-forest-900 font-bold text-xs flex items-center gap-1 transition">
                                <i class="fa-solid fa-plus text-[10px]"></i> Cart
                            </button>
                            <a href="{{ route('product.show', 'retail-royal-elaichi-pack-10') }}" class="text-xs text-white font-semibold hover:text-gold-300 flex items-center gap-1">
                                Details <i class="fa-solid fa-chevron-right text-[10px]"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Flavor 3: 150ml Cold Coffee & Milkshake -->
            <div class="bg-forest-800 rounded-3xl overflow-hidden border border-forest-700/60 shadow-xl group hover:border-gold-500/50 transition duration-300">
                <div class="aspect-[16/10] overflow-hidden relative">
                    <img src="{{ asset('images/brand/cold-coffee-4k.jpg') }}" alt="150ml Cold Coffee Shake Cup" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-3 right-3 bg-emerald-500 text-forest-900 text-xs font-bold px-3 py-1 rounded-full">
                        ❄️ Cold Brews & Shakes
                    </div>
                </div>
                <div class="p-6 space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-wider text-gold-300">Large Capacity</span>
                        <span class="text-xs bg-forest-700 text-gold-300 font-semibold px-2 py-0.5 rounded">150ml Glass</span>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Cold Coffee & Shake Glasses</h3>
                    <p class="text-slate-300 text-xs leading-relaxed">
                        Specially thickened double-layer wafer wall for ice cubes, thick oreo shakes, cold frappes, and loaded ice cream desserts.
                    </p>
                    <div class="pt-3 border-t border-forest-700 flex items-center justify-between">
                        <div>
                            <span class="text-gold-400 font-bold text-sm">₹4,320</span>
                            <span class="text-[10px] text-slate-400 block">200 Pcs Box</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <button type="button"
                                    @click="addToCart({ id: '150ml-cold-coffee-shake-glasses', name: '150ml Cold Coffee & Shake Glasses', price: 4320, piece_count: 'Wholesale Box (200 Pcs)', size: '150ml', flavor: 'Cold Beverage Wafer Glass', image: '{{ asset('images/brand/cold-coffee-4k.jpg') }}', qty: 1 })"
                                    class="px-2.5 py-1.5 rounded-lg bg-gold-500 hover:bg-gold-400 text-forest-900 font-bold text-xs flex items-center gap-1 transition">
                                <i class="fa-solid fa-plus text-[10px]"></i> Cart
                            </button>
                            <a href="{{ route('product.show', '150ml-cold-coffee-shake-glasses') }}" class="text-xs text-white font-semibold hover:text-gold-300 flex items-center gap-1">
                                Details <i class="fa-solid fa-chevron-right text-[10px]"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Flavor 4: Vanilla Cup -->
            <div class="bg-forest-800 rounded-3xl overflow-hidden border border-forest-700/60 shadow-xl group hover:border-gold-500/50 transition duration-300">
                <div class="aspect-[16/10] overflow-hidden relative">
                    <img src="{{ asset('images/brand/vanilla-cup-4k.jpg') }}" alt="French Vanilla Cup" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-3 right-3 bg-forest-900/90 text-gold-400 text-xs font-bold px-3 py-1 rounded-full">
                        🍦 Sweet & Subtle
                    </div>
                </div>
                <div class="p-6 space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-wider text-gold-300">Aromatic Wafer</span>
                        <span class="text-xs bg-forest-700 text-emerald-300 font-semibold px-2 py-0.5 rounded">100ml</span>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Creamy French Vanilla</h3>
                    <p class="text-slate-300 text-xs leading-relaxed">
                        Sweet floral bourbon vanilla notes that subtly meld with bitter espresso crema and hot chocolate.
                    </p>
                    <div class="pt-3 border-t border-forest-700 flex items-center justify-between">
                        <div>
                            <span class="text-gold-400 font-bold text-sm">₹99</span>
                            <span class="text-[10px] text-slate-400 block">Pack of 10</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <button type="button"
                                    @click="addToCart({ id: 'retail-creamy-vanilla-pack-10', name: 'Creamy French Vanilla Retail Pack', price: 99, piece_count: 'Pack of 10 Cups', size: '100ml', flavor: 'French Vanilla', image: '{{ asset('images/brand/vanilla-cup-4k.jpg') }}', qty: 1 })"
                                    class="px-2.5 py-1.5 rounded-lg bg-gold-500 hover:bg-gold-400 text-forest-900 font-bold text-xs flex items-center gap-1 transition">
                                <i class="fa-solid fa-plus text-[10px]"></i> Cart
                            </button>
                            <a href="{{ route('product.show', 'retail-creamy-vanilla-pack-10') }}" class="text-xs text-white font-semibold hover:text-gold-300 flex items-center gap-1">
                                Details <i class="fa-solid fa-chevron-right text-[10px]"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Flavor 5: Strawberry Cup -->
            <div class="bg-forest-800 rounded-3xl overflow-hidden border border-forest-700/60 shadow-xl group hover:border-gold-500/50 transition duration-300">
                <div class="aspect-[16/10] overflow-hidden relative">
                    <img src="{{ asset('images/brand/strawberry-cup-4k.jpg') }}" alt="Strawberry Dessert Cup" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-3 right-3 bg-pink-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                        🍓 Fruit Blast
                    </div>
                </div>
                <div class="p-6 space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-wider text-gold-300">Summer Delights</span>
                        <span class="text-xs bg-forest-700 text-emerald-300 font-semibold px-2 py-0.5 rounded">Pack of 8</span>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Strawberry Dessert Cup</h3>
                    <p class="text-slate-300 text-xs leading-relaxed">
                        Fruity, colorful wafer cups bursting with natural berry flavours. Loved by children, dessert bars and gelatos.
                    </p>
                    <div class="pt-3 border-t border-forest-700 flex items-center justify-between">
                        <div>
                            <span class="text-gold-400 font-bold text-sm">₹109</span>
                            <span class="text-[10px] text-slate-400 block">Pack of 8</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <button type="button"
                                    @click="addToCart({ id: 'retail-strawberry-crush-pack-8', name: 'Strawberry Dessert Cups Retail Pack', price: 109, piece_count: 'Pack of 8 Cups', size: '100ml', flavor: 'Strawberry Crush', image: '{{ asset('images/brand/strawberry-cup-4k.jpg') }}', qty: 1 })"
                                    class="px-2.5 py-1.5 rounded-lg bg-gold-500 hover:bg-gold-400 text-forest-900 font-bold text-xs flex items-center gap-1 transition">
                                <i class="fa-solid fa-plus text-[10px]"></i> Cart
                            </button>
                            <a href="{{ route('menu') }}" class="text-xs text-white font-semibold hover:text-gold-300 flex items-center gap-1">
                                Explore <i class="fa-solid fa-chevron-right text-[10px]"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Flavor 6: Wholesale Carton Master Pack -->
            <div class="bg-forest-800 rounded-3xl overflow-hidden border border-forest-700/60 shadow-xl group hover:border-gold-500/50 transition duration-300">
                <div class="aspect-[16/10] overflow-hidden relative">
                    <img src="{{ asset('images/brand/wholesale-box-4k.jpg') }}" alt="Wholesale Master Carton" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-3 right-3 bg-gold-500 text-forest-900 text-xs font-bold px-3 py-1 rounded-full">
                        📦 396 Cups Master Box
                    </div>
                </div>
                <div class="p-6 space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-wider text-gold-300">Cafe Bulk Solution</span>
                        <span class="text-xs bg-forest-700 text-gold-300 font-semibold px-2 py-0.5 rounded">396 Cups</span>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-white">Mix Flavour Mega Carton</h3>
                    <p class="text-slate-300 text-xs leading-relaxed">
                        Flagship cafe carton featuring assorted Chocolate, Elaichi and Vanilla edible cups. Free shipping across India.
                    </p>
                    <div class="pt-3 border-t border-forest-700 flex items-center justify-between">
                        <div>
                            <span class="text-gold-400 font-bold text-sm">₹3,999</span>
                            <span class="text-[10px] text-slate-400 block">~₹10/cup</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <button type="button"
                                    @click="addToCart({ id: 'wholesale-mega-carton-396', name: 'Wholesale Master Mix Carton (396 Cups)', price: 3999, piece_count: '396 Cups (Bulk Cafe Carton)', size: '100ml', flavor: 'Mix Flavors (Choco, Elaichi, Vanilla)', image: '{{ asset('images/brand/wholesale-box-4k.jpg') }}', qty: 1 })"
                                    class="px-2.5 py-1.5 rounded-lg bg-gold-500 hover:bg-gold-400 text-forest-900 font-bold text-xs flex items-center gap-1 transition">
                                <i class="fa-solid fa-plus text-[10px]"></i> Cart
                            </button>
                            <a href="{{ route('wholesale') }}" class="text-xs text-white font-semibold hover:text-gold-300 flex items-center gap-1">
                                Details <i class="fa-solid fa-chevron-right text-[10px]"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Cafe & Wholesale Highlight Banner -->
<section class="py-20 bg-gradient-to-r from-wafer-100 via-wafer-50 to-amber-50/60 border-y border-wafer-300/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-forest-900 rounded-3xl p-8 sm:p-12 text-white shadow-2xl relative overflow-hidden">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-7 space-y-5">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-gold-500/20 text-gold-400 text-xs font-bold border border-gold-500/30">
                        <i class="fa-solid fa-store"></i> FOR CAFES, RESTAURANTS & EVENT CATERERS
                    </div>
                    <h2 class="font-heading font-black text-3xl sm:text-4xl text-white leading-tight">
                        Turn Every Chai & Coffee Order Into a <span class="text-gradient-gold">Viral Instagram Sensation</span>
                    </h2>
                    <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                        Cafes serving Cup2Eat report a <strong class="text-gold-400">30% higher average order value</strong> and countless organic Instagram Stories as customers record themselves biting into their coffee cups!
                    </p>
                    
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 pt-2">
                        <div class="border-l-2 border-gold-500 pl-3">
                            <div class="font-heading font-black text-xl text-white">₹3,999</div>
                            <div class="text-xs text-slate-300">Wholesale Box (396 Cups)</div>
                            <div class="text-[10px] text-gold-400 font-semibold">~₹10/cup with delivery!</div>
                        </div>
                        <div class="border-l-2 border-gold-500 pl-3">
                            <div class="font-heading font-black text-xl text-white">Free Shipping</div>
                            <div class="text-xs text-slate-300">All Over India</div>
                            <div class="text-[10px] text-emerald-400 font-semibold">Doorstep Freight Included</div>
                        </div>
                        <div class="border-l-2 border-gold-500 pl-3 col-span-2 sm:col-span-1">
                            <div class="font-heading font-black text-xl text-white">Zero Trash</div>
                            <div class="text-xs text-slate-300">No bins overflow</div>
                            <div class="text-[10px] text-emerald-400 font-semibold">100% Eco-Hero Cafe</div>
                        </div>
                    </div>

                    <div class="pt-4 flex flex-wrap gap-4">
                        <a href="{{ route('wholesale') }}"
                           class="px-7 py-3.5 rounded-xl bg-gold-500 hover:bg-gold-400 text-forest-900 font-heading font-bold text-sm shadow-lg transition">
                            Explore B2B Wholesale Pricing
                        </a>
                        <a href="{{ route('wholesale') }}#sample-request"
                           class="px-6 py-3.5 rounded-xl bg-forest-800 hover:bg-forest-700 text-white font-semibold text-sm border border-forest-600 transition">
                            Request Cafe Trial Box
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-5">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl border-2 border-gold-500/40">
                        <img src="{{ asset('images/brand/wholesale-box-4k.jpg') }}" alt="Cup2Eat Wholesale Master Box" class="w-full h-auto object-cover">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- The Ugly Truth: Paper & Plastic vs Cup2Eat Comparison -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-50 px-3.5 py-1.5 rounded-full border border-emerald-200">
                The Science of Sustainability
            </span>
            <h2 class="font-heading font-black text-3xl sm:text-4xl text-forest-900 mt-3">
                Did You Know? "Paper Cups" Are Not Eco-Friendly
            </h2>
            <p class="text-slate-600 text-sm sm:text-base mt-2">
                Almost every paper cup is lined with a hidden petroleum-based plastic coating (Polyethylene) that leaches into boiling hot beverages and cannot be recycled in normal paper mills.
            </p>
        </div>

        <div class="overflow-x-auto shadow-sm rounded-3xl border border-slate-200">
            <table class="w-full text-left text-sm text-slate-700">
                <thead class="bg-forest-900 text-white text-xs uppercase tracking-wider font-heading">
                    <tr>
                        <th class="py-4 px-6 font-bold">Feature</th>
                        <th class="py-4 px-6 text-red-400 font-bold">Single-Use Plastic</th>
                        <th class="py-4 px-6 text-amber-400 font-bold">Wax/PE Lined Paper</th>
                        <th class="py-4 px-6 text-gold-400 font-black bg-forest-800 border-x border-gold-500/30">CUP2EAT Edible Cup</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 bg-white">
                    <tr class="hover:bg-slate-50">
                        <td class="py-4 px-6 font-semibold text-slate-900">Decomposition Time</td>
                        <td class="py-4 px-6 text-red-600">450+ Years</td>
                        <td class="py-4 px-6 text-amber-600">30+ Years (PE coating)</td>
                        <td class="py-4 px-6 font-bold text-forest-900 bg-wafer-50/70 border-x border-gold-500/20">
                            0 Days (Eaten!) or 7 Days in soil
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50">
                        <td class="py-4 px-6 font-semibold text-slate-900">Health & Microplastics</td>
                        <td class="py-4 px-6 text-red-600">Releases toxic phthalates</td>
                        <td class="py-4 px-6 text-amber-600">25,000 microplastics per hot cup</td>
                        <td class="py-4 px-6 font-bold text-emerald-600 bg-wafer-50/70 border-x border-gold-500/20">
                            100% Food Grade, Pure & Edible
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50">
                        <td class="py-4 px-6 font-semibold text-slate-900">Taste & Flavor</td>
                        <td class="py-4 px-6 text-slate-500">Chemical smell</td>
                        <td class="py-4 px-6 text-slate-500">Soggy paper taste</td>
                        <td class="py-4 px-6 font-bold text-amber-800 bg-wafer-50/70 border-x border-gold-500/20">
                            Delicious Cocoa, Elaichi or Vanilla Crunch
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50">
                        <td class="py-4 px-6 font-semibold text-slate-900">Customer Social Sharing</td>
                        <td class="py-4 px-6 text-slate-400">Zero</td>
                        <td class="py-4 px-6 text-slate-400">Zero</td>
                        <td class="py-4 px-6 font-bold text-pink-600 bg-wafer-50/70 border-x border-gold-500/20">
                            Viral Instagram Videos & Word-of-Mouth
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50">
                        <td class="py-4 px-6 font-semibold text-slate-900">FSSAI & Pure Veg Status</td>
                        <td class="py-4 px-6 text-slate-400">Non-food item</td>
                        <td class="py-4 px-6 text-slate-400">Non-food item</td>
                        <td class="py-4 px-6 font-bold text-forest-900 bg-wafer-50/70 border-x border-gold-500/20">
                            FSSAI Licensed & 100% Pure Veg
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</section>

<!-- Real Brand Journey & Recognition (Instagram Highlights) -->
<section class="py-20 bg-[#FAF7F2]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs font-bold uppercase tracking-widest text-gold-600 bg-gold-100 px-3.5 py-1.5 rounded-full border border-gold-300">
                Recognised Innovation
            </span>
            <h2 class="font-heading font-black text-3xl sm:text-4xl text-forest-900 mt-3">
                From University Challenge To National Spotlight
            </h2>
            <p class="text-slate-600 text-sm sm:text-base mt-2">
                Founded by <strong>Varun Khera</strong>, Cup2Eat has captured attention across national startup showcases, college entrepreneurship summits, and cafe chains.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- Card 1: Founder Varun & Innovation -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-slate-200 group hover:shadow-xl transition">
                <img src="{{ asset('images/brand/latte-art-cup-4k.jpg') }}" alt="Signature Edible Cup Innovation" class="w-full aspect-square object-cover group-hover:scale-105 transition duration-500">
                <div class="p-5">
                    <span class="text-[10px] font-bold uppercase tracking-wider text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded">Founder's Innovation</span>
                    <h4 class="font-heading font-bold text-base text-forest-900 mt-2">Varun Khera</h4>
                    <p class="text-xs text-slate-600 mt-1">
                        Pioneering single-serve edible packaging to make sustainable drinking effortless and fun.
                    </p>
                </div>
            </div>

            <!-- Card 2: Award Ceremony / Chai Special -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-slate-200 group hover:shadow-xl transition">
                <img src="{{ asset('images/brand/chai-cup-4k.jpg') }}" alt="Steaming Kadak Chai in Elaichi Wafer Cup" class="w-full aspect-square object-cover group-hover:scale-105 transition duration-500">
                <div class="p-5">
                    <span class="text-[10px] font-bold uppercase tracking-wider text-amber-700 bg-amber-50 px-2 py-0.5 rounded">Awards & Honors</span>
                    <h4 class="font-heading font-bold text-base text-forest-900 mt-2">Startup Mahakumbh</h4>
                    <p class="text-xs text-slate-600 mt-1">
                        Showcased at Bharat Innova & top university entrepreneurship summits (IPEM, Spectra, Mangalmay).
                    </p>
                </div>
            </div>

            <!-- Card 3: Pan-India Delivery -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-slate-200 group hover:shadow-xl transition">
                <img src="{{ asset('images/brand/wholesale-box-4k.jpg') }}" alt="Master Shipping Cartons Pan-India" class="w-full aspect-square object-cover group-hover:scale-105 transition duration-500">
                <div class="p-5">
                    <span class="text-[10px] font-bold uppercase tracking-wider text-forest-700 bg-forest-50 px-2 py-0.5 rounded">Logistics</span>
                    <h4 class="font-heading font-bold text-base text-forest-900 mt-2">Pan-India Shipments</h4>
                    <p class="text-xs text-slate-600 mt-1">
                        Cartons safely packaged and delivered to Mumbai, Ahmedabad, Gurugram, Odisha & across India.
                    </p>
                </div>
            </div>

            <!-- Card 4: Customer Delight -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-slate-200 group hover:shadow-xl transition">
                <img src="{{ asset('images/brand/cold-coffee-4k.jpg') }}" alt="150ml Cold Coffee Shake Glasses" class="w-full aspect-square object-cover group-hover:scale-105 transition duration-500">
                <div class="p-5">
                    <span class="text-[10px] font-bold uppercase tracking-wider text-pink-700 bg-pink-50 px-2 py-0.5 rounded">Beverage Revolution</span>
                    <h4 class="font-heading font-bold text-base text-forest-900 mt-2">100% Smiles Guaranteed</h4>
                    <p class="text-xs text-slate-600 mt-1">
                        The astonishment when customers realize they can eat their tea and coffee cup after drinking!
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Interactive Cafe ROI & Cup Calculator -->
<section class="py-20 bg-forest-900 text-white relative">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div x-data="{
            cupsPerDay: 80,
            get monthlyCups() { return this.cupsPerDay * 30 },
            get plasticKgSaved() { return Math.round(this.monthlyCups * 0.012) },
            get estimatedCost() { return this.monthlyCups * 10 }
        }" class="bg-forest-800 rounded-3xl p-8 sm:p-12 border border-forest-700 shadow-2xl">

            <div class="text-center max-w-2xl mx-auto mb-10">
                <span class="text-xs font-bold uppercase tracking-wider text-gold-400 bg-forest-700 px-3 py-1 rounded-full border border-forest-600">
                    Interactive Cafe Calculator
                </span>
                <h2 class="font-heading font-black text-2xl sm:text-3xl text-white mt-3">
                    Calculate Your Cafe's Green Impact & Monthly Order
                </h2>
                <p class="text-slate-300 text-xs sm:text-sm mt-1">
                    Drag the slider to match your daily beverage footfall:
                </p>
            </div>

            <!-- Slider control -->
            <div class="max-w-xl mx-auto space-y-4">
                <div class="flex items-center justify-between font-bold text-sm">
                    <span class="text-slate-300">Daily Hot/Cold Cups Served:</span>
                    <span class="text-gold-400 font-heading font-black text-2xl" x-text="cupsPerDay + ' cups/day'"></span>
                </div>
                <input type="range" min="20" max="500" step="10" x-model="cupsPerDay"
                       class="w-full h-3 bg-forest-900 rounded-lg appearance-none cursor-pointer accent-gold-500">
                <div class="flex justify-between text-[11px] text-slate-400">
                    <span>20 (Boutique Kiosk)</span>
                    <span>150 (Busy Cafe)</span>
                    <span>500+ (IT Food Court / Chain)</span>
                </div>
            </div>

            <!-- Dynamic Outputs -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-3xl mx-auto mt-10 text-center">
                
                <div class="bg-forest-900/80 p-5 rounded-2xl border border-forest-700">
                    <div class="text-xs text-slate-400 uppercase font-semibold">Monthly Plastic Cups Replaced</div>
                    <div class="font-heading font-black text-3xl text-gold-400 mt-1" x-text="monthlyCups.toLocaleString() + ' cups'"></div>
                    <div class="text-[11px] text-emerald-400 mt-1 font-semibold">100% Zero Landfill Waste</div>
                </div>

                <div class="bg-forest-900/80 p-5 rounded-2xl border border-forest-700">
                    <div class="text-xs text-slate-400 uppercase font-semibold">Plastic Pollution Prevented</div>
                    <div class="font-heading font-black text-3xl text-emerald-400 mt-1" x-text="plasticKgSaved + ' kg'"></div>
                    <div class="text-[11px] text-slate-300 mt-1">of toxic petroleum waste</div>
                </div>

                <div class="bg-forest-900/80 p-5 rounded-2xl border border-forest-700">
                    <div class="text-xs text-slate-400 uppercase font-semibold">Recommended Wholesale Supply</div>
                    <div class="font-heading font-black text-3xl text-gold-400 mt-1" x-text="Math.ceil(monthlyCups / 396) + ' Cartons'"></div>
                    <div class="text-[11px] text-gold-300 mt-1">Includes All-India Delivery</div>
                </div>

            </div>

            <div class="mt-8 text-center">
                <a href="{{ route('wholesale') }}#sample-request" class="inline-flex items-center gap-2 px-8 py-3.5 rounded-xl bg-gold-500 hover:bg-gold-400 text-forest-900 font-heading font-bold text-sm shadow-xl transition">
                    <i class="fa-brands fa-whatsapp text-base"></i>
                    <span>Get Custom Wholesale Quote For My Cafe</span>
                </a>
            </div>

        </div>

    </div>
</section>

<!-- Frequently Asked Questions Accordion -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-14">
            <span class="text-xs font-bold uppercase tracking-widest text-forest-700 bg-forest-100 px-3.5 py-1.5 rounded-full">
                Got Questions?
            </span>
            <h2 class="font-heading font-black text-3xl text-forest-900 mt-3">
                Frequently Asked Questions
            </h2>
        </div>

        <div x-data="{ active: null }" class="space-y-4">

            <!-- Q1 -->
            <div class="border border-slate-200 rounded-2xl overflow-hidden">
                <button @click="active = (active === 1 ? null : 1)"
                        class="w-full text-left px-6 py-4 bg-slate-50 hover:bg-slate-100 font-heading font-bold text-forest-900 flex items-center justify-between text-base">
                    <span>How long does the edible cup hold hot tea or coffee without leaking?</span>
                    <i class="fa-solid fa-chevron-down text-xs transition duration-200" :class="active === 1 ? 'rotate-180 text-gold-600' : 'text-slate-400'"></i>
                </button>
                <div x-show="active === 1" x-cloak class="px-6 py-4 text-sm text-slate-600 leading-relaxed bg-white">
                    Cup2Eat cups are laboratory tested to hold boiling hot liquids (up to 85°C) for over <strong>40+ minutes</strong> without softening, leaking, or degrading. You have plenty of time to enjoy your beverage and then munch your cup!
                </div>
            </div>

            <!-- Q2 -->
            <div class="border border-slate-200 rounded-2xl overflow-hidden">
                <button @click="active = (active === 2 ? null : 2)"
                        class="w-full text-left px-6 py-4 bg-slate-50 hover:bg-slate-100 font-heading font-bold text-forest-900 flex items-center justify-between text-base">
                    <span>Are Cup2Eat cups 100% vegetarian and FSSAI certified?</span>
                    <i class="fa-solid fa-chevron-down text-xs transition duration-200" :class="active === 2 ? 'rotate-180 text-gold-600' : 'text-slate-400'"></i>
                </button>
                <div x-show="active === 2" x-cloak class="px-6 py-4 text-sm text-slate-600 leading-relaxed bg-white">
                    Yes! Cup2Eat is 100% Pure Vegetarian (Green Dot), made with natural food grains, pure cocoa, vegetable oils, and natural flavor extracts. We hold valid FSSAI registration (Reg No: 22723000...) and adhere to rigorous food hygiene standards.
                </div>
            </div>

            <!-- Q3 -->
            <div class="border border-slate-200 rounded-2xl overflow-hidden">
                <button @click="active = (active === 3 ? null : 3)"
                        class="w-full text-left px-6 py-4 bg-slate-50 hover:bg-slate-100 font-heading font-bold text-forest-900 flex items-center justify-between text-base">
                    <span>What is the shelf life and how should they be stored?</span>
                    <i class="fa-solid fa-chevron-down text-xs transition duration-200" :class="active === 3 ? 'rotate-180 text-gold-600' : 'text-slate-400'"></i>
                </button>
                <div x-show="active === 3" x-cloak class="px-6 py-4 text-sm text-slate-600 leading-relaxed bg-white">
                    The cups have a guaranteed shelf life of <strong>6 to 9 months</strong> from the date of manufacture when kept in a cool, dry place away from direct sunlight. We offer both bulk sleeves and individually sealed moisture-proof single pouches.
                </div>
            </div>

            <!-- Q4 -->
            <div class="border border-slate-200 rounded-2xl overflow-hidden">
                <button @click="active = (active === 4 ? null : 4)"
                        class="w-full text-left px-6 py-4 bg-slate-50 hover:bg-slate-100 font-heading font-bold text-forest-900 flex items-center justify-between text-base">
                    <span>How are cups shipped across India without breaking?</span>
                    <i class="fa-solid fa-chevron-down text-xs transition duration-200" :class="active === 4 ? 'rotate-180 text-gold-600' : 'text-slate-400'"></i>
                </button>
                <div x-show="active === 4" x-cloak class="px-6 py-4 text-sm text-slate-600 leading-relaxed bg-white">
                    We take pride in our specialized heavy-duty safety packaging. Each carton is layered with shock-absorbent cushioning and reinforced sealing tape. We have successfully dispatched thousands of boxes across Mumbai, Ahmedabad, Odisha, Kolkata, and Bangalore with near-zero transit breakage.
                </div>
            </div>

            <!-- Q5 -->
            <div class="border border-slate-200 rounded-2xl overflow-hidden">
                <button @click="active = (active === 5 ? null : 5)"
                        class="w-full text-left px-6 py-4 bg-slate-50 hover:bg-slate-100 font-heading font-bold text-forest-900 flex items-center justify-between text-base">
                    <span>Can we order a sample box before placing a wholesale carton?</span>
                    <i class="fa-solid fa-chevron-down text-xs transition duration-200" :class="active === 5 ? 'rotate-180 text-gold-600' : 'text-slate-400'"></i>
                </button>
                <div x-show="active === 5" x-cloak class="px-6 py-4 text-sm text-slate-600 leading-relaxed bg-white">
                    Absolutely! We encourage cafe owners, caterers, and corporate clients to test our cups firsthand. You can request a mixed sample box via our <a href="{{ route('wholesale') }}#sample-request" class="text-gold-600 font-bold underline">Wholesale Page</a> or directly message founder Varun Khera on WhatsApp at <strong>+91 98181 92575</strong>.
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Final CTA Banner -->
<section class="py-16 bg-forest-800 text-white border-t border-forest-700">
    <div class="max-w-5xl mx-auto px-4 text-center space-y-6">
        <h2 class="font-heading font-black text-3xl sm:text-4xl text-white">
            Ready To Make Your Business <span class="text-gradient-gold">100% Zero Waste</span>?
        </h2>
        <p class="text-slate-300 text-sm sm:text-base max-w-xl mx-auto">
            Join hundreds of visionary cafes, events, and conscious customers across India.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-2">
            <a href="https://wa.me/919818192575?text=Hello%20Varun!%20I%20want%20to%20order%20Cup2Eat%20edible%20cups."
               target="_blank"
               class="px-8 py-4 rounded-xl bg-gradient-to-r from-emerald-500 to-green-600 text-white font-heading font-extrabold text-sm shadow-xl hover:from-emerald-600 hover:to-green-700 transition flex items-center gap-2">
                <i class="fa-brands fa-whatsapp text-lg"></i>
                <span>Direct WhatsApp Order: 9818192575</span>
            </a>
            <a href="{{ route('order') }}"
               class="px-8 py-4 rounded-xl bg-forest-900 hover:bg-forest-700 text-gold-300 font-heading font-bold text-sm border border-gold-500/40 transition">
                Build Custom Quote Online
            </a>
        </div>
    </div>
</section>

@endsection

