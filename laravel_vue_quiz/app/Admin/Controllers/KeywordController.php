<?php

namespace App\Admin\Controllers;

use App\Keyword;
use App\Category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class KeywordController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Keyword';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Keyword);

        $grid->column('id', __('Id'));
        $grid->column('initial', __('Initial'));
        $grid->column('keyword', __('Keyword'));
        $grid->column('description', __('Description'));
        $grid->column('category.name', __('Categories name'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Keyword::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('initial', __('Initial'));
        $show->field('keyword', __('Keyword'));
        $show->field('description', __('Description'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        $show->category('Category information', function ($category) {
          $category->name();
        });

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Keyword);

        $form->text('initial', __('Initial'));
        $form->text('keyword', __('Keyword'));
        $form->textarea('description', __('Description'));
        $form->select('categories_id', 'カテゴリー')->options(function () {
          return (new Category)->findCategorySelectBoxInAdmin();
        })->rules('required');

        return $form;
    }
}