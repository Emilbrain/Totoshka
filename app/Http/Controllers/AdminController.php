<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminView()
    {
        $productCount = Product::count();
        $userCount = User::count();
        $orderCount = Order::count('status','В обработке ');
        return view('admin.pages.admin-main', compact('productCount', 'userCount', 'orderCount') );
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
    public function adminUser()
    {
        $users = User::all();
        return view('admin.pages.admin-user', compact('users'));
    }
    public function adminOrders()
    {
        $orders = Order::all();
        return view('admin.pages.admin-orders', compact('orders'));
    }
}
