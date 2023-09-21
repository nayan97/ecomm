<?php

namespace App\Http\Controllers\Admin;

use Session;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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

        /**
         * add to cart
         */
    public function addToCart(Request $request){

        if (Auth::id()) {
          
            $user =Auth::user();
           
            $cart =new Cart;
            $cart -> user_id = $user->id;
            $cart  -> product_id =$request-> product_id;

            $cart -> save();
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }


    /**
     * show cart count
     */

    //  function show_cart() {
    //     $user_id=Session::get('user')[id];
    //     return Cart::where('user_id',$user_id)->count();
    //  }


    /**
     * Show the cart
     */

    public function showCart()
    { 
        $user =Auth::user();
        $userId = $user->id;

        $products =DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$userId)
        ->select('products.*', 'carts.id as carts_id')
        ->get();
    
        return view('frontend.pages.cart',[
            'products' =>$products
        ]); 
    }

    /**
     * remove a product from the cart
     */

     public function removeCart($id){
        $product =Cart::findOrFail($id);

        $product->delete();

        return redirect()->back()-> with('success', 'Product deleted successfuly');
     }


     /**
      * checkout product
      */

      public function checkout()
      { 
          $user =Auth::user();
          $userId = $user->id;
  
         $total = $products =DB::table('carts')
          ->join('products','carts.product_id','=','products.id')
          ->where('carts.user_id',$userId)
          ->sum('products.price');
      
          return view('frontend.pages.checkout',[
              'total' =>$total
          ]); 
      }
  

}
