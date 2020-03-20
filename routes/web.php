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

//Route::get('/','\App\Http\Controllers\HomeController@index');//首页Index

//Route::get('/product/lists','\App\Http\Controllers\ProductController@index');//首页Index

//Route::get('/product/search','\App\Http\Controllers\ProductController@search');//首页Index

//Route::get('/product','\App\Http\Controllers\HomeController@product');//首页Index
Route::get('/QR/{codeid?}','\App\Http\Controllers\QrcodeController@index');


//微信相关路由
Route::prefix('wechat')->group(function () {
    //关于维尔斯
    Route::get('about','\App\Http\Controllers\WechatController@index');
});


//H5页面
Route::prefix('h5')->group(function () {
    //维尔斯教育节活动第一场
    Route::get('educate/v1','\App\Http\Controllers\EducateController@v1');
});

//Route::get('/about','\App\Http\Controllers\AboutController@index');
//Route::get('/firecrackers','\App\Http\Controllers\FireCrackers@index');
//Route::Post('/firecrackers/post','\App\Http\Controllers\FireCrackers@createFireCrackers');





