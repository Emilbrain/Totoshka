<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function indexView()
    {
        $products = Product::orderBy('created_at', 'desc')
            ->take(4)
            ->get();
        return view('pages.index', compact('products'));
    }

    public function catalogView(Request $request)
    {

        $categories = Category::all();

        $products = Product::query();

        if ($request->has('category') && $request->category) {
            $products->where('category_id', $request->category);
        }

        $products = $products->latest()->paginate(12); // или ->get()

        return view('pages.catalog', compact('products', 'categories'));

    }

    public function productView($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.product', compact('product'));
    }
    public function aboutView()
    {
        return view('pages.about');
    }
    public function contactView()
    {
        return view('pages.contact');
    }
    public function profileView()
    {
        $orders = Order::where('user_id', auth()->id())->get();
        return view('pages.profile' , compact('orders'));
    }
    public function basketView()
    {
        $baskets = Basket::where('user_id', auth()->id())->get();
        $total = 0 ;
        foreach ($baskets as $item) {
            $total = $total + $item->product->price * $item->quantity;
        }
        return view('pages.basket', compact('baskets', 'total'));
    }

    public function adminPanel()
    {
        return view('admin.admin');
    }
}

