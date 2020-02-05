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
Route::get('/home','HomeController@getHomes');
Route::post('/update-home-impression','HomeController@updateImpression');
Route::post('/update-home-click','HomeController@updateClick');
Route::post('/update-lot-click','LotController@updateClick');
Route::post('/update-lot-impression','LotController@updateImpression');


// Crud Opereatipns

Route::post('/lot-update','LotController@updateLot');
Route::post('/home-update','HomeController@updateHome');