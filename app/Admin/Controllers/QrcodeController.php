<?php

namespace App\Admin\Controllers;

use App\Models\Qrcode;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use GQrCode;

class QrcodeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '二维码活码管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Qrcode);
        $grid->column('id', __('Id'))->hide();
        $grid->column('qrcodefile', '二维码')->image(env('APP_URL'), 300, 300);
        $grid->column('redirect', '网址');
        $grid->column('created_at', '建立日期');
        $grid->column('updated_at', '更新日期');
        $grid->actions(function (Grid\Displayers\Actions $actions) {
            $actions->disableView();
        });

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
       // $show = new Show(QrcodeController::findOrFail($id));

        //$show->field('id', __('Id'));
       // $show->field('parent_id', __('Parent id'));
        //$show->field('images', '产品');
       // $show->field('files', '产品文件');
       // $show->field('categoryid','产品类别');
        //$show->field('name', '产品名称');
       // $show->field('model', '产品型号');
       // $show->field('desc','产品说明');
       // $show->field('created_at', '建立日期');
       // $show->field('created_at', '建立日期');

       // return $show;
    }

    /**
     * Make a form builder.
     * @return Form
     */


    protected function form()
    {
        $form = new Form(new Qrcode);

        $form->text('redirect', __('网址'));
       // $form->image('qrcodefile','图片')->removable();
        GQrCode::format('png')->merge('/public/images/login_ico.png')->generate("http://ahwes.com/qrcode/?qrcode");




        return $form;
    }
}
