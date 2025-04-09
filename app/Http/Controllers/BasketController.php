<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basketAdd( $productId)
    {
        $basket = Basket::where('product_id', $productId)->where('user_id', auth()->id())->first();
        if($basket){
            $basket->quantity++;
            $basket->save();
        }else{
            Basket::create([
                'user_id' => auth()->id(),
                'product_id' => $productId,
                'quantity' => 1
            ]);
        }

        return redirect()->back();
    }

    public function addCount($basketId)
    {
        $basket = Basket::findOrFail($basketId);
        $basket->quantity++;
        $basket->save();

        return redirect()->back();
    }
    public function removeCount($basketId)
    {
        $basket = Basket::findOrFail($basketId);
        if($basket->quantity > 1){
            $basket->quantity--;
            $basket->save();
        }else{
            $basket->delete();
        }
        return redirect()->back();
    }
    public function basketRemove($basketId)
    {
        $basket = Basket::findOrFail($basketId);
        if($basket){
            $basket->delete();
        }

        return redirect()->back();
    }


}
