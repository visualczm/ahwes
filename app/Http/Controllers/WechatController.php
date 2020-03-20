<?php

namespace App\Http\Controllers;
use EasyWeChat\Factory;


class WechatController extends Controller
{

 public function index()
 {

     $wx=WechatJSSKD::xczbconfig();//获取接口的签名验证

     return view('wechat.about',compact('wx'));

 }


// public function product()
// {
//       $pro= QrcodeController::all();
//
//     return view('product',compact(['pro']));
//
// }



}
