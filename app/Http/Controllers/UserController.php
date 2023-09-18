<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   // dashboard
    public function index(){
        return view('admin.pages.dashboard');
    }

    //loout system

    public function logout(){

        Auth::guard('web')->logout();

       return redirect()-> route('admin.login');
    }
 
}
