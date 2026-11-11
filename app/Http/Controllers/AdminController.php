<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Models\Product;
use App\Models\Quote;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $statusFilter = $request->query('status', 'all');
        $typeFilter = $request->query('type', 'all');

        $inquiriesQuery = Inquiry::orderBy('created_at', 'desc');

        if ($statusFilter !== 'all') {
            $inquiriesQuery->where('status', $statusFilter);
        }

        if ($typeFilter !== 'all') {
            $inquiriesQuery->where('type', $typeFilter);
        }

        $inquiries = $inquiriesQuery->get();
        $quotes = Quote::orderBy('created_at', 'desc')->take(10)->get();
        $products = Product::all();

        // Stats
        $stats = [
            'total_inquiries' => Inquiry::count(),
            'new_inquiries' => Inquiry::where('status', 'new')->count(),
            'sample_requests' => Inquiry::where('type', 'sample_request')->count(),
            'wholesale_leads' => Inquiry::where('type', 'wholesale')->count(),
            'total_quotes' => Quote::count(),
            'quotes_value' => Quote::sum('estimated_total'),
            'total_products' => Product::count(),
        ];

        return view('admin.dashboard', compact('inquiries', 'quotes', 'products', 'stats', 'statusFilter', 'typeFilter'));
    }

    public function updateInquiryStatus(Request $request, $id)
    {
        $inquiry = Inquiry::findOrFail($id);
        $validated = $request->validate([
            'status' => 'required|in:new,contacted,sample_sent,converted,closed',
            'admin_notes' => 'nullable|string|max:500',
        ]);

        $inquiry->update($validated);

        return redirect()->back()->with('success', "Inquiry for {$inquiry->name} updated to " . strtoupper($inquiry->status) . "!");
    }

    public function updateQuoteStatus(Request $request, $id)
    {
        $quote = Quote::findOrFail($id);
        $validated = $request->validate([
            'status' => 'required|in:pending,contacted,finalized,cancelled',
        ]);

        $quote->update($validated);

        return redirect()->back()->with('success', "Quote #{$quote->quote_number} marked as {$quote->status}!");
    }

    public function deleteInquiry($id)
    {
        $inquiry = Inquiry::findOrFail($id);
        $inquiry->delete();

        return redirect()->back()->with('success', 'Inquiry deleted successfully.');
    }
}
