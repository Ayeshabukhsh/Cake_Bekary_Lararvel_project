<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $products = Product::all();
        $products = Product::paginate(4);
        return view('admin.index', compact('products'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('admin.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'image' => 'required',
            'category' => 'required',
        ]);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $profileImage;
        }
        
        $input['category_id'] = $request->input('category'); // Assign the selected category to category_id
        
        Product::create($input);
        
        return redirect()->route('products.index')
                         ->with('success', 'Product created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
        // return view('productCardView',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        // return view('productedit',compact('product'));  
        $categories = Category::all();
        return view('admin.productedit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category' => 'required',
        ]);
    
        $input = $request->except('image', 'category'); // Exclude image and category from the input for now
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $profileImage;
        }
    
        $input['category_id'] = $request->input('category'); // Update the category_id
    
        $product->update($input);
    
        return redirect()->route('products.index')
                        ->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
       return redirect()->route('products.index');
    }
}
