<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Models\Product;
use Illuminate\Http\Request;

class WholesaleController extends Controller
{
    public function index()
    {
        $wholesaleProducts = Product::where('category', 'wholesale')->get();
        $coldProducts = Product::where('category', 'cold_drinks')->get();

        return view('pages.wholesale', compact('wholesaleProducts', 'coldProducts'));
    }

    public function storeInquiry(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|max:100',
            'city' => 'required|string|max:100',
            'business_type' => 'required|string|max:100',
            'volume_needed' => 'required|string|max:100',
            'flavor_interest' => 'nullable|string|max:255',
            'message' => 'nullable|string|max:1000',
            'is_sample_box' => 'nullable|boolean',
        ]);

        $type = $request->boolean('is_sample_box') ? 'sample_request' : 'wholesale';

        $inquiry = Inquiry::create([
            'type' => $type,
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'] ?? null,
            'city' => $validated['city'],
            'business_type' => $validated['business_type'],
            'volume_needed' => $validated['volume_needed'],
            'flavor_interest' => $validated['flavor_interest'] ?? 'All Flavours',
            'message' => $validated['message'] ?? null,
            'status' => 'new',
        ]);

        // Build WhatsApp text
        $waMessage = "Hello Varun! I'm {$validated['name']} from {$validated['city']} ({$validated['business_type']}).\n"
            . "I'm interested in Cup2Eat: " . ($type === 'sample_request' ? "SAMPLE BOX REQUEST" : "WHOLESALE SUPPLY") . ".\n"
            . "Est. Monthly Volume: {$validated['volume_needed']}\n"
            . "Phone: {$validated['phone']}\n"
            . (!empty($validated['flavor_interest']) ? "Preferred Flavors: {$validated['flavor_interest']}\n" : "")
            . "Please send me catalog & wholesale rates!";

        $waUrl = "https://wa.me/919818192575?text=" . urlencode($waMessage);

        return redirect()->back()
            ->with('success', 'Your inquiry has been received! Our team will contact you shortly.')
            ->with('whatsapp_redirect', $waUrl);
    }
}
