<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
 

    public function login(){
        return view('admin.pages.login');
    }
//admin.pages.login

    // public function loginpro(Request $request)
    // {
    //     $user = User::where(['email'=>$request->email]) ->first();

    //     if (!$user || !Hash::check($request->password,$user->password)) {
    //         return "invalid user or password";
    //     }else {
    //         return redirect('/');
    //     }


    // }

        /**
     * Show login System 
     */
    public function adminLoginSystem(Request $request)
    {
        $this -> validate($request , [
            'email'     => 'required|email',
            'password'     => 'required'
        ]);

        if( Auth::guard('web') -> attempt([ 'email' => $request -> email , 'password' => $request -> password ]) ){
            if (Auth:: user()->user_type == '0'){
                return redirect() -> route('home.page');
            }else{

                return redirect() -> route('admin.dashboard');
            }

        }else {
            return redirect() -> route('admin.login') -> with('error', 'Wrong Email or Password');
        }
    }

    /**
     * register show
     */

     public function registerSystem() 
     {
        return view('admin.pages.register');
     }

    /**
     * register system
     */


     public function register(Request $request){

        $user = new User();

        $user -> name = $request-> name;
        $user -> email = $request-> email;
        $user -> cell = $request-> cell;
        $user -> password = Hash::make($request-> password);

        $user->save();

        return redirect('/login');

     }

}
