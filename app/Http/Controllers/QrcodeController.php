<?php

namespace App\Http\Controllers;
use App\Models\Qrcode;
use Illuminate\Http\Request;
use Exception;


class QrcodeController extends Controller
{
    /**
     * Qrcode页面跳转
     */
 public function index(Request $qrcode)
 {


     $id=$qrcode->input('qrcode');
     $qr=Qrcode::find($id);
     if ($qr)
         return redirect($qr->redirect);
     else
     return new Exception(['没有找到活码跳转的资料！']);


}

}
