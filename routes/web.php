<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\ProductController;

Route::group(['middleware' => 'users.redirect'],function (){
    Route::get('/login',[AdminController::class, 'login'])->name('admin.login');
    Route::post('/login',[AdminController::class, 'adminLoginSystem']); 
});

// home page routes

Route::get('/',[HomeController::class,'index'])->name('home.page');

Route::get('/singleproduct/{id}',[HomeController::class,'shop']);
Route::get('/search',[HomeController::class,'search']);



// middleware routes
Route::group(['middleware' => 'users'],function (){
    
    //products routes
    Route::post('/add_cart', [ProductController::class,'addToCart']);
    Route::get('/allcart',[ProductController::class, 'showCart']);
    Route::get('/removecart/{id}',[ProductController::class, 'removeCart']);
    Route::get('/checkout',[ProductController::class, 'checkout']);
   
    //other routes for administration

    Route::resource('products', ProductController::class);

    Route::get('/logout',[UserController::class, 'logout'])->name('admin.logout');
    
    Route::get('/adminpage',[UserController::class, 'index'])->name('admin.dashboard');
    
    
});

