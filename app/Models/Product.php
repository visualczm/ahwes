<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table="dessaul_product";

    public function category()
    {
        return $this->belongsTo(Category::class,"category_id","id");
    }


    public function navcategory()
    {
        return $this->belongsTo(NavCategory::class,"parent_id","id");
    }


    public function getsearchData($keyword)
    {

        return $this->leftjoin('dessaul_navcategory','dessaul_navcategory.id','=','dessaul_product.parent_id')
                     ->leftjoin('dessaul_category','dessaul_category.id','=','dessaul_product.category_id')
                        ->where('dessaul_navcategory.name','like','%'.$keyword.'%')
                        ->orwhere('dessaul_category.name','like','%'.$keyword.'%')
                        ->orwhere('model','like','%'.$keyword.'%');
    }





}
