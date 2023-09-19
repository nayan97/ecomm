<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $data=Product::all();
        return view('admin.product.index',[
        'data' => $data,
        'form' => 'create'

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            //validation
       $this -> validate ($request,[
        'title'   => 'required'
      ]);
      $product =new Product;

       // img manage
       $img =$request -> photo;
       $file_name =time().'.'. $img->getClientOriginalExtension();

       $request -> photo -> move('img/product', $file_name);

      $product->name =$request->title;
      $product->slug =Str::slug($request -> title);
      $product->description= $request->desc;
      $product->price= $request->price;
      $product->dis_price= $request->dis_price;
      $product->category=$request->cat;
 

      $product->photo= $file_name;
      
      $product->save();

      return redirect()->back()-> with('success', 'Product Uploaded successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
