<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('outlet','OutletController@outlet');
Route::get('bet','BetController@bet');
Route::get('coordinator','CoordinatorController@coordinator');
Route::get('draw','DrawController@draw');
Route::get('receipt','ReceiptController@receipt');
Route::get('user','UserController@user');