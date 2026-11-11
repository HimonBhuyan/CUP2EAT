<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function index()
    {
        $products = Product::where('in_stock', true)->get();
        return view('pages.order', compact('products'));
    }

    public function storeQuote(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|max:100',
            'city' => 'required|string|max:100',
            'business_type' => 'nullable|string|max:100',
            'items' => 'required|array|min:1',
            'items.*.product_id' => 'required|exists:products,id',
            'items.*.quantity' => 'required|integer|min:1',
            'notes' => 'nullable|string|max:500',
        ]);

        $itemDetails = [];
        $totalCups = 0;
        $grandTotal = 0;

        foreach ($validated['items'] as $item) {
            $product = Product::find($item['product_id']);
            if (!$product) continue;

            $qty = (int)$item['quantity'];
            $lineTotal = $product->price * $qty;
            $grandTotal += $lineTotal;

            // Extract numeric count if available
            preg_match('/(\d+)/', $product->piece_count, $matches);
            $cupsPerPack = isset($matches[1]) ? (int)$matches[1] : 1;
            $totalCups += ($cupsPerPack * $qty);

            $itemDetails[] = [
                'id' => $product->id,
                'name' => $product->name,
                'flavor' => $product->flavor,
                'piece_count' => $product->piece_count,
                'price' => (float)$product->price,
                'quantity' => $qty,
                'line_total' => (float)$lineTotal,
            ];
        }

        $quoteNumber = 'C2E-' . date('Y') . '-' . strtoupper(Str::random(5));

        $quote = Quote::create([
            'quote_number' => $quoteNumber,
            'customer_name' => $validated['customer_name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'] ?? null,
            'city' => $validated['city'],
            'business_type' => $validated['business_type'] ?? 'Personal / Retail',
            'items_json' => $itemDetails,
            'total_cups' => $totalCups,
            'estimated_total' => $grandTotal,
            'notes' => $validated['notes'] ?? null,
            'status' => 'pending',
        ]);

        // Build WhatsApp text
        $msg = "🌟 *NEW CUP2EAT ORDER REQUEST* 🌟\n";
        $msg .= "Order Reference: *#{$quoteNumber}*\n";
        $msg .= "Name: {$validated['customer_name']}\n";
        $msg .= "Phone: {$validated['phone']}\n";
        $msg .= "Delivery City: {$validated['city']}\n\n";
        $msg .= "*Items Selected:*\n";

        foreach ($itemDetails as $i => $it) {
            $msg .= ($i + 1) . ". {$it['name']} ({$it['piece_count']}) x {$it['quantity']} = ₹" . number_format($it['line_total']) . "\n";
        }

        $msg .= "\n*Total Estimated Amount: ₹" . number_format($grandTotal) . "*\n";
        if (!empty($validated['notes'])) {
            $msg .= "Special Note: {$validated['notes']}\n";
        }
        $msg .= "\nPlease confirm stock availability and shipping dispatch details!";

        $waUrl = "https://wa.me/919818192575?text=" . urlencode($msg);

        return redirect()->route('order.confirmation', ['quote_number' => $quoteNumber])
            ->with('success', 'Order created successfully!')
            ->with('whatsapp_url', $waUrl);
    }

    public function confirmation($quote_number)
    {
        $quote = Quote::where('quote_number', $quote_number)->firstOrFail();
        return view('pages.order-confirmation', compact('quote'));
    }
}
