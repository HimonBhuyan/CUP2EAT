@extends('layouts.app')

@section('title', 'Founder & Admin Control Center | CUP2EAT')

@section('content')

<!-- Admin Header -->
<section class="bg-forest-900 text-white py-10 border-b border-forest-800 bg-grain">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <div class="flex items-center gap-2">
                    <span class="text-xs font-bold uppercase tracking-wider text-gold-400 bg-forest-800 px-3 py-1 rounded-full border border-forest-700">
                        <i class="fa-solid fa-lock text-gold-500 mr-1"></i> Admin Portal
                    </span>
                    <span class="text-xs text-slate-300">Welcome, <strong>Varun Khera</strong></span>
                </div>
                <h1 class="font-heading font-black text-2xl sm:text-3xl text-white mt-2">
                    Cup2Eat Business Operations Dashboard
                </h1>
            </div>

            <div class="flex items-center gap-3">
                <a href="{{ route('home') }}" class="px-4 py-2 rounded-xl bg-forest-800 text-xs font-bold hover:bg-forest-700 text-slate-200 transition">
                    <i class="fa-solid fa-globe mr-1"></i> View Live Site
                </a>
                <a href="https://wa.me/919818192575" target="_blank" class="px-4 py-2 rounded-xl bg-green-600 text-xs font-bold hover:bg-green-700 text-white transition flex items-center gap-1.5">
                    <i class="fa-brands fa-whatsapp text-sm"></i> WhatsApp Web
                </a>
            </div>
        </div>
    </div>
</section>

<!-- KPI Cards Section -->
<section class="py-8 bg-[#FAF7F2]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
            
            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm">
                <span class="text-[10px] uppercase font-bold text-slate-400">Total Leads</span>
                <div class="font-heading font-black text-2xl text-forest-900 mt-1">
                    {{ $stats['total_inquiries'] }}
                </div>
                <span class="text-[11px] text-slate-500">Inquiries Received</span>
            </div>

            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm">
                <span class="text-[10px] uppercase font-bold text-amber-600">Action Required</span>
                <div class="font-heading font-black text-2xl text-amber-600 mt-1">
                    {{ $stats['new_inquiries'] }}
                </div>
                <span class="text-[11px] text-amber-600 font-semibold">New Uncontacted</span>
            </div>

            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm">
                <span class="text-[10px] uppercase font-bold text-emerald-600">Sample Boxes</span>
                <div class="font-heading font-black text-2xl text-emerald-600 mt-1">
                    {{ $stats['sample_requests'] }}
                </div>
                <span class="text-[11px] text-slate-500">Trial Box Requests</span>
            </div>

            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm">
                <span class="text-[10px] uppercase font-bold text-forest-700">Wholesale Cafes</span>
                <div class="font-heading font-black text-2xl text-forest-700 mt-1">
                    {{ $stats['wholesale_leads'] }}
                </div>
                <span class="text-[11px] text-slate-500">B2B Supply Leads</span>
            </div>

            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm">
                <span class="text-[10px] uppercase font-bold text-slate-400">Order Quotes</span>
                <div class="font-heading font-black text-2xl text-forest-900 mt-1">
                    {{ $stats['total_quotes'] }}
                </div>
                <span class="text-[11px] text-slate-500">Custom Built</span>
            </div>

            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm">
                <span class="text-[10px] uppercase font-bold text-gold-600">Pipeline Value</span>
                <div class="font-heading font-black text-xl text-forest-900 mt-1">
                    ₹{{ number_format($stats['quotes_value']) }}
                </div>
                <span class="text-[11px] text-emerald-600 font-semibold">Quoted Orders</span>
            </div>

        </div>

    </div>
</section>

