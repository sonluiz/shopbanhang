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

//Route::get('', function () {
//    return view('page.trangchu');
//});

Route::get('','PageController@getIndex');
Route::get('/index','PageController@getIndex');

//lay san pham
Route::get('gettypesanpham/{type}','PageController@getTypeSanPham');
Route::get('chitietsanpham/{id}','PageController@chitietsanpham');

Route::get('getsanpham','PageController@getSanPham');
Route::get('getlienhe','PageController@getLienHe');
Route::get('getgioithieu','PageController@getGioiThieu');

//Route::get('hasmany','PageController@hasmany');



