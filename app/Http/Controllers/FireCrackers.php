<?php

namespace App\Http\Controllers;
use App\Models\Fire;
use Illuminate\Http\Request;
use Image;



class FireCrackers extends Controller
{



    public  function index(Request $request)
    {
//        $appid ='wxcb2711060169adca' ;
//        $secret ='d8ebc47e79dffcaf97280b24e60ba66f';
//        $jssdk = new WechatJSSKD($appid, $secret);
//        $signPackage = $jssdk->GetSignPackage();


        $basePath="http://images.ahwes.com/fire/";
        $imgpath=[];

        if($request['company']=="police")
        {$imgpath=[$basePath."fireP_bg.jpg",$basePath."fireP_sg.jpg",true];}
        elseif($request['company']=="community")
        {
            $imgpath=[$basePath."fireC_bg.jpg",$basePath."fireC_sg.jpg",false];
        }

        return view('ahwes.fire',compact('imgpath'));
    }


   public function createFireCrackers(Request $request)
   {

       $dtcount=Fire::find(1);

      // dd($request -> all()); //表单过来的所有数据
       $basePath="http://images.ahwes.com/fire/";
       $imgpath="";
       if($request['company']=="police")
       {
           $dtcount->count= (int)$dtcount->count+1;

           $imgpath=$basePath."fireP_sg.jpg";

           $c='我是第'.$dtcount->count.'个参与者';

           // create Image from file
           $img = Image::make($imgpath); //背景图的地址

           $img->text("承诺人", 50, 680, function($font) {

               $font->file(public_path("font/signature.ttf")); //字体的地址，地址错误会报GD库的错
               $font->size(25);
           });
           $yourname=$request['yourname'];
           $x = mb_strlen($yourname)>2?40:50;
           // use callback to define details
           $img->text($yourname, $x, 715, function($font) {
               $font->file(public_path("font/signature.ttf")); //字体的地址，地址错误会报GD库的错
               $font->size(30);

           });
           $img->text(date('Y-m-d'), 45, 750, function($font) {
               $font->file(public_path("font/signature.ttf"));
               $font->size(16);

           });
           $img->text($c, $img->width()/2-mb_strlen($c)*8, 792, function($font) {
               $font->file(public_path("font/signature.ttf"));
               $font->size(20);
               $font->color('#fff');
           });


       }
       elseif($request['company']=="community")
       {
           $dtcount->count2= (int)$dtcount->count2+1;

           $imgpath=$basePath."fireC_sg.jpg";

           $c='我是第'.$dtcount->count2.'个参与者';
           // create Image from file
           $img = Image::make($imgpath); //背景图的地址

           $img->text("承诺人", 120, 570, function($font) {

               $font->file(public_path("font/signature.ttf")); //字体的地址，地址错误会报GD库的错
               $font->size(25);
           });
           $yourname=$request['yourname'];
           $x = mb_strlen($yourname)>2?110:120;
           // use callback to define details
           $img->text($yourname, $x, 600, function($font) {
               $font->file(public_path("font/signature.ttf")); //字体的地址，地址错误会报GD库的错
               $font->size(30);

           });
           $img->text(date('Y-m-d'), 120, 620, function($font) {
               $font->file(public_path("font/signature.ttf"));
               $font->size(16);

           });
           $img->text($c, $img->width()/2-mb_strlen($c)*8, 792, function($font) {
               $font->file(public_path("font/signature.ttf"));
               $font->size(20);
               $font->color('#fff');
           });


       }

       $dtcount->save();




       $image = (string)$img->encode('png', 75);
       $base64_encode = 'data:image/png;base64,' . base64_encode($image);



       return response()->json([
           'code' => 1,
           'message' => 'success',
           'data' => $base64_encode,
       ]);

   }



}
