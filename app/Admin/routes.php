<?php

use Illuminate\Routing\Router;


Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');

    $router->resource('dessaul/navbar', NavbarController::class);//首页Navbar
    $router->resource('dessaul/navcategory', NavCategoryController::class);//首页Navbar
    $router->resource('dessaul/settings', SettingsController::class);
    $router->resource('dessaul/product', ProductController::class);
    $router->resource('dessaul/category', CategoryController::class);
    $router->resource('dessaul/categorycase', CategoryCaseController::class);
    $router->resource('dessaul/case', CasesController::class);
    $router->resource('dessaul/website', WebSiteController::class);
    $router->resource('dessaul/about', AboutController::class);

});


