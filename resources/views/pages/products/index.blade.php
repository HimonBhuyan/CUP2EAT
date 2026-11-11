@extends('layouts.app')

@section('title', 'Flavors & Menu | CUP2EAT Edible Cups Wholesale & Retail')
@section('meta_description', 'Explore the full menu of Cup2Eat edible cups. Wholesale boxes for cafes (396 cups @ ₹3,999), 150ml shake glasses, and retail packs in Chocolate, Elaichi, Vanilla, Mango & Strawberry.')

@section('content')

<!-- Header Banner -->
<section class="bg-forest-900 text-white py-14 border-b border-forest-800 bg-grain relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <span class="text-xs font-bold uppercase tracking-widest text-gold-400 bg-forest-800 px-3 py-1 rounded-full border border-forest-700">
                100% Edible • FSSAI Certified
            </span>
            <h1 class="font-heading font-black text-3xl sm:text-5xl text-white mt-3">
                Our Flavors & Products Menu
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-2">
                From high-volume cafe cartons to retail party packs. Every cup is crafted with food-grade wafer and coated with natural gourmet flavors.
            </p>
        </div>
    </div>
</section>

<!-- Filters & Search Toolbar -->
<section class="bg-white border-b border-slate-200 sticky top-20 z-30 shadow-sm py-4">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            
            <!-- Category Pills -->
            <div class="flex items-center gap-2 overflow-x-auto pb-1 md:pb-0 scrollbar-none">
                <a href="{{ route('menu', ['category' => 'all']) }}"
                   class="px-4 py-2 rounded-xl text-xs font-bold whitespace-nowrap transition {{ $category === 'all' ? 'bg-forest-900 text-gold-400 shadow-sm' : 'bg-slate-100 text-slate-700 hover:bg-slate-200' }}">
                    All Items ({{ $totalCount }})
                </a>
                <a href="{{ route('menu', ['category' => 'wholesale']) }}"
                   class="px-4 py-2 rounded-xl text-xs font-bold whitespace-nowrap transition {{ $category === 'wholesale' ? 'bg-forest-900 text-gold-400 shadow-sm' : 'bg-slate-100 text-slate-700 hover:bg-slate-200' }}">
                    📦 Wholesale Boxes (Cafes & Events)
                </a>
                <a href="{{ route('menu', ['category' => 'cold_drinks']) }}"
                   class="px-4 py-2 rounded-xl text-xs font-bold whitespace-nowrap transition {{ $category === 'cold_drinks' ? 'bg-forest-900 text-gold-400 shadow-sm' : 'bg-slate-100 text-slate-700 hover:bg-slate-200' }}">
                    🥤 150ml Cold Drink Glasses
                </a>
                <a href="{{ route('menu', ['category' => 'retail']) }}"
                   class="px-4 py-2 rounded-xl text-xs font-bold whitespace-nowrap transition {{ $category === 'retail' ? 'bg-forest-900 text-gold-400 shadow-sm' : 'bg-slate-100 text-slate-700 hover:bg-slate-200' }}">
                    🎉 Retail & Tasting Packs (8-10 Cups)
                </a>
            </div>

            <!-- Search Bar -->
            <form action="{{ route('menu') }}" method="GET" class="relative w-full md:w-64">
                <input type="hidden" name="category" value="{{ $category }}">
                <input type="text" name="search" value="{{ $search ?? '' }}"
                       placeholder="Search flavor or size..."
                       class="w-full pl-9 pr-4 py-2 text-xs rounded-xl bg-slate-50 border border-slate-200 focus:outline-none focus:border-forest-600 focus:bg-white transition">
                <i class="fa-solid fa-magnifying-glass absolute left-3 top-2.5 text-slate-400 text-xs"></i>
                @if($search)
                    <a href="{{ route('menu', ['category' => $category]) }}" class="absolute right-3 top-2.5 text-slate-400 hover:text-slate-600 text-xs">
                        <i class="fa-solid fa-xmark"></i>
                    </a>
                @endif
            </form>

        </div>
    </div>
</section>

