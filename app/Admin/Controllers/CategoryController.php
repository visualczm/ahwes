<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Models\NavCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '产品类别';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Category);

        $grid->column('id', __('Id'))->hide();
        $grid->column('navcategory.name', "品牌")->sortable();
        $grid->column('name', '产品类别');
        $grid->column('type', '品牌类型')->using(['0' => '国产', '1' => '进口']);
        $grid->column('created_at', '建立日期');
        $grid->column('updated_at', '修改日期');
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
        $show = new Show(Category::findOrFail($id));

        $show->field('id', __('Id'))->hide();
        $show->field('navcategory_id','品牌');
        $show->field('name', '产品类别');
        $show->field('type','品牌类型')->using(['0' => '国产', '1' => '进口']);
        $show->field('created_at', '建立日期');
        $show->field('updated_at', '修改日期');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Category);
        $form->select('navcategory_id',"品牌")->options(NavCategory::where('navid',4)->pluck("name","id"));
        $form->text('name', '产品类别');
        $form->select('type', '品牌类型')->options(['0' => '国产', '1' => '进口']);

        return $form;
    }
}
