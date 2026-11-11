<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|max:100',
            'city' => 'nullable|string|max:100',
            'subject' => 'nullable|string|max:150',
            'message' => 'required|string|max:1500',
        ]);

        Inquiry::create([
            'type' => 'contact',
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'] ?? null,
            'city' => $validated['city'] ?? 'India',
            'business_type' => 'General Inquiry',
            'message' => (!empty($validated['subject']) ? "Subject: {$validated['subject']}\n" : "") . $validated['message'],
            'status' => 'new',
        ]);

        return redirect()->back()->with('success', 'Thank you! Your message has been sent. Founder Varun Khera and the Cup2Eat team will reach back to you shortly.');
    }
}
