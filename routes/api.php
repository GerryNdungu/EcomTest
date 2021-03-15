<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('products','ProductsController@getProduct');
Route::get('product/{id}','ProductsController@getProdById');
Route::post('addProduct','ProductsController@addProd');
Route::put('updateProduct/{id}','ProductsController@updateProd');
Route::delete('deleteProduct/{id}','ProductsController@deleteProd');

