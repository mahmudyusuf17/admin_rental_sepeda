<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('user/home');
// });

// Route::get('/dashboard', function () {
//     return view('home');
// });
Auth::routes();
Route::get('google', 'GoogleController@redirect');
Route::get('google/callback', 'GoogleController@callback');

Route::get('/admin/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/admin/profile', 'ProfileController@index')->name('profile');
Route::get('/admin/sepeda', 'SepedaController@index')->name('sepeda');
Route::get('/admin/customer', 'CustomerController@index')->name('customer');
Route::get('/admin/employee', 'EmployeeController@index')->name('employee');
Route::get('/admin/rent', 'RentController@index')->name('rent');
Route::get('/admin/returns', 'ReturnsController@index')->name('returns');



Route::get('/', function () {
    return view('user.home');
});

// Route::get('/{any}', function () {
//     return view('app');
// })->where('any','.*');
