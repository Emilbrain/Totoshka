<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Psy\Util\Str;

class CategoryController extends Controller
{
    public function createCategory(Request $request)
    {
        $validated = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
        ],[
            'name.required' => 'Название категории обязательно',
            'name.string' => 'Название категории должно быть строкой',
            'name.max' => 'Название категории не должно превышать 255 символов',
        ]);

        Category::create([
            'name' => $request->name,
        ]);


        return response()->json(['success' => true]);
    }
    public function updateCategory(Request $request, $id )
    {
        $category = Category::findOrFail($id);

        $validated = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
        ],[
            'name.required' => 'Название категории обязательно',
            'name.string' => 'Название категории должно быть строкой',
            'name.max' => 'Название категории не должно превышать 255 символов',
        ]);

        $category->name = $request->name;
        $category->save();

        return response()->json(['success' => true]);
    }

    public function deleteCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->back();
    }
}
