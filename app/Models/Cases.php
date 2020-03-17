<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{

    protected $table="dessaul_case";

    public function navcategory()
    {
        return $this->belongsTo(NavCategory::class,"navcategory_id","id");
    }
}
