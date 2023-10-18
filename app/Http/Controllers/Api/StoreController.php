<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;

class StoreController extends Controller
{
    private $store;

    public function __construct(Store $store)
    {
      $this->store = $store;
      
    }

    /**
     * @return  \Illuminate\Http\Response
     */ 
    public function index()
    {
      $store = $this->store->paginate(10);

       return response()->json($store);
    }

    /**
     * @return  \Illuminate\Http\Request
     * @return  \Illuminate\Http\Response
     */ 
    public function store(Request $request)
    {
        return $this->store->create($request->all());
    }

    /**
     * @param Store $store
     * @return  \Illuminate\Http\Response
     */ 
    public function show(Store $store)
    {
        return $store;
    }

    /**
     * @return  \Illuminate\Http\Response
     * @param Store $store
     */ 
    public function update(Request $request, Store $store)
    {
        $store->update($request->all());

        return $store;
    }

    /**
     * @return  \Illuminate\Http\Response
     * @param Store $store
     */ 
    public function destroy(Store $store)
    {
      return $store->delete();
    }
}