<!-- Inquiries Management Table -->
<section class="py-6 bg-[#FAF7F2]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden space-y-4">
            
            <div class="p-6 border-b border-slate-100 flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                    <h2 class="font-heading font-black text-xl text-forest-900">
                        Inquiries & Cafe Leads ({{ $inquiries->count() }})
                    </h2>
                    <p class="text-xs text-slate-500 mt-0.5">Manage customer inquiries, update statuses, and launch WhatsApp directly.</p>
                </div>

                <!-- Filters -->
                <div class="flex items-center gap-2 overflow-x-auto">
                    <span class="text-xs text-slate-400 font-bold">Filter:</span>
                    <a href="{{ route('admin.dashboard', ['status' => 'all', 'type' => $typeFilter]) }}"
                       class="px-3 py-1.5 rounded-lg text-xs font-bold {{ $statusFilter === 'all' ? 'bg-forest-900 text-gold-400' : 'bg-slate-100 text-slate-600' }}">
                        All
                    </a>
                    <a href="{{ route('admin.dashboard', ['status' => 'new', 'type' => $typeFilter]) }}"
                       class="px-3 py-1.5 rounded-lg text-xs font-bold {{ $statusFilter === 'new' ? 'bg-amber-600 text-white' : 'bg-slate-100 text-slate-600' }}">
                        New
                    </a>
                    <a href="{{ route('admin.dashboard', ['status' => 'sample_sent', 'type' => $typeFilter]) }}"
                       class="px-3 py-1.5 rounded-lg text-xs font-bold {{ $statusFilter === 'sample_sent' ? 'bg-blue-600 text-white' : 'bg-slate-100 text-slate-600' }}">
                        Sample Sent
                    </a>
                    <a href="{{ route('admin.dashboard', ['status' => 'converted', 'type' => $typeFilter]) }}"
                       class="px-3 py-1.5 rounded-lg text-xs font-bold {{ $statusFilter === 'converted' ? 'bg-emerald-600 text-white' : 'bg-slate-100 text-slate-600' }}">
                        Converted
                    </a>
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs text-slate-700">
                    <thead class="bg-slate-50 uppercase text-[10px] font-bold text-slate-400 border-b border-slate-200">
                        <tr>
                            <th class="py-3 px-6">Customer & Business</th>
                            <th class="py-3 px-6">Phone / WhatsApp</th>
                            <th class="py-3 px-6">Type & Volume</th>
                            <th class="py-3 px-6">Message / Flavors</th>
                            <th class="py-3 px-6">Status & Notes</th>
                            <th class="py-3 px-6 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse($inquiries as $inq)
                            <tr class="hover:bg-slate-50/80">
                                
                                <td class="py-4 px-6">
                                    <div class="font-bold text-forest-900 text-sm">{{ $inq->name }}</div>
                                    <div class="text-[11px] text-slate-500">{{ $inq->city }}</div>
                                    <span class="inline-block mt-1 text-[10px] font-semibold bg-slate-100 text-slate-600 px-2 py-0.5 rounded">
                                        {{ $inq->business_type ?? 'General' }}
                                    </span>
                                </td>

                                <td class="py-4 px-6">
                                    <div class="font-bold text-forest-900">{{ $inq->phone }}</div>
                                    @if($inq->email)
                                        <div class="text-[11px] text-slate-400">{{ $inq->email }}</div>
                                    @endif
                                    
                                    @php
                                        $cleanPhone = preg_replace('/[^0-9]/', '', $inq->phone);
                                        if (strlen($cleanPhone) === 10) $cleanPhone = '91' . $cleanPhone;
                                        $waText = "Hello {$inq->name}! Varun Khera here from Cup2Eat regarding your inquiry for {$inq->business_type}. How can I assist you?";
                                        $waDirect = "https://wa.me/{$cleanPhone}?text=" . urlencode($waText);
                                    @endphp
                                    <a href="{{ $waDirect }}" target="_blank"
                                       class="inline-flex items-center gap-1 text-[11px] font-bold text-green-600 hover:text-green-700 mt-1">
                                        <i class="fa-brands fa-whatsapp"></i> Chat Now
                                    </a>
                                </td>

                                <td class="py-4 px-6">
                                    <span class="text-[10px] font-bold uppercase px-2 py-0.5 rounded
                                        @if($inq->type === 'wholesale') bg-amber-100 text-amber-800
                                        @elseif($inq->type === 'sample_request') bg-emerald-100 text-emerald-800
                                        @elseif($inq->type === 'franchise') bg-purple-100 text-purple-800
                                        @else bg-slate-100 text-slate-700 @endif">
                                        {{ str_replace('_', ' ', $inq->type) }}
                                    </span>
                                    <div class="text-[11px] text-slate-600 font-medium mt-1">{{ $inq->volume_needed ?? 'N/A' }}</div>
                                </td>

                                <td class="py-4 px-6 max-w-xs">
                                    @if($inq->flavor_interest)
                                        <div class="text-[11px] font-semibold text-forest-700">Flavors: {{ $inq->flavor_interest }}</div>
                                    @endif
                                    <p class="text-[11px] text-slate-500 line-clamp-2 mt-0.5">{{ $inq->message ?? 'No additional notes provided' }}</p>
                                </td>

                                <td class="py-4 px-6">
                                    <form action="{{ route('admin.inquiry.update', $inq->id) }}" method="POST" class="space-y-1.5">
                                        @csrf
                                        <select name="status" onchange="this.form.submit()"
                                                class="text-[11px] font-bold rounded-lg border border-slate-300 py-1 px-2
                                                @if($inq->status === 'new') bg-amber-50 text-amber-800
                                                @elseif($inq->status === 'sample_sent') bg-blue-50 text-blue-800
                                                @elseif($inq->status === 'converted') bg-emerald-50 text-emerald-800
                                                @else bg-slate-50 text-slate-700 @endif">
                                            <option value="new" {{ $inq->status === 'new' ? 'selected' : '' }}>New</option>
                                            <option value="contacted" {{ $inq->status === 'contacted' ? 'selected' : '' }}>Contacted</option>
                                            <option value="sample_sent" {{ $inq->status === 'sample_sent' ? 'selected' : '' }}>Sample Sent</option>
                                            <option value="converted" {{ $inq->status === 'converted' ? 'selected' : '' }}>Converted</option>
                                            <option value="closed" {{ $inq->status === 'closed' ? 'selected' : '' }}>Closed</option>
                                        </select>
                                        @if($inq->admin_notes)
                                            <div class="text-[10px] text-slate-400 italic">"{{ $inq->admin_notes }}"</div>
                                        @endif
                                    </form>
                                </td>

                                <td class="py-4 px-6 text-right">
                                    <form action="{{ route('admin.inquiry.delete', $inq->id) }}" method="POST" onsubmit="return confirm('Delete this inquiry?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-slate-400 hover:text-red-600 transition p-1">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </button>
                                    </form>
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="py-8 text-center text-slate-400">
                                    No inquiries found under this filter.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</section>

