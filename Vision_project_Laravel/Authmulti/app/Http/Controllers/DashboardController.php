<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $categoryCount = Category::count();
        $productCount = Product::count();
        $userCount = User::count();

        return view('admin.dashboardview', compact('categoryCount', 'productCount','userCount'));
    }
}
