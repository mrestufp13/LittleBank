<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('home',['middleware'=>'periksaLogin', function () {
    return view('home');
}]);


Route::get('pages', function () {
    return view('pages');
});

Route::post('nasabah/search','NasabahController@search');
Route::get('nasabah/contoh','NasabahController@contoh');
Route::post('nasabah/transaksi','NasabahController@transaksi');
Route::resource('nasabah','NasabahController');

Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//laporan pdf
Route::get('laporan/pdf','LaporanController@pdf');
Route::get('laporan/excel','LaporanController@excel');