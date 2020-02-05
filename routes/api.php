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
Route::get('/admin/lot/edit/{id}','LotController@editLot');
Route::post('/admin/lot/update/{id}','LotController@updateLot');
Route::get('/admin/home/edit/{id}','HomeController@editHome');
Route::post('/admin/home/update/{id}','HomeController@updatehome');