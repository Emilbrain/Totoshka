<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminView()
    {
        return view('admin.pages.admin-main');
    }
    public function adminCatalog()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('admin.pages.admin-catalog', compact('categories', 'products'));
    }
    public function adminCategory()
    {
        $categories = Category::all();
        return view('admin.pages.admin-category', compact('categories'));
    }
}
