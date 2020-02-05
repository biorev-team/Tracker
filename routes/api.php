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
Route::get('/home','controllerForHome@getHomes');
Route::get('/lot','LotController@getLots');
Route::get('/home/analytics','controllerForHome@getHomesAnalysis');
Route::get('/lot/analytics','LotController@getLotsAnalysis');
//Route::post('/home/impression','controllerForHome@updateImpression');
Route::post('/home/click','controllerForHome@updateClick');
Route::post('/lot/click','LotController@updateClick');
Route::post('/lot/impression','LotController@updateImpression');


// Crud Opereatipns

Route::post('/lot/update','LotController@updateLot');
Route::post('/home/update','controllerForHome@updateHome');