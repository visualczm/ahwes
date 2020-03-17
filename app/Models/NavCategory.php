<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NavCategory extends Model
{
    protected $table="dessaul_navcategory";
    //

    public function navbar()
    {
        return $this->belongsTo(Navbar::class,"navid","id");
    }

    public function getNavCategory($type,$categoryid=4)
    {
             $data = $this
            ->leftJoin('dessaul_navbar', 'dessaul_navcategory.navid', '=', 'dessaul_navbar.id')
            ->leftJoin('dessaul_category','dessaul_category.navcategory_id','=','dessaul_navcategory.id')
            ->where('dessaul_navcategory.navid','=',$categoryid)
            ->where('dessaul_category.type','=',$type)

            ->get(["dessaul_navcategory.name as navcatename","dessaul_category.name","dessaul_category.id","dessaul_navcategory.id as navid"])
            ->groupBy('navcatename'); // 可按type分组;


        return $data;

     }
}
