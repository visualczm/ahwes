<?php

namespace App\Admin\Actions\Post;
use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;

class CustomDelete extends RowAction
{
    public $name = '删除';

    public function handle(Model $model)
    {
        $qr=public_path('uploads/qrcode/'.$model->id.'.png');
        if(is_file($qr)) unlink($qr);
        $model->delete();
        return $this->response()->success('删除成功')->refresh();

    }






}
