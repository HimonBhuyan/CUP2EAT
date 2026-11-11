<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::where('is_featured', true)->take(6)->get();
        $bestsellers = Product::where('is_bestseller', true)->get();
        $wholesalePacks = Product::where('category', 'wholesale')->take(3)->get();
        $retailPacks = Product::where('category', 'retail')->take(4)->get();

        return view('pages.home', compact('featuredProducts', 'bestsellers', 'wholesalePacks', 'retailPacks'));
    }
}
