@extends('layouts.app')

@section('title', 'Contact Us & Wholesale Hotline | CUP2EAT')
@section('meta_description', 'Get in touch with Cup2Eat and Founder Varun Khera. Reach us via Phone/WhatsApp at +91 98181 92575 or submit an inquiry for cafe distribution.')

@section('content')

<!-- Header -->
<section class="bg-forest-900 text-white py-14 border-b border-forest-800 bg-grain relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <span class="text-xs font-bold uppercase tracking-widest text-gold-400 bg-forest-800 px-3 py-1 rounded-full border border-forest-700">
                Direct Line
            </span>
            <h1 class="font-heading font-black text-3xl sm:text-5xl text-white mt-3">
                Let's Talk Edible Cups
            </h1>
            <p class="text-slate-300 text-sm sm:text-base mt-2">
                Have questions about custom flavors, cafe wholesale pricing, or sample boxes? We are always here to help.
            </p>
        </div>
    </div>
</section>

<section class="py-16 bg-[#FAF7F2]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

            <!-- Contact Information Cards -->
            <div class="lg:col-span-5 space-y-6">
                
                <!-- Quick WhatsApp Card -->
                <div class="bg-gradient-to-tr from-emerald-600 to-green-600 text-white p-6 rounded-3xl shadow-lg space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-xs uppercase font-extrabold tracking-wider bg-white/20 px-3 py-1 rounded-full">
                            Fastest Response
                        </span>
                        <i class="fa-brands fa-whatsapp text-3xl"></i>
                    </div>
                    <h3 class="font-heading font-black text-2xl text-white">WhatsApp Orders</h3>
                    <p class="text-xs text-emerald-100">
                        Chat directly with Founder Varun Khera for immediate pricing, order tracking, and stock checks.
                    </p>
                    <div class="pt-2">
                        <a href="https://wa.me/919818192575?text=Hello%20Varun!%20I%20have%20an%20inquiry%20regarding%20Cup2Eat." target="_blank"
                           class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-white text-emerald-800 font-bold text-xs uppercase tracking-wider hover:bg-emerald-50 transition shadow">
                            <i class="fa-brands fa-whatsapp text-sm"></i>
                            <span>Chat: +91 98181 92575</span>
                        </a>
                    </div>
                </div>

                <!-- Info Cards Grid -->
                <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm space-y-5 text-sm text-slate-700">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-forest-50 text-forest-700 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            <div class="text-xs text-slate-400 uppercase font-bold">Call Hotline</div>
                            <a href="tel:+919818192575" class="font-bold text-forest-900 hover:text-gold-600 transition">+91 98181 92575</a>
                            <div class="text-[11px] text-slate-500">Mon - Sat: 9:00 AM - 8:00 PM IST</div>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-forest-50 text-forest-700 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div>
                            <div class="text-xs text-slate-400 uppercase font-bold">Email Inquiries</div>
                            <a href="mailto:orders@cup2eat.com" class="font-bold text-forest-900 hover:text-gold-600 transition">orders@cup2eat.com</a>
                            <div class="text-[11px] text-slate-500">Corporate & Franchise RFPs</div>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-forest-50 text-forest-700 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <div class="text-xs text-slate-400 uppercase font-bold">Manufacturing & Dispatch Hub</div>
                            <span class="font-bold text-forest-900">Ghaziabad / Delhi NCR, India</span>
                            <div class="text-[11px] text-slate-500">Pan-India Freight Dispatches Daily</div>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-forest-50 text-pink-600 flex items-center justify-center shrink-0">
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                        <div>
                            <div class="text-xs text-slate-400 uppercase font-bold">Instagram Community</div>
                            <a href="https://instagram.com/cup2eat" target="_blank" class="font-bold text-pink-600 hover:underline">@cup2eat</a>
                            <div class="text-[11px] text-slate-500">Watch customer reels & live stories</div>
                        </div>
                    </div>
                </div>

                <!-- Logistics Badges -->
                <div class="bg-forest-900 text-white p-5 rounded-3xl border border-forest-800 text-xs space-y-2">
                    <div class="font-heading font-bold text-gold-400">Pan-India Courier Network</div>
                    <p class="text-slate-300 text-[11px]">
                        We partner with express courier networks to ensure swift doorstep delivery to tier-1, tier-2, and tier-3 cities across India.
                    </p>
                </div>

            </div>

            <!-- Contact Form -->
            <div class="lg:col-span-7">
                <div class="bg-white rounded-3xl p-8 sm:p-10 border border-slate-200 shadow-sm">
                    <h2 class="font-heading font-black text-2xl text-forest-900 mb-2">
                        Send Us A Message
                    </h2>
                    <p class="text-xs text-slate-500 mb-6">
                        Fill in your query and Founder Varun Khera will get back to you within 24 hours.
                    </p>

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
                        @csrf

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Your Name *</label>
                                <input type="text" name="name" required value="{{ old('name') }}"
                                       placeholder="e.g. Varun Khera"
                                       class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-base sm:text-sm focus:outline-none focus:border-forest-600 focus:bg-white">
                            </div>

                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Phone / WhatsApp *</label>
                                <input type="text" name="phone" required value="{{ old('phone') }}"
                                       placeholder="e.g. 9818192575"
                                       class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-base sm:text-sm focus:outline-none focus:border-forest-600 focus:bg-white">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Email Address</label>
                                <input type="email" name="email" value="{{ old('email') }}"
                                       placeholder="e.g. varun@example.com"
                                       class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-base sm:text-sm focus:outline-none focus:border-forest-600 focus:bg-white">
                            </div>

                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">City</label>
                                <input type="text" name="city" value="{{ old('city') }}"
                                       placeholder="e.g. Delhi NCR, Mumbai, Ahmedabad"
                                       class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-base sm:text-sm focus:outline-none focus:border-forest-600 focus:bg-white">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Subject</label>
                            <input type="text" name="subject" value="{{ old('subject') }}"
                                   placeholder="e.g. Sample box inquiry, Franchise distributorship, Custom branding"
                                   class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-base sm:text-sm focus:outline-none focus:border-forest-600 focus:bg-white">
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Your Message *</label>
                            <textarea name="message" rows="5" required
                                      placeholder="Tell us what you are looking for..."
                                      class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-base sm:text-sm focus:outline-none focus:border-forest-600 focus:bg-white">{{ old('message') }}</textarea>
                        </div>

                        <button type="submit"
                                class="w-full sm:w-auto px-8 py-3.5 rounded-xl bg-forest-900 hover:bg-forest-800 text-gold-400 font-heading font-black text-sm uppercase tracking-wider shadow-lg transition">
                            Submit Message
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection

