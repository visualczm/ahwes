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
     $id=$qrcode->input('codeid');
     $qr=Qrcode::findOrFail($id);
     return redirect($qr->redirect);
 }

}
