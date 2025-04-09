<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;



class ProductController extends Controller
{
    public function createProduct(Request $request)
    {
        $validated = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required',
            'description' => 'nullable|string',
            'image*' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ],[
            'name.required' => 'Поле "Название" обязательно для заполнения',
            'price.required' => 'Поле "Цена" обязательно для заполнения',
            'category.required' => 'Поле "Категория" обязательно для заполнения',
            'image.image' => 'Поле "Изображение" должно быть изображением',
            'image.mimes' => 'Поле "Изображение" должно быть в формате jpeg, png, jpg, gif',
            'description.string' => 'Поле "Описание" должно быть строкой',
        ]);

        $product=Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'category_id' => $request->input('category_id'),
        ]);

        // загрузка картинки
        if ($request->hasFile('image')) {
            $name = $request->input('name');
            $name = Str::slug($name);
            foreach ($request->file('image') as $image) {
                $img = $image->store("images/{$name}", 'public');
                $url = ['path' => $img, 'product_id' => $product->id];
                Image::create($url);
            }
        }


        return response()->json(['success' => true]);
    }
}
