@extends('layouts.app')

@section('title', 'Order Quotation #' . $quote->quote_number . ' Confirmed | CUP2EAT')

@section('content')

<section class="py-16 bg-[#FAF7F2]">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="bg-white rounded-3xl p-8 sm:p-12 border border-slate-200 shadow-xl space-y-8">

            <!-- Success Header -->
            <div class="text-center space-y-3">
                <div class="w-16 h-16 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-3xl mx-auto shadow-inner">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-700 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200">
                    Quotation Reference Generated
                </span>
                <h1 class="font-heading font-black text-3xl sm:text-4xl text-forest-900">
                    Order Ref: #{{ $quote->quote_number }}
                </h1>
                <p class="text-xs sm:text-sm text-slate-500">
                    Thank you, <strong>{{ $quote->customer_name }}</strong>! Your custom order has been logged in our system.
                </p>
            </div>

            <!-- WhatsApp Primary CTA -->
            @if(session('whatsapp_url'))
                <div class="bg-emerald-50 border-2 border-emerald-500 p-6 rounded-2xl text-center space-y-3">
                    <h3 class="font-heading font-bold text-lg text-emerald-900">
                        Final Step: Connect with Varun on WhatsApp
                    </h3>
                    <p class="text-xs text-emerald-800 max-w-md mx-auto">
                        Click the button below to send your pre-formatted order directly to Founder Varun Khera to confirm dispatch date and payment details.
                    </p>
                    <a href="{{ session('whatsapp_url') }}" target="_blank"
                       class="inline-flex items-center gap-2.5 px-8 py-4 rounded-xl bg-gradient-to-r from-emerald-600 to-green-600 text-white font-heading font-black text-sm uppercase tracking-wider shadow-lg hover:from-emerald-700 hover:to-green-700 hover:scale-[1.02] transition">
                        <i class="fa-brands fa-whatsapp text-2xl"></i>
                        <span>Send Order on WhatsApp Now</span>
                    </a>
                </div>
            @endif

            <!-- Customer & Delivery Summary -->
            <div class="grid grid-cols-2 gap-4 text-xs bg-slate-50 p-5 rounded-2xl border border-slate-200">
                <div>
                    <span class="text-slate-400 block uppercase font-bold text-[10px]">Customer Name</span>
                    <span class="font-bold text-forest-900 text-sm">{{ $quote->customer_name }}</span>
                </div>
                <div>
                    <span class="text-slate-400 block uppercase font-bold text-[10px]">Contact Phone</span>
                    <span class="font-bold text-forest-900 text-sm">{{ $quote->phone }}</span>
                </div>
                <div>
                    <span class="text-slate-400 block uppercase font-bold text-[10px]">Delivery City</span>
                    <span class="font-bold text-forest-900 text-sm">{{ $quote->city }}</span>
                </div>
                <div>
                    <span class="text-slate-400 block uppercase font-bold text-[10px]">Purpose</span>
                    <span class="font-bold text-forest-900 text-sm">{{ $quote->business_type ?? 'Personal / Retail' }}</span>
                </div>
            </div>

            <!-- Itemized Table -->
            <div>
                <h3 class="font-heading font-bold text-sm uppercase text-slate-800 mb-3 tracking-wider">
                    Selected Items ({{ count($quote->items_json) }})
                </h3>
                
                <div class="overflow-x-auto border border-slate-200 rounded-2xl">
                    <table class="w-full text-left text-xs text-slate-700">
                        <thead class="bg-slate-50 text-slate-500 uppercase text-[10px] font-bold border-b border-slate-200">
                            <tr>
                                <th class="py-3 px-4">Item</th>
                                <th class="py-3 px-4 text-center">Pack Qty</th>
                                <th class="py-3 px-4 text-right">Unit Price</th>
                                <th class="py-3 px-4 text-right">Total</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @foreach($quote->items_json as $item)
                                <tr>
                                    <td class="py-3 px-4">
                                        <div class="font-bold text-forest-900">{{ $item['name'] }}</div>
                                        <div class="text-[10px] text-slate-500">{{ $item['flavor'] }} • {{ $item['piece_count'] }}</div>
                                    </td>
                                    <td class="py-3 px-4 text-center font-bold">{{ $item['quantity'] }}</td>
                                    <td class="py-3 px-4 text-right">₹{{ number_format($item['price']) }}</td>
                                    <td class="py-3 px-4 text-right font-bold text-forest-900">₹{{ number_format($item['line_total']) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot class="bg-forest-900 text-white font-bold">
                            <tr>
                                <td colspan="3" class="py-3 px-4 text-right">Estimated Grand Total (Pan-India Free Shipping):</td>
                                <td class="py-3 px-4 text-right font-heading text-base text-gold-400">
                                    ₹{{ number_format($quote->estimated_total) }}
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            @if($quote->notes)
                <div class="text-xs text-slate-600 bg-amber-50 p-4 rounded-xl border border-amber-200">
                    <strong>Special Note:</strong> {{ $quote->notes }}
                </div>
            @endif

            <!-- Navigation Actions -->
            <div class="pt-4 flex items-center justify-between border-t border-slate-200 text-xs">
                <a href="{{ route('menu') }}" class="text-slate-600 hover:text-forest-900 font-bold flex items-center gap-1">
                    <i class="fa-solid fa-arrow-left"></i> Return to Menu
                </a>
                <button type="button" onclick="window.print()" class="text-forest-700 hover:text-forest-900 font-bold flex items-center gap-1.5">
                    <i class="fa-solid fa-print"></i> Print / Save Quotation
                </button>
            </div>

        </div>

    </div>
</section>

@endsection

