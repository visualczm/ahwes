<?php

namespace App\Admin\Controllers;
use App\Admin\Actions\Post\CustomDelete;
use App\Models\Qrcode;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Actions;
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
        $grid->column('qrname', '名称');
        $grid->column('size','二维码像素')->addlab('px');
        $grid->column('qrcodefile', '二维码')->image(env('APP_URL'), 210, 210);
        $grid->column('redirect', '网址');
        $grid->column('created_at', '建立日期');
        $grid->column('updated_at', '更新日期');
        $grid->actions(function (Grid\Displayers\Actions $actions) {
            $actions->disableView();
            $actions->disableDelete();
            $actions->add(new CustomDelete);
        });

        //$grid->actions(function ($actions) {

      //  });
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
        $form->text('qrname', '名称');
        $form->text('redirect', __('网址'))->rules('required|url');

        $form->number('size',"二维码像素")->min(120)->max(3000)
            ->default(210)
            ->help('计算公式:像素单位=(厘米*dpi)/25.4')
            ->required();
        $form->switch('merge',"维尔斯图标")
            ->help('维尔斯的图表插入在二维码中间');

        $form->saved(function (Form $form) {

            $model=$form->model();
            $url=env("APP_URL").'QR/?codeid='.$model->id;
            $filename='uploads/qrcode/'.$model->id.'.png';
            $logo=env("APP_URL").'/images/qrlogo.png';


            if((bool)$model->merge)
            GQrCode::format('png')
                ->size($model->size)
                ->margin(0)
                ->errorCorrection('H')
                ->merge($logo,.3,true)
                ->generate($url,public_path($filename));
            else
                GQrCode::format('png')
                    ->size($model->size)
                    ->margin(0)
                    ->generate($url,public_path($filename));

             $qr=Qrcode::find($model->id);
             $qr->qrcodefile=$filename;
             $qr->save();

        });


       // $form->image('qrcodefile','图片')->removable();






        $form->footer(function ($footer) {

            // 去掉`重置`按钮
            $footer->disableReset();

            // 去掉`提交`按钮

            // 去掉`查看`checkbox
            $footer->disableViewCheck();

            // 去掉`继续编辑`checkbox
            $footer->disableEditingCheck();

            // 去掉`继续创建`checkbox
            $footer->disableCreatingCheck();



        });


        $form->tools(function (Form\Tools $tools) {

            // 去掉`列表`按钮
            $tools->disableList();

            // 去掉`删除`按钮
            $tools->disableDelete();

            // 去掉`查看`按钮
            $tools->disableView();

            // 添加一个按钮, 参数可以是字符串, 或者实现了Renderable或Htmlable接口的对象实例
             });

        return $form;
    }
}
