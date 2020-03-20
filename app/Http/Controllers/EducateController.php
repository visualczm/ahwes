<?php

namespace App\Http\Controllers;




class EducateController extends Controller
{


 public function v1()
 {

    $wx=WechatJSSKD::xczbconfig();
    return view('h5/educate',compact('wx'));

 }







}
