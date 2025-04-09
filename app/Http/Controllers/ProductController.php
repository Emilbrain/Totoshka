<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class ProductController extends Controller
{
    public function createProduct(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required',
            'description' => 'nullable|string',
            'image*' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ], [
            'name.required' => 'Поле "Название" обязательно для заполнения',
            'price.required' => 'Поле "Цена" обязательно для заполнения',
            'category.required' => 'Поле "Категория" обязательно для заполнения',
            'image.image' => 'Поле "Изображение" должно быть изображением',
            'image.mimes' => 'Поле "Изображение" должно быть в формате jpeg, png, jpg, gif',
            'description.string' => 'Поле "Описание" должно быть строкой',
        ]);

        $product =  Product::create([
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

    public function updateProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $validated = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required',
            'description' => 'nullable|string',
            'image*' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ], [
            'name.required' => 'Поле "Название" обязательно для заполнения',
            'price.required' => 'Поле "Цена" обязательно для заполнения',
            'category.required' => 'Поле "Категория" обязательно для заполнения',
            'image.image' => 'Поле "Изображение" должно быть изображением',
            'image.mimes' => 'Поле "Изображение" должно быть в формате jpeg, png, jpg, gif',
            'description.string' => 'Поле "Описание" должно быть строкой',
        ]);

        $product -> update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'category_id' => $request->input('category_id'),
        ]);

        // загрузка картинки
        if ($request->hasFile('image')) {
            if($product->images){
                foreach ( $product->images as $image ){
                    Storage::disk('public')->delete($image->path);
                    $image->delete();
                }
            }
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

    public function deleteProduct($id)
    {

        $product = Product::findOrFail($id);
        $name = $product ->name;
        $name = Str::slug($name);
        if($product->images){
            storage::disk('public')->deleteDirectory("images/{$name}");
            foreach ( $product->images as $image ){
                $image->delete();
            }
        }
        $product->delete();

        return redirect()->back();
    }
}
