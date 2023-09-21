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


// single page of product
    public function shop($id){

        $data =Product::findOrFail($id);
        return view('frontend.pages.shop', [
            'data' => $data
        ]);
    }

    //search for products


    public function search(Request $request){
      
      
      $datas = Product::where('name','like','%'.$request->input('search').'%')->get();

      return view('frontend.pages.search',[
        'datas' => $datas,
      ]);
    }






}
