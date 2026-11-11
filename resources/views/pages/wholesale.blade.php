@extends('layouts.app')

@section('title', 'Wholesale & Cafe B2B Supply | CUP2EAT Edible Cups')
@section('meta_description', 'Partner with Cup2Eat for your cafe, restaurant, catering or franchise. Bulk wholesale cartons from ₹3,999 for 396 cups with free Pan-India delivery. Request a sample box today!')

@section('content')

<!-- Wholesale Hero Section -->
<section class="bg-forest-900 text-white py-16 lg:py-24 border-b border-forest-800 bg-grain relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-7 space-y-6">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-forest-800 border border-gold-500/40 text-gold-300 text-xs font-bold uppercase tracking-wider">
                    <i class="fa-solid fa-handshake"></i> B2B & Wholesale Partnerships
                </div>
                <h1 class="font-heading font-black text-4xl sm:text-5xl lg:text-6xl text-white leading-tight">
                    Upgrade Your Cafe. <br>
                    <span class="text-gradient-gold">Eliminate Single-Use Waste.</span>
                </h1>
                <p class="text-slate-300 text-base sm:text-lg leading-relaxed max-w-xl">
                    Every cafe looks for a differentiator. Cup2Eat gives you the ultimate conversation starter: 
                    delicious, leak-proof edible cups that turn every customer into a brand ambassador.
                </p>

                <div class="flex flex-wrap gap-4 pt-2">
                    <a href="#sample-request"
                       class="px-8 py-4 rounded-xl bg-gradient-to-r from-gold-500 via-gold-400 to-amber-500 text-forest-900 font-heading font-extrabold text-sm shadow-xl hover:scale-[1.02] transition">
                        Request Cafe Sample Box
                    </a>
                    <a href="https://wa.me/919818192575?text=Hello%20Varun!%20I%20am%20a%20cafe%20owner%20and%20interested%20in%20Cup2Eat%20wholesale%20supply."
                       target="_blank"
                       class="px-7 py-4 rounded-xl bg-forest-800 hover:bg-forest-700 text-white font-semibold text-sm border border-forest-600 transition flex items-center gap-2">
                        <i class="fa-brands fa-whatsapp text-green-400 text-base"></i>
                        <span>Direct B2B WhatsApp: 9818192575</span>
                    </a>
                </div>

                <!-- Trust signals -->
                <div class="pt-4 grid grid-cols-3 gap-4 border-t border-forest-800 text-xs text-slate-300">
                    <div>
                        <div class="font-heading font-bold text-white text-base">₹10/Cup</div>
                        <div class="text-[11px] text-slate-400">Low bulk cost</div>
                    </div>
                    <div>
                        <div class="font-heading font-bold text-white text-base">Free Delivery</div>
                        <div class="text-[11px] text-slate-400">All Over India</div>
                    </div>
                    <div>
                        <div class="font-heading font-bold text-white text-base">FSSAI Certified</div>
                        <div class="text-[11px] text-slate-400">100% Pure Veg</div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-5">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl border-2 border-gold-500/30">
                    <img src="{{ asset('images/brand/wholesale-box-4k.jpg') }}" alt="Wholesale 396 Cups Master Box" class="w-full h-auto object-cover">
                    <div class="absolute bottom-3 left-3 right-3 bg-forest-900/90 backdrop-blur-md p-3 rounded-xl border border-gold-500/30 text-xs text-center text-gold-300 font-bold">
                        ⭐ Special Wholesale Rate: ₹3,999 for 396 Cups (Includes Freight!)
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 4 Key Advantages for Food & Beverage Businesses -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs font-bold uppercase tracking-widest text-forest-700 bg-forest-100 px-3.5 py-1.5 rounded-full">
                Why Cafes Love Us
            </span>
            <h2 class="font-heading font-black text-3xl sm:text-4xl text-forest-900 mt-3">
                High Margins, Viral Marketing, Zero Garbage
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-700 flex items-center justify-center text-xl font-bold">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                </div>
                <h3 class="font-heading font-bold text-lg text-forest-900">Premium Add-on Pricing</h3>
                <p class="text-slate-600 text-xs leading-relaxed">
                    Offer your guests the option to "Upgrade to Edible Cup" for ₹25 to ₹40 on top of their beverage. Customers willingly pay for the novelty and taste!
                </p>
            </div>

            <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-pink-100 text-pink-700 flex items-center justify-center text-xl font-bold">
                    <i class="fa-brands fa-instagram"></i>
                </div>
                <h3 class="font-heading font-bold text-lg text-forest-900">Free Organic Social Buzz</h3>
                <p class="text-slate-600 text-xs leading-relaxed">
                    Nearly every first-time customer records a video or takes a selfie biting the cup and tags your cafe location on Instagram and Reels.
                </p>
            </div>

            <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-xl font-bold">
                    <i class="fa-solid fa-recycle"></i>
                </div>
                <h3 class="font-heading font-bold text-lg text-forest-900">Zero Waste Certification</h3>
                <p class="text-slate-600 text-xs leading-relaxed">
                    Position your establishment as an eco-conscious champion in your city. Attract corporate clients and green-conscious millennials.
                </p>
            </div>

            <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 space-y-3">
                <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center text-xl font-bold">
                    <i class="fa-solid fa-truck-fast"></i>
                </div>
                <h3 class="font-heading font-bold text-lg text-forest-900">Scheduled Pan-India Supply</h3>
                <p class="text-slate-600 text-xs leading-relaxed">
                    Set up standing weekly or monthly dispatches. Our heavy-duty corrugated cartons ensure pristine, unbroken delivery right to your pantry.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- Wholesale Master Packs Table -->
