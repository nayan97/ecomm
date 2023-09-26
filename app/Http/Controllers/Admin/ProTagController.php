<?php

namespace App\Http\Controllers\Admin;

use App\Models\Protag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProTagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { $tags = Protag::all();
        return view('admin.product.tag.index',[
            'tags' => $tags,
            'type'   =>'add'
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
        $this -> validate($request, [
            'name'      => 'required'
          ]);
          Protag::create([
            'name'  => $request -> name,
            'slug'  => Str::slug($request -> name)
    
          ]);
          return back() -> with('success', 'Tag Created Successfuly');
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
