<?php

namespace App\Admin\Controllers;

use App\Models\Navbar;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NavbarController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '导航类别';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Navbar);


        $grid->column('id', __('Id'))->hide();
        $grid->column('sort', "排序");
        $grid->column('name',"导航名称");

        $grid->column('created_at', "建立日期");
        $grid->column('updated_at', "修改日期");
        $grid->model()->orderBy('sort', 'asc');
        $grid->disableFilter();
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
        $show = new Show(Navbar::findOrFail($id));

        $show->field('id', __('Id'))->hide();;
        $show->field('name', "导航名称");
        $show->field('sort', "排序");
        $show->field('created_at', "建立日期");
        $show->field('updated_at', "修改日期");

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Navbar);

        $form->text('name', "导航名称");
        $form->number('sort', "排序")->min(0);

        return $form;
    }
}
