@extends('layouts.app')

@section('title', 'Interactive Order Builder & Instant Quotation | CUP2EAT')
@section('meta_description', 'Customize your Cup2Eat order online. Pick flavors, carton sizes, calculate instant pricing with free Pan-India delivery, and submit your order directly via WhatsApp.')

@section('content')

<!-- Header -->
<section class="bg-forest-900 text-white py-14 border-b border-forest-800 bg-grain relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <span class="text-xs font-bold uppercase tracking-widest text-gold-400 bg-forest-800 px-3 py-1 rounded-full border border-forest-700">
                Custom Quotation Builder
            </span>
            <h1 class="font-heading font-black text-3xl sm:text-5xl text-white mt-3">
                Build Your Custom Order
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-2">
                Mix and match flavors, select bulk cartons or retail packs, see live calculations with Pan-India delivery, and place your order in 60 seconds.
            </p>
        </div>
    </div>
</section>

<!-- Interactive Order Configurator -->
<section class="py-14 bg-[#FAF7F2]" x-data="{
    products: {{ $products->map(function($p) {
        preg_match('/(\d+)/', $p->piece_count, $m);
        $cups = isset($m[1]) ? (int)$m[1] : 1;
        return [
            'id' => $p->id,
            'name' => $p->name,
            'price' => (float)$p->price,
            'piece_count' => $p->piece_count,
            'size' => $p->size,
            'flavor' => $p->flavor,
            'cups_each' => $cups,
            'qty' => 0
        ];
    })->toJson() }},

    get selectedItems() {
        return this.products.filter(p => p.qty > 0);
    },

    get subtotal() {
        return this.selectedItems.reduce((sum, p) => sum + (p.price * p.qty), 0);
    },

    get totalCups() {
        return this.selectedItems.reduce((sum, p) => sum + (p.cups_each * p.qty), 0);
    },

    increment(index) {
        this.products[index].qty++;
    },

    decrement(index) {
        if (this.products[index].qty > 0) {
            this.products[index].qty--;
        }
    },

    resetCart() {
        this.products.forEach(p => p.qty = 0);
    }
}">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <form action="{{ route('order.store') }}" method="POST">
            @csrf

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

                <!-- Left Column: Product Selection Grid -->
                <div class="lg:col-span-8 space-y-6">
                    
                    <div class="flex items-center justify-between">
                        <h2 class="font-heading font-black text-2xl text-forest-900">
                            1. Select Cups & Packs
                        </h2>
                        <button type="button" @click="resetCart()" class="text-xs text-red-600 font-bold hover:underline" x-show="selectedItems.length > 0">
                            Clear Selection
                        </button>
                    </div>

                    <div class="space-y-4">
                        <template x-for="(prod, index) in products" :key="prod.id">
                            <div class="bg-white rounded-2xl p-5 border border-slate-200 shadow-sm flex flex-col sm:flex-row sm:items-center justify-between gap-4 transition hover:border-gold-500/50">
                                
                                <div class="space-y-1">
                                    <div class="flex items-center gap-2">
                                        <span class="text-[10px] font-bold uppercase tracking-wider bg-forest-100 text-forest-800 px-2 py-0.5 rounded" x-text="prod.size"></span>
                                        <span class="text-[10px] font-bold uppercase tracking-wider bg-amber-100 text-amber-800 px-2 py-0.5 rounded" x-text="prod.piece_count"></span>
                                    </div>
                                    <h3 class="font-heading font-bold text-base text-forest-900" x-text="prod.name"></h3>
                                    <p class="text-xs text-slate-500" x-text="'Flavor: ' + prod.flavor"></p>
                                </div>

                                <div class="flex items-center justify-between sm:justify-end gap-6 shrink-0 pt-2 sm:pt-0 border-t sm:border-t-0 border-slate-100">
                                    <div class="text-left sm:text-right">
                                        <div class="text-xs text-slate-400">Unit Price</div>
                                        <div class="font-heading font-black text-lg text-forest-900" x-text="'₹' + prod.price.toLocaleString()"></div>
                                    </div>

                                    <!-- Quantity Stepper -->
                                    <div class="flex items-center border border-slate-300 rounded-xl bg-slate-50 overflow-hidden shadow-inner">
                                        <button type="button" @click="decrement(index)"
                                                class="w-9 h-9 flex items-center justify-center text-slate-600 hover:bg-slate-200 font-bold transition">
                                            -
                                        </button>
                                        <span class="w-10 text-center font-heading font-bold text-sm text-forest-900" x-text="prod.qty"></span>
                                        <button type="button" @click="increment(index)"
                                                class="w-9 h-9 flex items-center justify-center text-slate-600 hover:bg-slate-200 font-bold transition">
                                            +
                                        </button>
                                    </div>

                                    <!-- Hidden Form Inputs for Submitted Array -->
                                    <template x-if="prod.qty > 0">
                                        <div>
                                            <input type="hidden" :name="'items[' + index + '][product_id]'" :value="prod.id">
                                            <input type="hidden" :name="'items[' + index + '][quantity]'" :value="prod.qty">
                                        </div>
                                    </template>
                                </div>

                            </div>
                        </template>
                    </div>

                    <!-- Step 2: Delivery Details Form -->
                    <div class="mt-10 pt-8 border-t border-slate-200 space-y-6">
                        <h2 class="font-heading font-black text-2xl text-forest-900">
                            2. Delivery & Contact Details
                        </h2>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Customer / Cafe Name *</label>
                                <input type="text" name="customer_name" required value="{{ old('customer_name') }}"
                                       placeholder="e.g. Varun Khera / Artisan Roastery"
                                       class="w-full px-4 py-3 rounded-xl bg-white border border-slate-200 text-base sm:text-sm focus:outline-none focus:border-forest-600">
                            </div>

                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">WhatsApp / Phone Number *</label>
                                <input type="text" name="phone" required value="{{ old('phone') }}"
                                       placeholder="e.g. 9818192575"
                                       class="w-full px-4 py-3 rounded-xl bg-white border border-slate-200 text-base sm:text-sm focus:outline-none focus:border-forest-600">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Delivery City & State *</label>
                                <input type="text" name="city" required value="{{ old('city') }}"
                                       placeholder="e.g. Mumbai, Maharashtra"
                                       class="w-full px-4 py-3 rounded-xl bg-white border border-slate-200 text-base sm:text-sm focus:outline-none focus:border-forest-600">
                            </div>

                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Usage Purpose</label>
                                <select name="business_type" class="w-full px-4 py-3 rounded-xl bg-white border border-slate-200 text-base sm:text-sm focus:outline-none focus:border-forest-600">
                                    <option value="Cafe / Restaurant Regular Supply">Cafe / Restaurant Regular Supply</option>
                                    <option value="Event Catering / Wedding Party">Event Catering / Wedding Party</option>
                                    <option value="Corporate / IT Office Cafeteria">Corporate / IT Office Cafeteria</option>
                                    <option value="Retail Trial / Personal Gifting">Retail Trial / Personal Gifting</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Email Address (Optional)</label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                   placeholder="e.g. contact@business.com"
                                   class="w-full px-4 py-3 rounded-xl bg-white border border-slate-200 text-base sm:text-sm focus:outline-none focus:border-forest-600">
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Special Delivery Notes</label>
                            <textarea name="notes" rows="2"
                                      placeholder="Any specific delivery date, packing preference or instructions..."
                                      class="w-full px-4 py-3 rounded-xl bg-white border border-slate-200 text-base sm:text-sm focus:outline-none focus:border-forest-600">{{ old('notes') }}</textarea>
                        </div>
                    </div>

                </div>

                <!-- Right Column: Live Order Summary Sticky Card -->
                <div class="lg:col-span-4 sticky top-28 space-y-6">
                    
                    <div class="bg-forest-900 text-white rounded-3xl p-6 sm:p-8 border border-forest-800 shadow-2xl space-y-6">
                        
                        <div class="border-b border-forest-800 pb-4">
                            <span class="text-[10px] font-bold uppercase tracking-wider text-gold-400 bg-forest-800 px-2.5 py-1 rounded">Live Summary</span>
                            <h3 class="font-heading font-black text-2xl text-white mt-2">Order Quotation</h3>
                        </div>

                        <!-- Selected Items List -->
                        <div class="space-y-3 min-h-[120px] max-h-60 overflow-y-auto pr-1">
                            <template x-if="selectedItems.length === 0">
                                <div class="text-center py-8 text-slate-400 text-xs">
                                    <i class="fa-solid fa-cart-shopping text-2xl text-forest-700 mb-2 block"></i>
                                    No items added yet. Click <strong>+</strong> on any product to start building your quote!
                                </div>
                            </template>

                            <template x-for="item in selectedItems" :key="item.id">
                                <div class="flex items-center justify-between text-xs py-1.5 border-b border-forest-800/80">
                                    <div class="truncate pr-2">
                                        <span class="font-bold text-white" x-text="item.name"></span>
                                        <div class="text-[11px] text-slate-400" x-text="item.qty + ' x ₹' + item.price.toLocaleString()"></div>
                                    </div>
                                    <div class="font-heading font-bold text-gold-400 shrink-0" x-text="'₹' + (item.price * item.qty).toLocaleString()"></div>
                                </div>
                            </template>
                        </div>

                        <!-- Price Breakdown -->
                        <div class="border-t border-forest-800 pt-4 space-y-2 text-xs">
                            <div class="flex justify-between text-slate-300">
                                <span>Total Edible Cups:</span>
                                <span class="font-bold text-white font-heading" x-text="totalCups.toLocaleString() + ' Cups'"></span>
                            </div>
                            <div class="flex justify-between text-slate-300">
                                <span>Pan-India Delivery:</span>
                                <span class="text-emerald-400 font-bold">FREE (₹0)</span>
                            </div>
                            <div class="flex justify-between text-slate-300">
                                <span>GST & Safe Packing:</span>
                                <span class="text-slate-300">Included</span>
                            </div>
                            
                            <div class="flex justify-between items-baseline pt-4 border-t border-forest-800">
                                <span class="font-heading font-bold text-sm text-white">Estimated Total:</span>
                                <span class="font-heading font-black text-3xl text-gradient-gold" x-text="'₹' + subtotal.toLocaleString()"></span>
                            </div>
                        </div>

                        <!-- Submit CTA -->
                        <div>
                            <button type="submit"
                                    :disabled="selectedItems.length === 0"
                                    :class="selectedItems.length === 0 ? 'opacity-50 cursor-not-allowed' : 'hover:scale-[1.02] shadow-xl'"
                                    class="w-full py-4 rounded-xl bg-gradient-to-r from-gold-500 via-gold-400 to-amber-500 text-forest-900 font-heading font-black text-sm uppercase tracking-wider transition">
                                Generate Quote & Send to WhatsApp
                            </button>
                            <p class="text-[10px] text-slate-400 text-center mt-2.5">
                                ✓ Direct submission to Founder Varun Khera on WhatsApp
                            </p>
                        </div>

                    </div>

                    <!-- Safety Guarantee Card -->
                    <div class="bg-white rounded-2xl p-4 border border-slate-200 text-xs text-slate-600 space-y-2">
                        <div class="flex items-center gap-2 font-bold text-forest-900">
                            <i class="fa-solid fa-shield-halved text-emerald-600 text-sm"></i>
                            <span>Cup2Eat Buyer Guarantee</span>
                        </div>
                        <p class="text-[11px] leading-relaxed">
                            Zero-breakage guarantee during transit. Replacement or refund for damaged cartons upon video unboxing proof.
                        </p>
                    </div>

                </div>

            </div>

            <!-- Mobile Sticky Bottom Quote Bar (Visible only on mobile when items are selected) -->
            <div x-show="selectedItems.length > 0"
                 x-cloak
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="translate-y-full opacity-0"
                 x-transition:enter-end="translate-y-0 opacity-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="translate-y-0 opacity-100"
                 x-transition:leave-end="translate-y-full opacity-0"
                 class="lg:hidden fixed bottom-3 left-3 right-3 z-30 bg-forest-900/95 backdrop-blur-md border border-gold-500/50 p-3 rounded-2xl shadow-2xl flex items-center justify-between gap-3 text-white">
                <div class="min-w-0">
                    <div class="text-[11px] text-gold-300/90 font-medium truncate">
                        <span x-text="totalCups.toLocaleString()"></span> cups selected
                    </div>
                    <div class="font-heading font-black text-lg text-gold-400" x-text="'₹' + subtotal.toLocaleString()"></div>
                </div>
                <button type="submit"
                        class="px-4 py-2.5 rounded-xl bg-gradient-to-r from-gold-500 to-amber-500 text-forest-900 font-heading font-black text-xs uppercase tracking-wider shadow-md shrink-0 flex items-center gap-1.5 hover:scale-105 transition">
                    <span>WhatsApp Quote</span>
                    <i class="fa-brands fa-whatsapp text-sm"></i>
                </button>
            </div>
        </form>

    </div>
</section>

@endsection

