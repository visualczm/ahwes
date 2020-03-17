<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="dessaul_category";

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function navcategory()
    {
        return $this->belongsTo(NavCategory::class,"navcategory_id","id");
    }

    /**
     * @param int $type
     * @return array
     */
    public function  getCategory($type=1)
    {
        return $this
            ->with('navcategory')->get()
            ->where('type',$type)
            ->toArray();



    }

}
