<?php

namespace App\Admin\Controllers;

use App\Models\Cases;
use App\Models\NavCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CasesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '案例管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Cases);

        $grid->column('id', __('Id'))->hide();
        $grid->column('navcategory.name','案例分类');
        $grid->column('name', '案例名称');
        $grid->column('updated_at', '更新日期');
        $grid->column('created_at','建立日期');
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
        $show = new Show(Cases::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('categorycase_id', __('Categorycase id'));
        $show->field('navcategory_id', __('Navcategory id'));
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
        $form = new Form(new Cases);
        $form->select('navcategory_id',"案例类别")->options(NavCategory::where('navid',6)->pluck("name","id"));
        $form->text('name', '方案名称');
        $form->editor('content','方案内容');
        return $form;
    }
}