<!-- Product Grid Section -->
<section class="py-14 bg-[#FAF7F2]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        @if($products->isEmpty())
            <div class="bg-white rounded-3xl p-12 text-center max-w-md mx-auto border border-slate-200">
                <div class="w-16 h-16 rounded-full bg-forest-50 text-forest-700 flex items-center justify-center mx-auto text-2xl mb-4">
                    <i class="fa-solid fa-cookie-bite"></i>
                </div>
                <h3 class="font-heading font-bold text-lg text-forest-900">No products found</h3>
                <p class="text-xs text-slate-500 mt-1">Try resetting your search or filter.</p>
                <a href="{{ route('menu') }}" class="inline-block mt-4 text-xs font-bold text-gold-600 hover:underline">
                    View All Products
                </a>
            </div>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($products as $prod)
                    <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition duration-300 flex flex-col group">
                        
                        <!-- Product Image & Badges -->
                        <div class="aspect-[4/3] relative overflow-hidden bg-slate-100">
                            <img src="{{ asset($prod->image) }}"
                                 alt="{{ $prod->name }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            
                            <div class="absolute top-3 left-3 flex flex-col gap-1.5">
                                @if($prod->is_bestseller)
                                    <span class="bg-amber-500 text-forest-900 text-[10px] font-extrabold uppercase px-2.5 py-0.5 rounded-full shadow-md">
                                        ⭐ Best Seller
                                    </span>
                                @endif
                                <span class="bg-forest-900/90 text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full">
                                    {{ $prod->size }}
                                </span>
                            </div>

                            <div class="absolute top-3 right-3">
                                <span class="bg-emerald-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-full">
                                    {{ $prod->piece_count }}
                                </span>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="p-6 flex flex-col flex-grow justify-between space-y-4">
                            
                            <div>
                                <div class="text-[11px] font-bold uppercase tracking-wider text-forest-600 mb-1">
                                    {{ $prod->flavor }}
                                </div>
                                <h3 class="font-heading font-black text-lg text-forest-900 group-hover:text-forest-600 transition leading-snug">
                                    <a href="{{ route('product.show', $prod->slug) }}">{{ $prod->name }}</a>
                                </h3>
                                <p class="text-slate-600 text-xs mt-2 line-clamp-2">
                                    {{ $prod->tagline ?? $prod->description }}
                                </p>
                            </div>

                            <!-- Highlights icons -->
                            <div class="pt-3 border-t border-slate-100 grid grid-cols-2 gap-2 text-[11px] text-slate-500 font-medium">
                                <div class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-clock-rotate-left text-amber-500"></i>
                                    <span>{{ $prod->holding_time }}</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-leaf text-emerald-500"></i>
                                    <span>100% Pure Veg</span>
                                </div>
                            </div>

                            <!-- Pricing & Action Buttons -->
                            <div class="pt-3 border-t border-slate-100 flex items-center justify-between">
                                <div>
                                    @if($prod->original_price)
                                        <span class="text-xs text-slate-400 line-through">₹{{ number_format($prod->original_price) }}</span>
                                    @endif
                                    <div class="font-heading font-black text-2xl text-forest-900">
                                        ₹{{ number_format($prod->price) }}
                                    </div>
                                    <span class="text-[10px] text-emerald-600 font-semibold">Includes Delivery</span>
                                </div>

                                <div class="flex items-center gap-2">
                                    <a href="{{ route('product.show', $prod->slug) }}"
                                       class="px-3 py-2 rounded-xl text-xs font-bold text-slate-700 bg-slate-100 hover:bg-slate-200 transition">
                                        View
                                    </a>
                                    
                                    @php
                                        $waMsg = "Hello Cup2Eat! I want to order:\n*{$prod->name}* ({$prod->piece_count})\nPrice: ₹" . number_format($prod->price) . "\nPlease confirm availability and delivery time.";
                                        $waLink = "https://wa.me/919818192575?text=" . urlencode($waMsg);
                                    @endphp
                                    <a href="{{ $waLink }}" target="_blank"
                                       class="px-3.5 py-2 rounded-xl text-xs font-bold bg-green-600 hover:bg-green-700 text-white shadow-sm flex items-center gap-1.5 transition">
                                        <i class="fa-brands fa-whatsapp text-sm"></i>
                                        <span>Order</span>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                @endforeach
            </div>
        @endif

    </div>
</section>

<!-- Custom Bulk Requirement Strip -->
<section class="py-12 bg-forest-900 text-white border-t border-forest-800">
    <div class="max-w-5xl mx-auto px-4 flex flex-col sm:flex-row items-center justify-between gap-6 text-center sm:text-left">
        <div>
            <h3 class="font-heading font-bold text-xl text-white">Need a Custom Order or Cafe Distribution?</h3>
            <p class="text-xs sm:text-sm text-slate-300 mt-1">We customize flavor proportions, pack sizes, and franchise schedules.</p>
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ route('order') }}" class="px-5 py-3 rounded-xl bg-gold-500 hover:bg-gold-400 text-forest-900 font-heading font-bold text-xs uppercase tracking-wider transition">
                Open Order Builder
            </a>
            <a href="https://wa.me/919818192575" target="_blank" class="px-5 py-3 rounded-xl bg-forest-800 hover:bg-forest-700 text-white font-bold text-xs border border-forest-700 transition flex items-center gap-1.5">
                <i class="fa-brands fa-whatsapp text-green-400"></i> WhatsApp Help
            </a>
        </div>
    </div>
</section>

@endsection

