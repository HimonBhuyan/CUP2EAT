<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CUP2EAT | Eat Your Drink - 100% Edible Cups & Zero Waste')</title>
    <meta name="description" content="@yield('meta_description', 'Cup2Eat offers delicious, leak-proof 100% edible cups in Chocolate, Elaichi, Vanilla, Mango & Strawberry. Replace disposable plastic with pure crunch! FSSAI licensed, Pan-India delivery.')">
    <link rel="icon" type="image/jpeg" href="{{ asset('images/brand/logo.jpg') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">

    <!-- Tailwind CSS (CDN for guaranteed local & production styling across all environments) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        forest: {
                            900: '#061a12',
                            800: '#0a271c',
                            700: '#0e3828',
                            600: '#144c37',
                            500: '#1a6449',
                            400: '#258562',
                        },
                        gold: {
                            300: '#f7de8b',
                            400: '#eecf61',
                            500: '#d4af37',
                            600: '#b89423',
                            700: '#947413',
                        },
                        wafer: {
                            50: '#fdfbf7',
                            100: '#f9f4ea',
                            200: '#f2e5d2',
                            300: '#e5d0b4',
                            400: '#d0b38c',
                            500: '#b89264',
                        },
                        cocoa: {
                            900: '#1a0d08',
                            800: '#2c180e',
                            700: '#3f2316',
                            600: '#5c3523',
                        }
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        heading: ['"Outfit"', 'sans-serif'],
                        serif: ['"Playfair Display"', 'serif'],
                    }
                }
            }
        }
    </script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Alpine.js for lightweight, reactive interactivity -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>

    <style>
        [x-cloak] { display: none !important; }
        .bg-grain {
            background-image: radial-gradient(rgba(212, 175, 55, 0.08) 1px, transparent 1px);
            background-size: 24px 24px;
        }
        .text-gradient-gold {
            background: linear-gradient(135deg, #f7de8b 0%, #d4af37 50%, #eecf61 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .border-gold-glow {
            box-shadow: 0 0 25px rgba(212, 175, 55, 0.15);
        }
    </style>

    @stack('styles')
</head>
<body class="bg-[#FAF7F2] text-slate-800 font-sans antialiased selection:bg-gold-500 selection:text-white flex flex-col min-h-screen">

    <!-- Announcement Bar -->
    <div class="bg-forest-900 text-gold-300 text-xs sm:text-sm py-2 px-4 border-b border-forest-700/60 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="flex items-center gap-2 overflow-hidden text-ellipsis whitespace-nowrap">
                <span class="inline-flex items-center justify-center px-2 py-0.5 rounded-full text-[10px] font-bold bg-gold-500 text-forest-900 uppercase tracking-wider">Zero Waste</span>
                <span class="hidden sm:inline">🌱 Revolutionizing The Way You Drink:</span>
                <span class="font-medium text-white">Eat Your Drink! 100% Edible Cups</span>
                <span class="hidden md:inline text-forest-400">|</span>
                <span class="hidden md:inline">🚚 Pan-India Delivery (Odisha, Mumbai, Ahmedabad, Gurugram & more)</span>
            </div>
            <div class="flex items-center gap-4 text-xs font-semibold shrink-0">
                <a href="tel:+919818192575" class="hover:text-white transition flex items-center gap-1.5">
                    <i class="fa-solid fa-phone text-gold-400"></i> +91 98181 92575
                </a>
                <span class="text-forest-600">|</span>
                <a href="https://instagram.com/cup2eat" target="_blank" class="hover:text-white transition flex items-center gap-1">
                    <i class="fa-brands fa-instagram text-pink-400"></i> @cup2eat
                </a>
            </div>
        </div>
    </div>

    <!-- Navigation Header -->
    <header x-data="{ mobileMenuOpen: false, scrolled: false }"
            @scroll.window="scrolled = (window.pageYOffset > 20)"
            :class="scrolled ? 'bg-forest-900/95 backdrop-blur-md shadow-xl py-3 border-b border-forest-700/40' : 'bg-forest-800 py-4 border-b border-forest-700/50'"
            class="sticky top-8 z-40 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">

                <!-- Logo & Brand Name -->
                <a href="{{ route('home') }}" class="flex items-center gap-3.5 group">
                    <div class="relative w-12 h-12 rounded-full overflow-hidden p-0.5 bg-gradient-to-tr from-gold-500 via-forest-400 to-gold-400 shadow-md group-hover:scale-105 transition duration-300">
                        <img src="{{ asset('images/brand/logo.jpg') }}" alt="Cup2Eat Logo" class="w-full h-full object-cover rounded-full">
                    </div>
                    <div>
                        <div class="flex items-center gap-1.5">
                            <span class="font-heading font-black text-2xl tracking-tight text-white group-hover:text-gold-400 transition">CUP<span class="text-gold-400">2</span>EAT</span>
                            <span class="text-[10px] bg-forest-700 text-gold-300 font-bold px-1.5 py-0.5 rounded border border-gold-500/30">FSSAI</span>
                        </div>
                        <p class="text-[11px] font-medium text-emerald-300/80 tracking-widest uppercase">Eat Your Drink</p>
                    </div>
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden lg:flex items-center gap-1 font-medium text-sm text-slate-200">
                    <a href="{{ route('home') }}"
                       class="px-3.5 py-2 rounded-lg transition {{ request()->routeIs('home') ? 'text-gold-400 font-semibold bg-forest-700/50' : 'hover:text-white hover:bg-forest-700/30' }}">
                        Home
                    </a>
                    <a href="{{ route('menu') }}"
                       class="px-3.5 py-2 rounded-lg transition {{ request()->routeIs('menu*') || request()->routeIs('product*') ? 'text-gold-400 font-semibold bg-forest-700/50' : 'hover:text-white hover:bg-forest-700/30' }}">
                        Flavors & Menu
                    </a>
                    <a href="{{ route('wholesale') }}"
                       class="px-3.5 py-2 rounded-lg transition {{ request()->routeIs('wholesale') ? 'text-gold-400 font-semibold bg-forest-700/50' : 'hover:text-white hover:bg-forest-700/30' }}">
                        Wholesale & Cafes <span class="ml-1 text-[10px] font-bold bg-amber-500/20 text-amber-300 px-1.5 py-0.5 rounded">B2B</span>
                    </a>
                    <a href="{{ route('about') }}"
                       class="px-3.5 py-2 rounded-lg transition {{ request()->routeIs('about') ? 'text-gold-400 font-semibold bg-forest-700/50' : 'hover:text-white hover:bg-forest-700/30' }}">
                        Our Story & Mission
                    </a>
                    <a href="{{ route('order') }}"
                       class="px-3.5 py-2 rounded-lg transition {{ request()->routeIs('order*') ? 'text-gold-400 font-semibold bg-forest-700/50' : 'hover:text-white hover:bg-forest-700/30' }}">
                        Order Builder
                    </a>
                    <a href="{{ route('contact') }}"
                       class="px-3.5 py-2 rounded-lg transition {{ request()->routeIs('contact') ? 'text-gold-400 font-semibold bg-forest-700/50' : 'hover:text-white hover:bg-forest-700/30' }}">
                        Contact
                    </a>
                </nav>

                <!-- Desktop CTA Buttons -->
                <div class="hidden sm:flex items-center gap-3">
                    <a href="{{ route('wholesale') }}#sample-request"
                       class="text-xs font-semibold px-3.5 py-2 rounded-lg text-gold-300 border border-gold-500/40 hover:bg-gold-500/10 transition">
                        <i class="fa-solid fa-box-open mr-1"></i> Sample Box
                    </a>
                    <a href="https://wa.me/919818192575?text=Hello%20Cup2Eat!%20I%20would%20like%20to%20know%20more%20about%20ordering%20your%20edible%20cups."
                       target="_blank"
                       class="text-xs font-bold px-4 py-2.5 rounded-lg bg-gradient-to-r from-emerald-500 to-green-600 text-white shadow-md hover:from-emerald-600 hover:to-green-700 transition flex items-center gap-2">
                        <i class="fa-brands fa-whatsapp text-sm"></i>
                        <span>WhatsApp Order</span>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="flex items-center gap-2 lg:hidden">
                    <a href="https://wa.me/919818192575" target="_blank" class="p-2 text-green-400 hover:text-white">
                        <i class="fa-brands fa-whatsapp text-xl"></i>
                    </a>
                    <button @click="mobileMenuOpen = !mobileMenuOpen"
                            type="button"
                            class="p-2 rounded-lg text-slate-300 hover:text-white hover:bg-forest-700 focus:outline-none">
                        <i class="fa-solid" :class="mobileMenuOpen ? 'fa-xmark text-xl' : 'fa-bars text-xl'"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Drawer -->
        <div x-show="mobileMenuOpen"
             x-cloak
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             class="lg:hidden bg-forest-900 border-b border-forest-700 px-4 pt-3 pb-6 space-y-2">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-forest-800">Home</a>
            <a href="{{ route('menu') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-forest-800">Flavors & Menu</a>
            <a href="{{ route('wholesale') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-forest-800">Wholesale & Cafe Supply</a>
            <a href="{{ route('about') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-forest-800">Our Story & Mission</a>
            <a href="{{ route('order') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-forest-800">Custom Order Builder</a>
            <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-forest-800">Contact Us</a>

            <div class="pt-4 border-t border-forest-800 flex flex-col gap-2">
                <a href="{{ route('wholesale') }}#sample-request" class="w-full text-center py-2.5 rounded-lg border border-gold-500 text-gold-400 font-semibold text-sm">
                    Request Cafe Sample Box
                </a>
                <a href="https://wa.me/919818192575?text=Hello%20Cup2Eat!%20I%20would%20like%20to%20order%20edible%20cups."
                   target="_blank"
                   class="w-full text-center py-2.5 rounded-lg bg-green-600 text-white font-bold text-sm flex items-center justify-center gap-2">
                    <i class="fa-brands fa-whatsapp text-lg"></i>
                    Chat on WhatsApp: 9818192575
                </a>
            </div>
        </div>
    </header>

    <!-- Flash Messages / Notifications -->
    @if(session('success'))
        <div class="max-w-4xl mx-auto px-4 mt-6">
            <div class="bg-emerald-50 border-l-4 border-emerald-500 p-4 rounded-r-xl shadow-md flex items-start justify-between">
                <div class="flex items-start gap-3">
                    <div class="text-emerald-600 text-xl mt-0.5">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-emerald-900 text-sm">Inquiry Received Successfully!</h4>
                        <p class="text-emerald-700 text-xs sm:text-sm mt-0.5">{{ session('success') }}</p>
                        @if(session('whatsapp_redirect'))
                            <div class="mt-2.5">
                                <a href="{{ session('whatsapp_redirect') }}" target="_blank"
                                   class="inline-flex items-center gap-2 bg-emerald-600 text-white text-xs font-bold px-3 py-1.5 rounded-lg hover:bg-emerald-700 transition">
                                    <i class="fa-brands fa-whatsapp"></i> Continue Conversation on WhatsApp Now
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if(session('error'))
        <div class="max-w-4xl mx-auto px-4 mt-6">
            <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded-r-xl shadow-md flex items-center gap-3 text-red-700 text-sm">
                <i class="fa-solid fa-triangle-exclamation text-lg"></i>
                <span>{{ session('error') }}</span>
            </div>
        </div>
    @endif

    <!-- Main Content Slot -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Global Floating WhatsApp Quick Action Button -->
    <aside aria-label="Quick Actions" class="fixed bottom-6 right-6 z-50 flex flex-col items-end gap-2.5">
        <a href="https://wa.me/919818192575?text=Hello%20Cup2Eat!%20I%20am%20interested%20in%20your%20100%25%20Edible%20Cups."
           target="_blank"
           class="group flex items-center gap-2.5 bg-gradient-to-r from-emerald-500 to-green-600 text-white pl-4 pr-5 py-3 rounded-full shadow-2xl hover:scale-105 hover:shadow-green-500/30 transition-all duration-300">
            <span class="relative flex h-3 w-3">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
              <span class="relative inline-flex rounded-full h-3 w-3 bg-white"></span>
            </span>
            <i class="fa-brands fa-whatsapp text-2xl"></i>
            <div class="text-left leading-tight hidden sm:block">
                <span class="block text-[10px] uppercase font-bold text-emerald-100">Quick Response</span>
                <span class="block text-xs font-extrabold">Chat With Founder</span>
            </div>
        </a>
    </aside>

    <!-- Premium Footer -->
    <footer class="bg-forest-900 text-slate-300 border-t border-forest-800 pt-16 pb-12 mt-20 relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-gold-500/5 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-forest-600/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-forest-800">

                <!-- Brand Bio Col -->
                <div class="lg:col-span-2 space-y-4">
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('images/brand/logo.jpg') }}" alt="Cup2Eat Logo" class="w-12 h-12 rounded-full border border-gold-500/40">
                        <div>
                            <span class="font-heading font-black text-2xl tracking-tight text-white">CUP<span class="text-gold-400">2</span>EAT</span>
                            <p class="text-xs text-gold-300/80 font-medium">Eat Your Drink • Zero Waste Innovation</p>
                        </div>
                    </div>
                    <p class="text-sm text-slate-300/80 leading-relaxed max-w-sm">
                        Cup2Eat is revolutionizing beverages with 100% edible, crunchy, delicious cups. Say goodbye to toxic plastic and non-recyclable wax-coated paper cups.
                    </p>
                    <div class="flex items-center gap-2 pt-2">
                        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-forest-800 border border-forest-700 text-xs text-gold-300">
                            <i class="fa-solid fa-shield-halved text-green-400"></i> FSSAI Reg: 22723000...
                        </div>
                        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-forest-800 border border-forest-700 text-xs text-emerald-300">
                            <i class="fa-solid fa-leaf text-green-400"></i> 100% Pure Veg
                        </div>
                    </div>
                    <!-- Social icons -->
                    <div class="flex items-center gap-3 pt-3">
                        <a href="https://instagram.com/cup2eat" target="_blank" class="w-9 h-9 rounded-full bg-forest-800 hover:bg-pink-600 text-white flex items-center justify-center transition">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="https://wa.me/919818192575" target="_blank" class="w-9 h-9 rounded-full bg-forest-800 hover:bg-green-600 text-white flex items-center justify-center transition">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                        <a href="tel:+919818192575" class="w-9 h-9 rounded-full bg-forest-800 hover:bg-gold-500 text-white flex items-center justify-center transition">
                            <i class="fa-solid fa-phone"></i>
                        </a>
                    </div>
                </div>

                <!-- Navigation Quick Links -->
                <div>
                    <h4 class="text-white font-heading font-bold text-sm uppercase tracking-wider mb-4 text-gold-400">Explore</h4>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-gold-300 transition">Home</a></li>
                        <li><a href="{{ route('menu') }}" class="hover:text-gold-300 transition">Flavors & Menu</a></li>
                        <li><a href="{{ route('wholesale') }}" class="hover:text-gold-300 transition">Wholesale & Cafes</a></li>
                        <li><a href="{{ route('order') }}" class="hover:text-gold-300 transition">Custom Order Builder</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-gold-300 transition">Our Sustainability Story</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-gold-300 transition">Contact & Support</a></li>
                    </ul>
                </div>

                <!-- Product Flavors -->
                <div>
                    <h4 class="text-white font-heading font-bold text-sm uppercase tracking-wider mb-4 text-gold-400">Signature Flavors</h4>
                    <ul class="space-y-2.5 text-sm">
                        <li><span class="text-slate-300">🍫 Chocolate Coated</span></li>
                        <li><span class="text-slate-300">🌱 Royal Cardamom (Elaichi)</span></li>
                        <li><span class="text-slate-300">🍦 French Vanilla</span></li>
                        <li><span class="text-slate-300">🍓 Strawberry Crush</span></li>
                        <li><span class="text-slate-300">🥭 Alphonso Mango</span></li>
                        <li><span class="text-slate-300">🍕 Savory Baked Pizza Cup</span></li>
                    </ul>
                </div>

                <!-- Contact & Distribution -->
                <div>
                    <h4 class="text-white font-heading font-bold text-sm uppercase tracking-wider mb-4 text-gold-400">Headquarters</h4>
                    <ul class="space-y-3 text-sm text-slate-300/80">
                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-location-dot text-gold-400 mt-1"></i>
                            <span>Ghaziabad / Delhi NCR, India (Pan-India Dispatch)</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <i class="fa-solid fa-phone text-gold-400"></i>
                            <a href="tel:+919818192575" class="hover:text-white transition">+91 98181 92575</a>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <i class="fa-solid fa-envelope text-gold-400"></i>
                            <a href="mailto:orders@cup2eat.com" class="hover:text-white transition">orders@cup2eat.com</a>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <i class="fa-solid fa-user-tie text-gold-400"></i>
                            <span>Founder: <strong>Varun Khera</strong></span>
                        </li>
                    </ul>
                    <div class="mt-4 pt-3 border-t border-forest-800">
                        <a href="{{ route('admin.dashboard') }}" class="text-[11px] text-forest-400 hover:text-gold-300 transition flex items-center gap-1">
                            <i class="fa-solid fa-lock"></i> Founder Admin Portal
                        </a>
                    </div>
                </div>

            </div>

            <!-- Copyright bar -->
            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-400 gap-4">
                <p>© {{ date('Y') }} CUP2EAT. All rights reserved. Registered Indian Enterprise.</p>
                <p class="flex items-center gap-1">
                    Made with <i class="fa-solid fa-heart text-red-500"></i> for a cleaner, greener India.
                </p>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>

