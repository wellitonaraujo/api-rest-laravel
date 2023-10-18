<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     * @return  \Illuminate\Http\Response
     */ 
    public function index(Store $store)
    {
      
       return $store->products;
    }

     /**
     * @param Store $store
     * @return  \Illuminate\Http\Response
     */ 
    public function store(Store $store)
    {
      return $store;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
