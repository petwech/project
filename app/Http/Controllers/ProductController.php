<?php

namespace App\Http\Controllers;

use App\Product;
use App\Department;
use Illuminate\Http\Request;
use Redirect,Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products=Product::all();
      $deps= Department::all();

      return view('pages.inventory.product',[
         'deps'=> $deps,
         'product'=>$products,
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $r=$request->validate([
            'product' => 'required',
            'department' => 'required',
              'description' => 'required',

        ]);

        $checkproduct= $request->input('product');

       //####  Check If Data Exists ###//
        $isExist = Product::select("*")
                      ->where('name',$checkproduct)
                      ->exists();

      if ($isExist) {
        $msg = 'Product Exists in DataBase';
        return redirect()->route('product.index')->with('success',$msg);

      }else{
        $prodId = $request->Prod_id;
        Product::updateOrCreate(
       ['id' => $prodId],
        ['name' => $request->product,'department' => $request->department, 'descript'=>$request->description]
                                  );
        if(empty($request->$prodId))
           $msg = 'Product entry created successfully.';
        else
          $msg = 'Product is updated successfully';
          return redirect()->route('product.index')->with('success',$msg);
      }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
