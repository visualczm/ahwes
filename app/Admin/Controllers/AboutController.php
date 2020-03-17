<?php

namespace App\Admin\Controllers;

use App\Models\About;
use App\Models\Cases;
use App\Models\NavCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AboutController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '了解戴索管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new About);

        $grid->column('id', __('Id'))->hide();
        $grid->column('name', '名称');
        $grid->column('updated_at', '更新日期');
        $grid->column('created_at','建立日期');
        $grid->actions(function (Grid\Displayers\Actions $actions) {
            $actions->disableView();
            $actions->disableDelete();
        });
        $grid->disableCreateButton();
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
        $show = new Show(About::findOrFail($id));

        $show->field('id', __('Id'));

        $show->field('content', __('Content'));
        $show->field('updated_at', __('Updated at'));
        $show->field('created_at', __('Created at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new About);
        $form->text('name', '名称');
        $form->editor('about','公司简介');
        $form->editor('mission','企业文化');
        $form->tools(function (Form\Tools $tools) {

            // 去掉`列表`按钮
            $tools->disableList();

            // 去掉`删除`按钮
            $tools->disableDelete();

            // 去掉`查看`按钮
            $tools->disableView();

              });
        return $form;
    }
}
