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

//Route::get('/master',function (){
//    return view('food/index');
//});



Route::get('/login', 'loginControllers@index');
Route::post('/login', 'loginControllers@store');

Route::get('/', 'HomeController@index');

Route::get('/register1', 'registerControllers@index');
Route::post('/register1', 'registerControllers@store');

Route::get('/food/index', 'foodControllers@index');
Route::get('/food/create', 'foodControllers@create');
Route::post('/food/index', 'foodControllers@store');

Route::get('/drink/index', 'drinkControllers@index');
Route::get('/drink/create', 'drinkControllers@create');
Route::post('/drink/index', 'drinkControllers@store');

