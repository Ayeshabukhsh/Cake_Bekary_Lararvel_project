<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProdController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('admin.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'cat' => 'required',
        ]);

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image,
            'category_id' => $request->cat,
        ]);

        return redirect()->route('products.create')->with('success', 'Product inserted successfully.');
   
    }

    public function index()
{
    $products = Product::all();
    return view('index', compact('products'));
}

public function destroy(Product $product)
{
    $product->delete();

    return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
}

}
