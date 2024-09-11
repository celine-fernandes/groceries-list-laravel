<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $categoryCount = Category::count();
        $productCount = Product::count();
        $revenue = Product::sum('price'); 
        $recentProducts = Product::with('category')->latest()->limit(5)->get();

        return view('dashboard', compact('categoryCount', 'productCount', 'revenue', 'recentProducts'));
    }
}

