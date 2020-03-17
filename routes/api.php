<?php

use Illuminate\Http\Request;
use App\Admin\DataBase\Category;
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

Route::get('/getcategory',function (Request $request){


        $provinceId = $request->get('q');
        return \App\Models\Category::where('navcategory_id', $provinceId)->get(['id', DB::raw('name as text')]);

});


