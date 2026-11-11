@extends('layouts.app')

@section('title', 'Our Story & Sustainability Mission | CUP2EAT')
@section('meta_description', 'Learn about Founder Varun Khera and the mission behind Cup2Eat - replacing billions of plastic and PE-lined paper cups across India with delicious 100% edible cups.')

@section('content')

<!-- About Hero -->
<section class="bg-forest-900 text-white py-16 lg:py-24 border-b border-forest-800 bg-grain relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <span class="text-xs font-bold uppercase tracking-widest text-gold-400 bg-forest-800 px-3.5 py-1.5 rounded-full border border-forest-700">
                Our Story & Vision
            </span>
            <h1 class="font-heading font-black text-4xl sm:text-5xl lg:text-6xl text-white mt-3 leading-tight">
                Revolutionizing How India Drinks. <br>
                <span class="text-gradient-gold">One Crunch At A Time.</span>
            </h1>
            <p class="text-slate-300 text-base sm:text-lg mt-4 leading-relaxed">
                Cup2Eat was born out of a simple, rebellious question: <br class="hidden sm:inline">
                <em>Why do we throw away a cup after 5 minutes of drinking, leaving behind trash that lasts for 500 years?</em>
            </p>
        </div>
    </div>
</section>

<!-- Founder Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-5">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl border-4 border-forest-800 bg-forest-900 group">
                    <img src="{{ asset('images/brand/latte-art-cup-4k.jpg') }}" alt="Cup2Eat Signature Edible Cup" class="w-full h-auto object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-4 right-4 w-16 h-16 rounded-full overflow-hidden p-1 bg-forest-900/90 border border-gold-500 shadow-xl">
                        <img src="{{ asset('images/brand/logo.jpg') }}" alt="Cup2Eat Logo" class="w-full h-full object-cover rounded-full">
                    </div>
                    <div class="absolute bottom-4 left-4 right-4 bg-forest-900/95 backdrop-blur-md p-4 rounded-2xl border border-gold-500/30 text-white">
                        <div class="flex items-center justify-between">
                            <div>
                                <h4 class="font-heading font-black text-lg text-white">Varun Khera</h4>
                                <p class="text-xs text-gold-300">Founder & Managing Director, Cup2Eat</p>
                            </div>
                            <span class="text-xs font-bold bg-gold-500/20 text-gold-400 px-2.5 py-1 rounded-full border border-gold-500/30">
                                40+ Mins Leak Proof
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7 space-y-6">
                <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-emerald-700 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200">
                    <i class="fa-solid fa-lightbulb"></i> The Journey
                </div>

                <h2 class="font-heading font-black text-3xl sm:text-4xl text-forest-900 leading-tight">
                    From a College Ideation Challenge to a National Movement
                </h2>

                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    While studying, Varun observed the massive piles of disposable cups discarded outside college canteens, tea stalls, and tech parks. Even supposedly "eco-friendly paper cups" were secretly lined with thin plastic films that prevent them from degrading in soil.
                </p>

                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    Instead of preaching about zero waste, Varun asked: <strong>What if we made the cup so delicious that people couldn't resist eating it?</strong>
                </p>

                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    After months of food science prototyping—perfecting grain ratios, baking temperatures, and natural cocoa barriers—Cup2Eat was launched. The cup withstood steaming 85°C boiling tea for over 40 minutes without leaking or turning soggy!
                </p>

                <!-- Recognition quotes -->
                <div class="p-5 rounded-2xl bg-[#FAF7F2] border border-slate-200 flex items-start gap-3">
                    <i class="fa-solid fa-quote-left text-2xl text-gold-500 mt-1"></i>
                    <p class="text-xs sm:text-sm text-slate-700 font-medium italic">
                        "We didn't just want to create a biodegradable alternative. We wanted to create an unforgettable sensory experience. When a customer finishes their cutting chai and crunches into chocolate wafer, sustainability stops being a sacrifice and becomes pure joy."
                    </p>
                </div>

                <div class="pt-2 flex items-center gap-4 text-xs font-bold text-forest-800">
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-award text-gold-500"></i> Startup Mahakumbh Showcase</span>
                    <span>•</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-medal text-gold-500"></i> IPEM Spectra Award Winner</span>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- The Environmental Crisis We Are Solving -->
<section class="py-20 bg-[#FAF7F2] border-y border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs font-bold uppercase tracking-widest text-red-700 bg-red-100 px-3.5 py-1.5 rounded-full border border-red-200">
                The Hidden Problem
            </span>
            <h2 class="font-heading font-black text-3xl sm:text-4xl text-forest-900 mt-3">
                The Myth of Disposable Paper Cups
            </h2>
            <p class="text-slate-600 text-sm sm:text-base mt-2">
                Why "paper cups" are one of the biggest environmental illusions of modern times.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-red-50 text-red-600 flex items-center justify-center text-xl font-bold">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                </div>
                <h3 class="font-heading font-bold text-xl text-forest-900">160 Billion Cups Dumped</h3>
                <p class="text-slate-600 text-xs leading-relaxed">
                    India consumes over 160 billion disposable cups annually. Over 99% end up in open landfills, city drains, and river beds, choking urban drainage systems.
                </p>
            </div>

            <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center text-xl font-bold">
                    <i class="fa-solid fa-virus"></i>
                </div>
                <h3 class="font-heading font-bold text-xl text-forest-900">25,000 Microplastics per Sip</h3>
                <p class="text-slate-600 text-xs leading-relaxed">
                    Independent laboratory tests show that pouring hot tea into conventional wax/PE-lined paper cups releases more than 25,000 microscopic plastic particles directly into your drink.
                </p>
            </div>

            <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-xl font-bold">
                    <i class="fa-solid fa-seedling"></i>
                </div>
                <h3 class="font-heading font-bold text-xl text-forest-900">The Cup2Eat Solution</h3>
                <p class="text-slate-600 text-xs leading-relaxed">
                    100% organic, food-grade grain wafer. Completely eaten by the customer, or if discarded, naturally returns to the soil as organic compost within 7 days.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- Certifications & Food Standards -->
