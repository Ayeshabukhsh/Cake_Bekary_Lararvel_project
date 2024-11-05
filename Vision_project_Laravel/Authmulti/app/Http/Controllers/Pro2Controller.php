<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class Pro2Controller extends Controller
{
    //
    public function productList()
    {
        $products = Product::all();

        return view('products', compact('products'));
    }
}
