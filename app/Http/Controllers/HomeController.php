<?php

namespace App\Http\Controllers;

use App\Models\Protag;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        $datas =Product::paginate(9);
        return view('frontend.pages.index', [
            'datas' => $datas
        ]);
    }

    public function contact(){
   
        return view('frontend.pages.contact');
    }

    public function about(){
   
        return view('frontend.pages.about');
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


/**
 * product search by category
 */
public function showProductbyTag($slug){

    $tags =Protag::where('slug', $slug)->first();

    $data = $tags->Product;
  
    return view('frontend.pages.index', [
        'data' => $data
    ]);

}


}