<!-- Quotes & Custom Orders Table -->
<section class="py-6 pb-16 bg-[#FAF7F2]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden space-y-4">
            
            <div class="p-6 border-b border-slate-100 flex items-center justify-between">
                <div>
                    <h2 class="font-heading font-black text-xl text-forest-900">
                        Recent Quotations & Order Requests
                    </h2>
                    <p class="text-xs text-slate-500 mt-0.5">Orders generated via the online builder.</p>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs text-slate-700">
                    <thead class="bg-slate-50 uppercase text-[10px] font-bold text-slate-400 border-b border-slate-200">
                        <tr>
                            <th class="py-3 px-6">Quote Ref</th>
                            <th class="py-3 px-6">Customer</th>
                            <th class="py-3 px-6">Cups</th>
                            <th class="py-3 px-6">Items Summary</th>
                            <th class="py-3 px-6">Estimated Amount</th>
                            <th class="py-3 px-6">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse($quotes as $q)
                            <tr class="hover:bg-slate-50/80">
                                <td class="py-4 px-6 font-mono font-bold text-forest-900">
                                    <a href="{{ route('order.confirmation', $q->quote_number) }}" target="_blank" class="hover:underline text-forest-700">
                                        #{{ $q->quote_number }}
                                    </a>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="font-bold text-forest-900">{{ $q->customer_name }}</div>
                                    <div class="text-[11px] text-slate-500">{{ $q->city }} • {{ $q->phone }}</div>
                                </td>
                                <td class="py-4 px-6 font-bold text-forest-900">
                                    {{ $q->total_cups }} Cups
                                </td>
                                <td class="py-4 px-6 max-w-xs">
                                    @if(is_array($q->items_json))
                                        <div class="space-y-0.5 text-[11px]">
                                            @foreach($q->items_json as $it)
                                                <div>{{ $it['name'] ?? '' }} x {{ $it['quantity'] ?? 1 }}</div>
                                            @endforeach
                                        </div>
                                    @endif
                                </td>
                                <td class="py-4 px-6 font-heading font-black text-sm text-forest-900">
                                    ₹{{ number_format($q->estimated_total) }}
                                </td>
                                <td class="py-4 px-6">
                                    <form action="{{ route('admin.quote.update', $q->id) }}" method="POST">
                                        @csrf
                                        <select name="status" onchange="this.form.submit()"
                                                class="text-[11px] font-bold rounded-lg border border-slate-300 py-1 px-2
                                                @if($q->status === 'pending') bg-amber-50 text-amber-800
                                                @elseif($q->status === 'finalized') bg-emerald-50 text-emerald-800
                                                @else bg-slate-50 text-slate-700 @endif">
                                            <option value="pending" {{ $q->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="contacted" {{ $q->status === 'contacted' ? 'selected' : '' }}>Contacted</option>
                                            <option value="finalized" {{ $q->status === 'finalized' ? 'selected' : '' }}>Finalized</option>
                                            <option value="cancelled" {{ $q->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                        </select>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="py-8 text-center text-slate-400">
                                    No custom quotes generated yet.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</section>

@endsection
