<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::group(['middleware' => 'users.redirect'],function (){
    Route::get('/login',[AdminController::class, 'login'])->name('admin.login');
    Route::post('/login',[AdminController::class, 'adminLoginSystem']); 
});

// home page routes

Route::get('/',[HomeController::class,'index'])->name('home.page');

// middleware routes
Route::group(['middleware' => 'users'],function (){
    Route::get('/logout',[UserController::class, 'logout'])->name('admin.logout');
    
    Route::get('/adminpage',[UserController::class, 'index'])->name('admin.dashboard');
    
    
});

