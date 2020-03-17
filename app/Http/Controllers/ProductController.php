<?php

namespace App\Http\Controllers;
use App\Models\Product;
//use http\Client\Request;
//use Illuminate\Http\Request;
//use App\Http\Request;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * 显示产品列表
     */
 public function index()
 {
     $categoryid= request('categoryid');
     $navid=request('navid');
     $pro=Product::with('category')->with('navcategory');//关联数据
     if($categoryid &&$navid)
     $products= $pro->where('category_id',$categoryid)->where('parent_id',$navid)->paginate(10);
     else
     $products=$pro->where('parent_id',$navid)->paginate(10);

     return view('product.list',compact('products'));

 }


 public function search(Request $request)
 {
     $pro=new Product();
     $products= $pro->getsearchData($request['keyword'])->paginate(10);

//     $products=Product::
//     with(['category' => function ($q) use ($request) {
//         $q->orwhere('name', '%'.$request['keyword'].'%');
//
//
//     }
//
//
//         ])->with( ['navcategory'=>function ($q) use ($request) {
//     $q->orwhere('name', '%'.$request['keyword'].'%');
// }])
//         ->orWhere('model','like','%'.$request['keyword'].'%')
//
//// }])->with('navcategory')//关联数据
////     ->where('navcategory.name','like','%'.$request['keyword'].'%')
////     ->orWhere('category.name','like','%'.$request['keyword'].'%')
////         ->orWhere('model','like','%'.$request['keyword'].'%')
//     ->paginate(10);


     //dd($products);
     return view('product.list',compact('products'));
 }







}
