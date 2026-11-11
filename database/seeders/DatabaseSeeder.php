<?php

namespace Database\Seeders;

use App\Models\Inquiry;
use App\Models\Quote;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(ProductSeeder::class);

        // Seed realistic inquiries based on Instagram orders & delivery highlights
        Inquiry::create([
            'type' => 'wholesale',
            'name' => 'Aditya Malhotra',
            'phone' => '+91 98210 44521',
            'email' => 'aditya@brewcraftcafe.in',
            'city' => 'Mumbai, Bandra West',
            'business_type' => 'Specialty Cafe & Roastery',
            'volume_needed' => '10-20 boxes / month (2,000-4,000 cups)',
            'flavor_interest' => 'Chocolate Coated, Elaichi',
            'message' => 'Loved the Instagram reels! We want to introduce edible cups for our signature cappuccino and cold brew. Need wholesale pricing for Mumbai shipment.',
            'status' => 'sample_sent',
            'admin_notes' => 'Sample pack dispatched via BlueDart on Monday.',
        ]);

        Inquiry::create([
            'type' => 'sample_request',
            'name' => 'Pooja Deshmukh',
            'phone' => '+91 97654 32189',
            'email' => 'pooja.weddings@gmail.com',
            'city' => 'Ahmedabad, Gujarat',
            'business_type' => 'Wedding & Event Catering',
            'volume_needed' => '500-1000 cups per event',
            'flavor_interest' => 'Cardamom Elaichi, Dark Chocolate, Strawberry',
            'message' => 'We have a royal destination wedding coming up next month and want eco-friendly edible cups for our midnight chai and dessert counter.',
            'status' => 'new',
            'admin_notes' => 'Call to discuss sample box selection.',
        ]);

        Inquiry::create([
            'type' => 'franchise',
            'name' => 'Rohan Sharma',
            'phone' => '+91 99112 34567',
            'email' => 'rohan.sharma@techpark.com',
            'city' => 'Gurugram, Cyber City',
            'business_type' => 'Corporate IT Cafeteria',
            'volume_needed' => '20+ boxes / month (5,000+ cups)',
            'flavor_interest' => 'Mix Flavours (Vanilla, Elaichi, Chocolate)',
            'message' => 'We are running a zero-waste campaign across our 3 campus food courts. Please provide bulk quotes and FSSAI certificate.',
            'status' => 'contacted',
            'admin_notes' => 'Varun had a call. Sending custom quotation with GST.',
        ]);

        // Seed a sample quotation
        Quote::create([
            'quote_number' => 'C2E-2026-1001',
            'customer_name' => 'Dark Empire Cafe',
            'phone' => '+91 98110 56789',
            'email' => 'darkempire@gmail.com',
            'city' => 'Ghaziabad, Uttar Pradesh',
            'business_type' => 'Cafe / Kiosk',
            'items_json' => [
                ['name' => 'Wholesale Mega Carton (396 Cups)', 'qty' => 2, 'price' => 3999, 'total' => 7998],
                ['name' => '100ml CC Premium Chocolate Coated Cups (200 Pcs)', 'qty' => 1, 'price' => 3200, 'total' => 3200],
            ],
            'total_cups' => 992,
            'estimated_total' => 11198.00,
            'notes' => 'Requires delivery to RDC Ghaziabad store.',
            'status' => 'finalized',
        ]);
    }
}
