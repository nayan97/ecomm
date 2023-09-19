<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        $data =Product::all();
        return view('frontend.pages.index', [
            'data' => $data
        ]);
    }



    public function shop($id){

        $data =Product::findOrFail($id);
        return view('frontend.pages.shop', [
            'data' => $data
        ]);
    }
}
