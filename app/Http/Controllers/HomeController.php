<?php

namespace App\Http\Controllers;



class HomeController extends Controller
{

 public function index()
 {

     $nav= new \App\Models\NavCategory();//获取产品列表
     $imports=  $nav->getNavCategory(1)->take(3);//前三笔



     $about=\App\Models\About::select('mission')->findOrFail(1);

     $product=\App\Models\Qrcode::where('push','=',1)->get();


    return view('index',compact('imports','about','product'));

 }


// public function product()
// {
//       $pro= QrcodeController::all();
//
//     return view('product',compact(['pro']));
//
// }



}
