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
//
//Route::get('/', function () {
//
//    return view('index');
//});

Route::get('/','\App\Http\Controllers\HomeController@index');//首页Index

Route::get('/product/lists','\App\Http\Controllers\ProductController@index');//首页Index

Route::get('/product/search','\App\Http\Controllers\ProductController@search');//首页Index

//Route::get('/product','\App\Http\Controllers\HomeController@product');//首页Index
Route::get('/solution/{cases}','\App\Http\Controllers\SolutionController@show');
Route::get('/about','\App\Http\Controllers\AboutController@index');
Route::get('/firecrackers','\App\Http\Controllers\FireCrackers@index');
Route::Post('/firecrackers/post','\App\Http\Controllers\FireCrackers@createFireCrackers');





