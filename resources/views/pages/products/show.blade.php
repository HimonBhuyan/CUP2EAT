@extends('layouts.app')

@section('title', $product->name . ' | CUP2EAT Edible Cups')
@section('meta_description', $product->tagline ?? $product->description)

@section('content')

<!-- Breadcrumb -->
<div class="bg-slate-100 border-b border-slate-200 py-3 text-xs text-slate-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center gap-2">
        <a href="{{ route('home') }}" class="hover:text-forest-900">Home</a>
        <i class="fa-solid fa-chevron-right text-[10px] text-slate-400"></i>
        <a href="{{ route('menu') }}" class="hover:text-forest-900">Flavors & Menu</a>
        <i class="fa-solid fa-chevron-right text-[10px] text-slate-400"></i>
        <span class="font-bold text-forest-900 truncate">{{ $product->name }}</span>
    </div>
</div>

<!-- Product Details Section -->
<section class="py-12 bg-white" x-data="{
    qty: 1,
    unitPrice: {{ $product->price }},
    get total() { return this.qty * this.unitPrice },
    get waUrl() {
        let msg = 'Hello Varun! I would like to order:\n' +
                  '*{{ $product->name }}*\n' +
                  'Quantity: ' + this.qty + ' pack(s)\n' +
                  'Pack Size: {{ $product->piece_count }}\n' +
                  'Total Amount: ₹' + this.total.toLocaleString() + '\n' +
                  'Please confirm delivery details to my city.';
        return 'https://wa.me/919818192575?text=' + encodeURIComponent(msg);
    }
}">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

            <!-- Left: Product Image & Badges -->
            <div class="lg:col-span-6 space-y-6">
                <div class="relative rounded-3xl overflow-hidden border border-slate-200 shadow-lg bg-slate-50 aspect-[4/3]">
                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                    
                    <div class="absolute top-4 left-4 flex flex-col gap-2">
                        @if($product->is_bestseller)
                            <span class="bg-amber-500 text-forest-900 font-extrabold text-xs px-3 py-1 rounded-full shadow-md">
                                ⭐ Cafe Favorite
                            </span>
                        @endif
                        <span class="bg-forest-900/95 text-white font-bold text-xs px-3 py-1 rounded-full shadow-md">
                            {{ $product->size }} Capacity
                        </span>
                    </div>

                    <div class="absolute bottom-4 left-4 right-4 bg-white/95 backdrop-blur-md p-3 rounded-2xl border border-slate-200 flex items-center justify-between text-xs text-slate-700 shadow-md">
                        <span class="flex items-center gap-1.5 text-emerald-700 font-bold">
                            <i class="fa-solid fa-shield-halved text-emerald-600"></i> FSSAI Certified
                        </span>
                        <span class="flex items-center gap-1.5 text-amber-700 font-bold">
                            <i class="fa-solid fa-clock text-amber-600"></i> {{ $product->holding_time }}
                        </span>
                        <span class="flex items-center gap-1.5 text-forest-800 font-bold">
                            <i class="fa-solid fa-leaf text-green-600"></i> 100% Pure Veg
                        </span>
                    </div>
                </div>

                <!-- Pan-India logistics reassure box -->
                <div class="bg-forest-50 border border-forest-200 rounded-2xl p-4 flex items-center gap-4 text-xs text-forest-900">
                    <div class="w-10 h-10 rounded-full bg-forest-700 text-gold-300 flex items-center justify-center shrink-0 text-base">
                        <i class="fa-solid fa-truck-ramp-box"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-forest-900">Heavy-Duty Safety Packaging</h4>
                        <p class="text-slate-600 mt-0.5">Dispatched in reinforced moisture-proof cartons with shock absorption. Dispatched across all 28 states.</p>
                    </div>
                </div>
            </div>

            <!-- Right: Product Information & Live Price Calculator -->
            <div class="lg:col-span-6 space-y-6">

                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-gold-600 bg-gold-50 px-3 py-1 rounded-full border border-gold-200">
                        {{ strtoupper($product->category) }} • {{ $product->piece_count }}
                    </span>
                    <h1 class="font-heading font-black text-3xl sm:text-4xl text-forest-900 mt-3 leading-tight">
                        {{ $product->name }}
                    </h1>
                    @if($product->tagline)
                        <p class="text-slate-600 text-sm font-medium mt-1">
                            {{ $product->tagline }}
                        </p>
                    @endif
                </div>

                <!-- Price Box -->
                <div class="bg-slate-50 p-6 rounded-2xl border border-slate-200 flex items-baseline justify-between">
                    <div>
                        <div class="text-xs text-slate-500 uppercase font-semibold">Price per pack</div>
                        <div class="flex items-baseline gap-3 mt-1">
                            <span class="font-heading font-black text-3xl sm:text-4xl text-forest-900">
                                ₹{{ number_format($product->price) }}
                            </span>
                            @if($product->original_price)
                                <span class="text-sm sm:text-base text-slate-400 line-through">
                                    ₹{{ number_format($product->original_price) }}
                                </span>
                                @php
                                    $discount = round((($product->original_price - $product->price) / $product->original_price) * 100);
                                @endphp
                                <span class="text-xs font-bold bg-emerald-100 text-emerald-800 px-2 py-0.5 rounded-full">
                                    Save {{ $discount }}%
                                </span>
                            @endif
                        </div>
                        <p class="text-[11px] text-emerald-700 font-semibold mt-1">
                            ✓ Free Shipping Included All Over India • GST Invoice Available
                        </p>
                    </div>
                </div>

                <!-- Description -->
                <div class="text-slate-600 text-sm leading-relaxed space-y-3">
                    <p>{{ $product->description }}</p>
                </div>

                <!-- Interactive Quantity Selector -->
                <div class="space-y-3 pt-2">
                    <label class="block text-xs font-bold uppercase text-slate-700">Select Quantity / Packs:</label>
                    <div class="flex items-center gap-3">
                        <div class="flex items-center border border-slate-300 rounded-xl bg-white shadow-inner overflow-hidden">
                            <button type="button" @click="if(qty > 1) qty--"
                                    class="w-10 h-10 flex items-center justify-center text-slate-600 hover:bg-slate-100 font-bold transition">
                                -
                            </button>
                            <span class="w-12 text-center font-heading font-bold text-base text-forest-900" x-text="qty"></span>
                            <button type="button" @click="qty++"
                                    class="w-10 h-10 flex items-center justify-center text-slate-600 hover:bg-slate-100 font-bold transition">
                                +
                            </button>
                        </div>
                        <div class="text-xs text-slate-500">
                            Total: <strong class="text-forest-900 text-base font-heading font-black" x-text="'₹' + total.toLocaleString()"></strong>
                        </div>
                    </div>
                </div>

                <!-- Order CTAs -->
                <div class="space-y-3 pt-2">
                    <a :href="waUrl" target="_blank"
                       class="w-full py-4 rounded-xl bg-gradient-to-r from-emerald-500 to-green-600 hover:from-emerald-600 hover:to-green-700 text-white font-heading font-extrabold text-base shadow-xl flex items-center justify-center gap-2.5 transition">
                        <i class="fa-brands fa-whatsapp text-xl"></i>
                        <span>Order Now on WhatsApp (<span x-text="'₹' + total.toLocaleString()"></span>)</span>
                    </a>

                    <div class="flex items-center gap-3">
                        <a href="{{ route('order') }}"
                           class="w-full py-3 rounded-xl bg-forest-900 hover:bg-forest-800 text-gold-300 font-bold text-xs uppercase tracking-wider text-center border border-forest-700 transition">
                            <i class="fa-solid fa-cart-flatbed mr-1.5"></i> Add to Custom Quote Builder
                        </a>
                        <a href="{{ route('wholesale') }}#sample-request"
                           class="w-full py-3 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-xs uppercase tracking-wider text-center transition">
                            <i class="fa-solid fa-box-open mr-1.5"></i> Request Sample Box
                        </a>
                    </div>
                </div>

                <!-- Product Specifications Table -->
                <div class="pt-6 border-t border-slate-200">
                    <h3 class="font-heading font-bold text-sm uppercase text-slate-800 mb-3 tracking-wider">Specifications</h3>
                    <div class="grid grid-cols-2 gap-y-3 gap-x-6 text-xs">
                        <div>
                            <span class="text-slate-400 block">Flavour Profile</span>
                            <span class="font-bold text-forest-900">{{ $product->flavor }}</span>
                        </div>
                        <div>
                            <span class="text-slate-400 block">Liquid Capacity</span>
                            <span class="font-bold text-forest-900">{{ $product->size }}</span>
                        </div>
                        <div>
                            <span class="text-slate-400 block">Pack Size</span>
                            <span class="font-bold text-forest-900">{{ $product->piece_count }}</span>
                        </div>
                        <div>
                            <span class="text-slate-400 block">Holding Duration</span>
                            <span class="font-bold text-forest-900">{{ $product->holding_time }}</span>
                        </div>
                        <div>
                            <span class="text-slate-400 block">Shelf Life</span>
                            <span class="font-bold text-forest-900">{{ $product->shelf_life }}</span>
                        </div>
                        <div>
                            <span class="text-slate-400 block">Food Certification</span>
                            <span class="font-bold text-emerald-700">FSSAI Licensed & 100% Veg</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Related Products Section -->
        @if($relatedProducts->isNotEmpty())
            <div class="mt-20 pt-12 border-t border-slate-200">
                <div class="flex items-center justify-between mb-8">
                    <h2 class="font-heading font-black text-2xl text-forest-900">You May Also Like</h2>
                    <a href="{{ route('menu') }}" class="text-xs font-bold text-gold-600 hover:underline">View All Flavors →</a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($relatedProducts as $rel)
                        <div class="bg-slate-50 rounded-2xl overflow-hidden border border-slate-200 p-4 flex gap-4 items-center group hover:bg-white hover:shadow-md transition">
                            <img src="{{ asset($rel->image) }}" alt="{{ $rel->name }}" class="w-20 h-20 rounded-xl object-cover">
                            <div>
                                <span class="text-[10px] font-bold uppercase text-forest-600">{{ $rel->flavor }}</span>
                                <h4 class="font-heading font-bold text-sm text-forest-900 group-hover:text-forest-600 transition">
                                    <a href="{{ route('product.show', $rel->slug) }}">{{ $rel->name }}</a>
                                </h4>
                                <div class="font-heading font-black text-sm text-forest-900 mt-1">₹{{ number_format($rel->price) }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

    </div>
</section>

@endsection