<section class="py-16 bg-[#FAF7F2] border-y border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="font-heading font-black text-3xl text-forest-900">
                Popular Wholesale Cartons & Packs
            </h2>
            <p class="text-slate-600 text-sm mt-1">
                All prices include GST billing and doorstep delivery across India.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Tier 1 -->
            <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm flex flex-col justify-between hover:shadow-xl transition">
                <div>
                    <span class="text-[10px] font-bold uppercase tracking-wider bg-forest-100 text-forest-800 px-3 py-1 rounded-full">
                        Flagship Cafe Value
                    </span>
                    <h3 class="font-heading font-black text-2xl text-forest-900 mt-3">Mix Flavour Mega Box</h3>
                    <p class="text-xs text-slate-500 mt-1">Assorted Chocolate, Elaichi & Vanilla</p>
                    
                    <div class="mt-6 flex items-baseline gap-2">
                        <span class="font-heading font-black text-4xl text-forest-900">₹3,999</span>
                        <span class="text-xs text-slate-400 line-through">₹4,800</span>
                    </div>
                    <span class="text-xs text-emerald-600 font-bold block mt-1">396 Cups (~₹10.09 / cup)</span>

                    <ul class="mt-6 space-y-3 text-xs text-slate-600 border-t border-slate-100 pt-6">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-500"></i> 100ml Standard Size for Chai & Coffee</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-500"></i> 40+ Minutes Leak-Proof Guarantee</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-500"></i> Free All-India Freight Included</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-500"></i> 9-Month Shelf Life</li>
                    </ul>
                </div>

                <div class="mt-8 space-y-2">
                    <button type="button"
                            @click="addToCart({ id: 'wholesale-mega-carton-396', name: 'Wholesale Master Mix Carton (396 Cups)', price: 3999, piece_count: '396 Cups', size: '100ml', flavor: 'Mix (Choco, Elaichi, Vanilla)', image: '{{ asset('images/brand/wholesale-box-4k.jpg') }}', qty: 1 })"
                            class="w-full py-3 rounded-xl bg-gold-500 hover:bg-gold-400 text-forest-900 font-heading font-extrabold text-xs uppercase tracking-wider flex items-center justify-center gap-1.5 transition">
                        <i class="fa-solid fa-basket-shopping"></i> Add Carton to Cart
                    </button>
                    @php
                        $msg1 = "Hello Varun! I want to order the Wholesale Mega Box (396 Cups @ ₹3,999). Please confirm shipment to my cafe.";
                    @endphp
                    <a href="https://wa.me/919818192575?text={{ urlencode($msg1) }}" target="_blank"
                       class="w-full py-2.5 rounded-xl bg-forest-900 hover:bg-forest-800 text-slate-200 font-heading font-semibold text-xs uppercase tracking-wider block text-center transition">
                        Order on WhatsApp
                    </a>
                </div>
            </div>

            <!-- Tier 2 (Highlighted) -->
            <div class="bg-forest-900 text-white rounded-3xl p-8 border-2 border-gold-500 shadow-2xl flex flex-col justify-between relative transform lg:-translate-y-2">
                <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-gold-500 text-forest-900 text-xs font-black uppercase tracking-wider px-4 py-1 rounded-full shadow-lg">
                    ⭐ Most Popular for Baristas
                </div>

                <div>
                    <span class="text-[10px] font-bold uppercase tracking-wider bg-forest-800 text-gold-300 px-3 py-1 rounded-full border border-forest-700">
                        High Indulgence
                    </span>
                    <h3 class="font-heading font-black text-2xl text-white mt-3">100ml CC Premium Tray</h3>
                    <p class="text-xs text-slate-300 mt-1">Dark Cocoa Inner Seal • "Eat One Time, You Crave Another"</p>
                    
                    <div class="mt-6 flex items-baseline gap-2">
                        <span class="font-heading font-black text-4xl text-gold-400">₹3,200</span>
                        <span class="text-xs text-slate-400 line-through">₹3,800</span>
                    </div>
                    <span class="text-xs text-gold-300 font-bold block mt-1">200 Cups (Bulk Tray Packing)</span>

                    <ul class="mt-6 space-y-3 text-xs text-slate-300 border-t border-forest-800 pt-6">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-gold-400"></i> Pure Dark Cocoa Glaze Rim & Wall</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-gold-400"></i> Ideal for Cappuccino, Mocha & Cutting Chai</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-gold-400"></i> Doorstep Courier Included</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-gold-400"></i> FSSAI Certified 100% Pure Veg</li>
                    </ul>
                </div>

                <div class="mt-8 space-y-2">
                    <button type="button"
                            @click="addToCart({ id: '100ml-cc-premium-chocolate-coated-bulk', name: '100ml CC Premium Chocolate Coated', price: 3200, piece_count: '200 Pcs Box', size: '100ml', flavor: 'Dark Chocolate', image: '{{ asset('images/brand/latte-art-cup-4k.jpg') }}', qty: 1 })"
                            class="w-full py-3.5 rounded-xl bg-gold-500 hover:bg-gold-400 text-forest-900 font-heading font-black text-xs uppercase tracking-wider flex items-center justify-center gap-1.5 shadow-lg transition">
                        <i class="fa-solid fa-basket-shopping"></i> Add Tray to Cart
                    </button>
                    @php
                        $msg2 = "Hello Varun! I want to order the 100ml CC Premium Tray (200 Pcs @ ₹3,200). Please share invoice & dispatch date.";
                    @endphp
                    <a href="https://wa.me/919818192575?text={{ urlencode($msg2) }}" target="_blank"
                       class="w-full py-2.5 rounded-xl bg-forest-800 hover:bg-forest-700 text-gold-300 font-heading font-semibold text-xs uppercase tracking-wider block text-center transition">
                        Order on WhatsApp Now
                    </a>
                </div>
            </div>

            <!-- Tier 3 -->
            <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm flex flex-col justify-between hover:shadow-xl transition">
                <div>
                    <span class="text-[10px] font-bold uppercase tracking-wider bg-forest-100 text-forest-800 px-3 py-1 rounded-full">
                        Beverage & Dessert Bar
                    </span>
                    <h3 class="font-heading font-black text-2xl text-forest-900 mt-3">150ml Shake Glasses</h3>
                    <p class="text-xs text-slate-500 mt-1">Cold Brew, Thick Shake & Gelato Cup</p>
                    
                    <div class="mt-6 flex items-baseline gap-2">
                        <span class="font-heading font-black text-4xl text-forest-900">₹4,300</span>
                        <span class="text-xs text-slate-400 line-through">₹5,000</span>
                    </div>
                    <span class="text-xs text-emerald-600 font-bold block mt-1">200 Pcs Master Box</span>

                    <ul class="mt-6 space-y-3 text-xs text-slate-600 border-t border-slate-100 pt-6">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-500"></i> Extra Large 150ml Capacity</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-500"></i> Thicker Wafer Wall for Ice & Smoothies</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-500"></i> 45+ Minutes Cold Resistant</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-500"></i> Free Pan-India Delivery</li>
                    </ul>
                </div>

                <div class="mt-8 space-y-2">
                    <button type="button"
                            @click="addToCart({ id: '150ml-cold-coffee-shake-glasses', name: '150ml Cold Coffee & Shake Glasses', price: 4300, piece_count: '200 Pcs Box', size: '150ml', flavor: 'Cold Beverage Wafer Glass', image: '{{ asset('images/brand/cold-coffee-4k.jpg') }}', qty: 1 })"
                            class="w-full py-3 rounded-xl bg-gold-500 hover:bg-gold-400 text-forest-900 font-heading font-extrabold text-xs uppercase tracking-wider flex items-center justify-center gap-1.5 transition">
                        <i class="fa-solid fa-basket-shopping"></i> Add Glasses to Cart
                    </button>
                    @php
                        $msg3 = "Hello Varun! I want to order the 150ml Cold Coffee & Milkshake Glasses (200 Pcs @ ₹4,300).";
                    @endphp
                    <a href="https://wa.me/919818192575?text={{ urlencode($msg3) }}" target="_blank"
                       class="w-full py-2.5 rounded-xl bg-forest-900 hover:bg-forest-800 text-slate-200 font-heading font-semibold text-xs uppercase tracking-wider block text-center transition">
                        Order on WhatsApp
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Dedicated Sample Request & Wholesale Inquiry Form Section -->
<section id="sample-request" class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="bg-forest-900 rounded-3xl p-8 sm:p-12 text-white shadow-2xl border border-forest-800">
            <div class="text-center max-w-2xl mx-auto mb-10">
                <span class="text-xs font-bold uppercase tracking-wider text-gold-400 bg-forest-800 px-3 py-1 rounded-full border border-forest-700">
                    Direct Factory Supply
                </span>
                <h2 class="font-heading font-black text-3xl sm:text-4xl text-white mt-3">
                    Request a Cafe Sample Box or Wholesale Quotation
                </h2>
                <p class="text-slate-300 text-xs sm:text-sm mt-2">
                    Fill this quick form. Your inquiry will be logged instantly, and you'll get a direct connection with Founder Varun Khera on WhatsApp.
                </p>
            </div>

            <form action="{{ route('wholesale.inquiry') }}" method="POST" class="space-y-6">
                @csrf

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">Your Name *</label>
                        <input type="text" name="name" required value="{{ old('name') }}"
                               placeholder="e.g. Varun Malhotra"
                               class="w-full px-4 py-3 rounded-xl bg-forest-800 border border-forest-700 text-white placeholder-slate-500 focus:outline-none focus:border-gold-500 text-base sm:text-sm">
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">WhatsApp / Phone Number *</label>
                        <input type="text" name="phone" required value="{{ old('phone') }}"
                               placeholder="e.g. 9818192575"
                               class="w-full px-4 py-3 rounded-xl bg-forest-800 border border-forest-700 text-white placeholder-slate-500 focus:outline-none focus:border-gold-500 text-base sm:text-sm">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">City & State *</label>
                        <input type="text" name="city" required value="{{ old('city') }}"
                               placeholder="e.g. Mumbai, Maharashtra"
                               class="w-full px-4 py-3 rounded-xl bg-forest-800 border border-forest-700 text-white placeholder-slate-500 focus:outline-none focus:border-gold-500 text-base sm:text-sm">
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">Business Type *</label>
                        <select name="business_type" required class="w-full px-4 py-3 rounded-xl bg-forest-800 border border-forest-700 text-white focus:outline-none focus:border-gold-500 text-base sm:text-sm">
                            <option value="Cafe / Restaurant">Cafe / Restaurant / Coffee Shop</option>
                            <option value="Tea Stall / Kiosk">Tea Stall / Cutting Chai Kiosk</option>
                            <option value="Event Catering / Wedding">Event Catering / Wedding Planner</option>
                            <option value="Corporate / IT Park Cafeteria">Corporate / IT Park Cafeteria</option>
                            <option value="Distributor / Wholesaler">Distributor / Wholesaler</option>
                            <option value="Individual / Home Trial">Individual / Home Trial</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">Estimated Monthly Volume *</label>
                        <select name="volume_needed" required class="w-full px-4 py-3 rounded-xl bg-forest-800 border border-forest-700 text-white focus:outline-none focus:border-gold-500 text-base sm:text-sm">
                            <option value="Sample Box Only (Trial)">Sample Box Only (Trial)</option>
                            <option value="1 - 3 Cartons (400 - 1,200 cups/month)">1 - 3 Cartons (400 - 1,200 cups/month)</option>
                            <option value="5 - 10 Cartons (2,000 - 4,000 cups/month)">5 - 10 Cartons (2,000 - 4,000 cups/month)</option>
                            <option value="15+ Cartons (6,000+ cups/month)">15+ Cartons (6,000+ cups/month - Franchise Supply)</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">Preferred Flavours</label>
                        <input type="text" name="flavor_interest" value="{{ old('flavor_interest') }}"
                               placeholder="e.g. Chocolate Coated, Elaichi, Vanilla"
                               class="w-full px-4 py-3 rounded-xl bg-forest-800 border border-forest-700 text-white placeholder-slate-500 focus:outline-none focus:border-gold-500 text-base sm:text-sm">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">Email Address (Optional)</label>
                    <input type="email" name="email" value="{{ old('email') }}"
                           placeholder="e.g. cafe@domain.com"
                           class="w-full px-4 py-3 rounded-xl bg-forest-800 border border-forest-700 text-white placeholder-slate-500 focus:outline-none focus:border-gold-500 text-base sm:text-sm">
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">Any Specific Question or Delivery Requirement</label>
                    <textarea name="message" rows="3"
                              placeholder="Tell us about your cafe, upcoming events, or questions regarding heat resistance and shelf life..."
                              class="w-full px-4 py-3 rounded-xl bg-forest-800 border border-forest-700 text-white placeholder-slate-500 focus:outline-none focus:border-gold-500 text-base sm:text-sm">{{ old('message') }}</textarea>
                </div>

                <div class="flex items-center gap-3 bg-forest-800/80 p-4 rounded-xl border border-forest-700">
                    <input type="checkbox" id="is_sample_box" name="is_sample_box" value="1" checked class="w-4 h-4 rounded text-gold-500 accent-gold-500">
                    <label for="is_sample_box" class="text-xs text-slate-200 cursor-pointer">
                        <strong>Yes, please send me a Sample Trial Box</strong> with assorted flavors for testing in my cafe/kitchen.
                    </label>
                </div>

                <div class="text-center pt-2">
                    <button type="submit"
                            class="w-full sm:w-auto px-10 py-4 rounded-xl bg-gradient-to-r from-gold-500 via-gold-400 to-amber-500 text-forest-900 font-heading font-black text-sm uppercase tracking-wider shadow-xl hover:scale-[1.02] transition">
                        Submit Inquiry & Connect On WhatsApp
                    </button>
                    <p class="text-[11px] text-slate-400 mt-2">
                        🔒 We never share your contact details. Direct connection with Founder Varun Khera.
                    </p>
                </div>
            </form>

        </div>

    </div>
</section>

@endsection

