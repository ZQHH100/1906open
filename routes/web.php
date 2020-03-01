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
Route::get('/phpinfo', function () {
    phpinfo();
 });
 Route::prefix('/open')->group(function(){

   
    Route::get('/create','Open@create');
    Route::post('/store','Open@store');
});
Route::prefix('/user')->group(function(){

   
    Route::get('/create','User@create');
    Route::post('/store','User@store');
});