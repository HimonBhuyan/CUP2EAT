# 🍵 CUP2EAT — Eat Your Drink! 🍷😋

> **Revolutionizing the way India drinks Chai & Coffee.**  
> 100% Edible, crispy, leak-proof wafer cups coated with gourmet chocolate, cardamom, vanilla, and mango. Zero plastic. Zero wax-lined paper waste. 100% crunch and pure delight.

[![License](https://img.shields.io/badge/license-MIT-emerald.svg)](LICENSE)
[![FSSAI Certified](https://img.shields.io/badge/FSSAI-Registered%20Safe-gold.svg)](https://instagram.com/cup2eat)
[![100% Pure Veg](https://img.shields.io/badge/Dietary-100%25%20Pure%20Veg%20(Green%20Dot)-green.svg)](https://instagram.com/cup2eat)
[![Leak Proof](https://img.shields.io/badge/Performance-40%2B%20Mins%20Leak--Proof%20(Up%20to%2085°C)-amber.svg)](https://instagram.com/cup2eat)
[![Pan-India Delivery](https://img.shields.io/badge/Logistics-Pan--India%20Express%20Dispatch-blue.svg)](https://instagram.com/cup2eat)
[![PHP](https://img.shields.io/badge/PHP-8.2%2B-777BB4.svg?logo=php&logoColor=white)](https://php.net)
[![Laravel](https://img.shields.io/badge/Laravel-11%2F12%2F13-FF2D20.svg?logo=laravel&logoColor=white)](https://laravel.com)

---

## 🌟 About The Brand

Founded by **Varun Khera**, **Cup2Eat** was created to combat the environmental crisis of disposable cups. While traditional single-use "paper cups" are lined with petroleum-based polyethylene plastic (which leaches over 25,000 microplastics per hot beverage and never decomposes in soil), Cup2Eat turns the packaging into an irresistible gourmet snack!

- **Founder**: Varun Khera
- **Headquarters**: Ghaziabad / Delhi NCR, India (Pan-India Express Dispatch)
- **Official Instagram**: [@cup2eat](https://instagram.com/cup2eat) (116+ posts, 1,160+ community members)
- **Wholesale & Hotline**: `+91 98181 92575`
- **Recognition**: Featured at **Startup Mahakumbh**, Bharat Innova, and IPEM Spectra Award Winner.

---

## ✨ Key Features & Experience

### 1. ☕ Gourmet 4K Visual Ambiance
- High-resolution 4K food photography showcasing artisanal latte art, steaming kadak chai, cold coffee frappes, and master wholesale shipping cartons.
- Appetite-stimulating dark emerald, roasted cocoa, and warm golden amber color palette.

### 2. ⚡ Infinite 60fps Marquee Ticker
- GPU hardware-accelerated CSS marquee delivering continuous real-time brand highlights:
  - *Trending Slogan*: **"EAT YOUR DRINK 🍷😋"**
  - *Leak-Proof Guarantee*: **40+ Mins Hot & Cold up to 85°C**
  - *Certifications*: **FSSAI Licensed & 100% Pure Veg**
  - *Pan-India Reach*: Mumbai, Ahmedabad, Gurugram, Delhi NCR, Odisha & Pan-India.

### 3. 🛍️ Slide-Out Interactive Cart Drawer
- Full-bleed native mobile experience with slide-over drawer on desktop.
- Real-time environmental impact badge displaying the exact number of plastic cups eliminated by the user's order.
- One-click checkout integration directly into WhatsApp.

### 4. 📊 Interactive Cafe ROI & Green Impact Calculator
- Live slider allowing cafe and restaurant owners to calculate daily beverage footfall, monthly plastic waste eliminated, and optimal wholesale carton quantities.

### 5. 🛠️ Custom Order & Quotation Builder (`/order`)
- Step-by-step configurator to mix and match flavor trays, wholesale cartons, and retail packs.
- Generates itemized quotations with free Pan-India doorstep delivery and 1-click WhatsApp sync.

### 6. 💼 B2B Wholesale & Cafe Trial Portal (`/wholesale`)
- Direct factory pricing (`₹3,999` for 396-cup Master Cartons ~ ₹10/cup).
- Sample box trial request engine with automated WhatsApp routing.

### 7. 🛡️ Founder & Admin Control Center (`/admin`)
- Operations CRM to monitor new inquiries, sample box dispatches, wholesale conversions, and quotation values.
- One-click direct WhatsApp chat launcher pre-formatted for each customer lead.

### 8. 📱 100% Mobile & Touch-First Responsive
- Viewport anti-wobble protection with `overflow-x-hidden`.
- Safe tap targets (min 44px–48px) and iOS Safari auto-zoom prevention across all forms.
- Dynamic floating mobile order summary bar for seamless checkout on smartphones.

---

## 🛠️ Tech Stack

- **Backend**: PHP 8.2+ • Laravel Framework (Eloquent ORM, Blade Templating, Migration & Seeding engine)
- **Frontend**: Tailwind CSS (JIT Utility Architecture) • Alpine.js (Reactive Client State) • HTML5 Canvas
- **Typography & Icons**: Playfair Display (Luxury Editorial Serif) • Plus Jakarta Sans • Font Awesome 6 Pro Icons
- **Database**: SQLite (Zero-config local development) / MySQL compatible
- **Integrations**: WhatsApp Business Click-to-Chat API • FSSAI Food Hygiene Protocols

---

## 🚀 Getting Started

### Prerequisites
- PHP `>= 8.2`
- Composer `>= 2.0`
- SQLite or MySQL

### 1. Clone the repository
```bash
git clone https://github.com/HimonBhuyan/CUP2EAT.git
cd CUP2EAT
```

### 2. Install dependencies
```bash
composer install
```

### 3. Setup environment configuration
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Run migrations & seed products
```bash
php artisan migrate --seed
```
This automatically populates the database with:
- 100ml Dark Chocolate Wafer Cups
- Royal Cardamom (Elaichi) Chai Cups
- 150ml Cold Coffee & Milkshake Glasses
- French Vanilla Espresso Cups
- Strawberry Dessert Cups
- Wholesale 396-Cup Master Mix Cartons

### 5. Launch the local development server
```bash
php artisan serve --port=8000
```
Open your browser at [http://localhost:8000](http://localhost:8000).

---

## 📁 Project Structure

```
Cup2Eat/
├── app/
│   ├── Http/Controllers/
│   │   ├── HomeController.php          # Homepage & ROI logic
│   │   ├── ProductController.php       # Menu & product detail routing
│   │   ├── WholesaleController.php     # B2B inquiry & sample box processing
│   │   ├── OrderBuilderController.php  # Interactive quotation generator
│   │   └── AdminDashboardController.php# Founder CRM & lead management
│   └── Models/
│       ├── Product.php                 # Cup catalog & specifications
│       ├── Inquiry.php                 # B2B leads & sample box requests
│       └── Quote.php                   # Order builder quotations
├── database/
│   ├── migrations/                     # Products, inquiries, quotes schemas
│   └── seeders/ProductSeeder.php       # 4K seeded menu catalog
├── public/
│   ├── images/brand/                   # 4K photography & logo assets
│   └── js/cup2eat.js                   # 60fps canvas particles & live glow
├── resources/views/
│   ├── layouts/app.blade.php           # Sticky header, marquee styles, cart drawer
│   ├── pages/
│   │   ├── home.blade.php              # Hero, marquee, ROI calculator, FAQ
│   │   ├── wholesale.blade.php         # B2B portal & trial request form
│   │   ├── order.blade.php             # Custom order builder
│   │   ├── about.blade.php             # Founder story & mission
│   │   ├── contact.blade.php           # Contact hotline & inquiry form
│   │   └── products/                   # Menu index and single product views
│   └── admin/dashboard.blade.php       # Founder control center
└── routes/web.php                      # Application routes
```

---

## 📞 Contact & Inquiries

- **Founder**: Varun Khera
- **WhatsApp / Phone**: [+91 98181 92575](https://wa.me/919818192575)
- **Instagram**: [@cup2eat](https://instagram.com/cup2eat)
- **Email**: `orders@cup2eat.com`

---

*Made with ❤️ for a cleaner, greener, zero-waste India.*
