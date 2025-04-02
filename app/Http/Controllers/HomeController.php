<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categorys = Category::orderBy('name', 'ASC')->get();
        $products = Product::orderBy('name', 'ASC')->limit(8)->get();
        $randomProducts = Product::where('sale_price', '<', 70)
        ->inRandomOrder()
        ->limit(7)
        ->get();
        return view('index', compact('categorys','products','randomProducts'));
    }
}
