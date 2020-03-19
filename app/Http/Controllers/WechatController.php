<?php

namespace App\Http\Controllers;
use EasyWeChat\Factory;


class WechatController extends Controller
{

 public function index()
 {


     $config = config('wechat.official_account.default');
     $app = Factory::officialAccount($config);
     $wx=$app->jssdk->buildConfig(array('checkJsApi','updateAppMessageShareData','updateTimelineShareData','onMenuShareAppMessage','onMenuShareTimeline'), true);


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
