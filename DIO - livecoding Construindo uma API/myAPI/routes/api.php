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

Route::get('bands', 'App\Http\Controllers\BandController@getAll');
Route::post('bands/store', 'App\Http\Controllers\BandController@store');
Route::get('bands/gender/{gender}', 'App\Http\Controllers\BandController@getBandsByGender');
Route::get('bands/{id}', 'App\Http\Controllers\BandController@getById');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
