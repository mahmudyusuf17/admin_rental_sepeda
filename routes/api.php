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

Route::get('/admin/sepeda', 'SepedaController@index');
Route::post('/admin/sepeda/store', 'SepedaController@store')->name('addSepeda');
Route::get('/admin/sepeda/{id?}', 'SepedaController@show')->name('showSepeda');
Route::post('/admin/sepeda/update/{id?}', 'SepedaController@update')->name('editSepeda');
Route::delete('/admin/sepeda/delete/{id?}', 'SepedaController@destroy')->name('hapusSepeda');
