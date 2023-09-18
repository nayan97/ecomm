<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::group(['middleware' => 'users.redirect'],function (){
    Route::get('/login',[AdminController::class, 'login'])->name('admin.login');
    Route::post('/login',[AdminController::class, 'adminLoginSystem']); 
});

Route::group(['middleware' => 'users'],function (){
    Route::get('/logout',[UserController::class, 'logout'])->name('admin.logout');
    
    Route::get('/',[UserController::class, 'index'])->name('admin.dashboard');
    
    
});

