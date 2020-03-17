<?php

namespace App\Providers;

use App\Models\Cases;
use App\Models\Navbar;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; //add fixed sql

class AppServiceProvider extends ServiceProvider
{


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        Schema::defaultStringLength(191); //add fixed sql
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $nav= new \App\Models\NavCategory();//获取产品列表
        $imports=  $nav->getNavCategory(1);//进口列表
        $chinas=  $nav->getNavCategory(0);//进口列表

        $cases=Cases::with('navcategory')
            ->select('name','id','navcategory_id')
            ->orderBy('navcategory_id')
            ->get()
            ->groupBy('navcategory.name');

        //這裏處理獲取公共部分的數據
        \View::composer('layout.header',function ($view) use($imports,$chinas,$cases) {

            $navbars=Navbar::orderBy('sort')->get();//获取导航


//            $abouts=$nav->where('navid',8)->get();


         $view->with('navbars',$navbars)
              ->with('imports',$imports)//產品中心類別
              ->with('chinas',$chinas)
              ->with('abouts')//關於
              ->with('download')
              ->with('cases',$cases);//解決方案
//              ->with('abouts',$abouts);//關於
        });

        \View::composer('index',function ($view) use($cases){

            $view->with('cases',$cases);//產品中心類別

        });


    }
}
