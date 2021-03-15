<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getProduct()
    {
        return  response()
                    ->json(Product::all(),200);
    }

    public function getProdById($id){
        $prod = Product::find($id);
        if(is_null(($prod))){
            return response()->json(['message'=> 'Product not found'],404);
        }
        return response()->json($prod,200);
    }

    public function addProd(Request $request)
    {
        $prod = Product::create($request->all());

        return response()->json($prod,201);

    }

    public function updateProd(Request $request, $id)
    {
        $prod = Product::findOrFail($id);
        $prod->update($request->all());

        return response()->json($prod, 200);

    }

    public function deleteProd(Request $request, $id)
    {
        $prod = Product::findOrFail($id);
        $prod->delete();
        return response()->json(null, 204);

    }

    // Start of resource methods
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
