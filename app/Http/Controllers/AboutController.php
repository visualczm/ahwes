<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Product;
//use http\Client\Request;
//use Illuminate\Http\Request;
//use App\Http\Request;
use Illuminate\Http\Request;


class AboutController extends Controller
{
    /**
     * 显示产品列表
     */
 public function index()
 {
      $about=About::findOrFail(1);
     return view('about.index',compact('about'));
 }








}