<section class="py-20 bg-forest-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs font-bold uppercase tracking-widest text-gold-400 bg-forest-800 px-3.5 py-1.5 rounded-full border border-forest-700">
                Uncompromising Quality
            </span>
            <h2 class="font-heading font-black text-3xl sm:text-4xl text-white mt-3">
                Food Safety, Hygiene & Certifications
            </h2>
            <p class="text-slate-300 text-sm mt-2">
                We bake every cup in automated, hygienic, temperature-controlled facilities.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <div class="bg-forest-800 p-6 rounded-3xl border border-forest-700 text-center space-y-3">
                <div class="w-14 h-14 rounded-full bg-forest-700 text-gold-400 flex items-center justify-center text-2xl mx-auto">
                    <i class="fa-solid fa-certificate"></i>
                </div>
                <h4 class="font-heading font-bold text-lg text-white">FSSAI Registered</h4>
                <p class="text-xs text-slate-300">
                    Compliant with Food Safety and Standards Authority of India (Reg. 22723000...).
                </p>
            </div>

            <div class="bg-forest-800 p-6 rounded-3xl border border-forest-700 text-center space-y-3">
                <div class="w-14 h-14 rounded-full bg-forest-700 text-emerald-400 flex items-center justify-center text-2xl mx-auto">
                    <i class="fa-solid fa-leaf"></i>
                </div>
                <h4 class="font-heading font-bold text-lg text-white">100% Pure Vegetarian</h4>
                <p class="text-xs text-slate-300">
                    Natural food grains, vegetable oil, edible starch, pure cocoa, and cardamom. Zero animal fat.
                </p>
            </div>

            <div class="bg-forest-800 p-6 rounded-3xl border border-forest-700 text-center space-y-3">
                <div class="w-14 h-14 rounded-full bg-forest-700 text-amber-400 flex items-center justify-center text-2xl mx-auto">
                    <i class="fa-solid fa-box"></i>
                </div>
                <h4 class="font-heading font-bold text-lg text-white">Single-Pouch Hygiene</h4>
                <p class="text-xs text-slate-300">
                    Available in individually sealed pouches for untouched hygiene from factory to customer hands.
                </p>
            </div>

            <div class="bg-forest-800 p-6 rounded-3xl border border-forest-700 text-center space-y-3">
                <div class="w-14 h-14 rounded-full bg-forest-700 text-blue-400 flex items-center justify-center text-2xl mx-auto">
                    <i class="fa-solid fa-truck-fast"></i>
                </div>
                <h4 class="font-heading font-bold text-lg text-white">Pan-India Freight</h4>
                <p class="text-xs text-slate-300">
                    Shipped securely via express air & surface logistics with shock-proof corrugated packaging.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- Gallery & Milestones Grid -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-14">
            <h2 class="font-heading font-black text-3xl text-forest-900">
                Snapshots From The Cup2Eat Journey
            </h2>
            <p class="text-slate-600 text-sm mt-1">Real events, real cups, real zero-waste enthusiasm.</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="rounded-2xl overflow-hidden shadow-sm aspect-square bg-slate-100">
                <img src="{{ asset('images/brand/latte-art-cup-4k.jpg') }}" alt="Latte Art Cup" class="w-full h-full object-cover hover:scale-105 transition duration-300">
            </div>
            <div class="rounded-2xl overflow-hidden shadow-sm aspect-square bg-slate-100">
                <img src="{{ asset('images/brand/chai-cup-4k.jpg') }}" alt="Kadak Chai Cup" class="w-full h-full object-cover hover:scale-105 transition duration-300">
            </div>
            <div class="rounded-2xl overflow-hidden shadow-sm aspect-square bg-slate-100">
                <img src="{{ asset('images/brand/cold-coffee-4k.jpg') }}" alt="Cold Coffee Glass" class="w-full h-full object-cover hover:scale-105 transition duration-300">
            </div>
            <div class="rounded-2xl overflow-hidden shadow-sm aspect-square bg-slate-100">
                <img src="{{ asset('images/brand/wholesale-box-4k.jpg') }}" alt="Wholesale Master Packaging" class="w-full h-full object-cover hover:scale-105 transition duration-300">
            </div>
        </div>

        <div class="mt-12 text-center">
            <a href="https://instagram.com/cup2eat" target="_blank"
               class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-pink-600 to-purple-600 text-white font-bold text-xs uppercase tracking-wider hover:opacity-90 transition">
                <i class="fa-brands fa-instagram text-base"></i>
                <span>Follow @cup2eat on Instagram</span>
            </a>
        </div>

    </div>
</section>

@endsection

