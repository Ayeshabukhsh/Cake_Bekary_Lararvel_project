<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AgentdetailController;
use App\Http\Controllers\CourieragentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProdController;
use App\Http\Controllers\DashboardController;


use App\Http\Controllers\CartController;
use App\Http\Controllers\Pro2Controller;







use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('prod', [Pro2Controller::class, 'productList'])->name('products.list');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

Route::get('thanks/', function () {
    return view('thanks');
});
// Themee
Route::get('/index', function () {
    return view('frontend.index');
});
Route::get('/about', function () {
    return view('frontend.about');
});
//dropdown Elements

Route::get('/menu', function () {
    return view('frontend.menu');
});
Route::get('/service', function () {
    return view('frontend.service');
});
Route::get('/cartt', function () {
    return view('frontend.cartt');
});
Route::get('/orderform', function () {
    return view('admin.orderform');
});

//pages dropdwon



Route::get('/gallery', function () {
    return view('frontend.gallery');
});
Route::get('/contactus', function () {
    return view('frontend.contactus');
});
//single page



//Dashboard

Route::get('/dashboard', function () {
    return view('dashboard');
    
    
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin/dashboard',function () {
    return view ('admin.dashboard');
})->middleware(['auth:admin','verified'])->name('admin.dashboard');

Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/profile', [AdminProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/admin/profile', [AdminProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/admin /profile', [AdminProfileController::class, 'destroy'])->name('admin.profile.destroy');
//   Product Controllers

    // Route::get('products',[ProductController::class,'create'])->name('products.create');
    // Route::post('product',[ProductController::class,'store'])->name('products.store');
    // Route::get('index',[ProductController::class,'index'])->name('products.index');
    // Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

    //Courier Agent Crud Controller
    // Route::resource('agent',AgentdetailController::class);
    Route::resource('categories',CategoryController::class);


    //Courier Crud Controller
    // Route::resource('ca',CategoryController::class);

 

    //Contact
    Route::resource('contact',ContactController::class);
    
    //Forms
    Route::resource('form',FormController::class);

    Route::resource('index',OrderController::class);






});

require __DIR__.'/adminauth.php';


// Route::get('products',[ProductController::class,'create'])->name('products.create');
// Route::post('product',[ProductController::class,'store'])->name('products.store');
// Route::get('index',[ProductController::class,'index'])->name('products.index');
// Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

// Route::get('products',[ProdController::class,'create'])->name('products.create');
// Route::post('product',[ProdController::class,'store'])->name('products.store');
// Route::get('index',[ProdController::class,'index'])->name('products.index');
// Route::delete('/products/{product}', [ProdController::class, 'destroy'])->name('products.destroy');


Route::resource('products',ProductController::class);

Route::get('dashboard2',[DashboardController::class,'index'])->name('dashboard.index');