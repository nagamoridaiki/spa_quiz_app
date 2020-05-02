<?php

namespace App\Admin\Controllers;

use App\Quiz;
use App\Category;
use App\Answer;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class QuizController extends AdminController
{


  /**
   * Title for current resource.
   *
   * @var string
   */
  protected $title = 'App\Quiz';

  /**
   * Make a grid builder.
   *
   * @return Grid
   */
  protected function grid()
  {
    $grid = new Grid(new Quiz);

    $grid->column('id', __('Id'));
    $grid->column('title', __('Title'));
    $grid->column('answer.answer_1',  __('Answer 1'));
    $grid->column('answer.answer_2',  __('Answer 2'));
    $grid->column('answer.answer_3',  __('Answer 3'));
    $grid->column('answer.answer_4',  __('Answer 4'));
    $grid->column('image_src', __('Image src'));
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
    $show = new Show(Quiz::findOrFail($id));

    $show->answer('Answer information', function ($answer) {
      $answer->id();
      $answer->answer_1();
      $answer->answer_2();
      $answer->answer_3();
      $answer->answer_4();
      $answer->commentary();
    });

    $show->category('Category information', function ($category) {
      $category->name();
    });

    $show->field('id', __('Id'));
    $show->field('title', __('Title'));
    $show->field('image_src', __('Image src'));
    $show->field('answers_id', __('Answers id'));
    $show->field('created_at', __('Created at'));
    $show->field('updated_at', __('Updated at'));

    return $show;
  }

  /**
   * Make a form builder.
   *
   * @return Form
   */
  protected function form()
  {

    $answersLatestId = Answer::latest('id')->first();
    // Answerテーブル最新IDの次のID
    $answersLatestNextId = $answersLatestId->id + 1;

    $form = new Form(new Quiz);
    $form->display('id', 'ID'); 
    $form->textarea('title', __('Title'));
    $form->select('answers_id', 'Answer_id(デフォルトのまま変更しないでください)')->options(function () {
      return (new Answer)->findAnswersSelectBoxInAdmin();
    })->default($answersLatestNextId)->rules('required'); // デフォルト値はAnswerテーブル最新IDの次のID
    $form->select('categories_id', 'カテゴリー')->options(function () {
      return (new Category)->findCategorySelectBoxInAdmin();
    })->rules('required');
    $form->file('image_src', __('Image src'));
    $form->text('answer.answer_1', 'answer_1')->rules('required');
    $form->text('answer.answer_2', 'answer_2')->rules('required');
    $form->text('answer.answer_3', 'answer_3')->rules('required');
    $form->text('answer.answer_4', 'answer_4')->rules('required');
    $form->select('answer.correct_answer_no', 'correct_answer_no')->options(function () {
      return (new Answer)->find4AnswersSelectBoxInAdmin();
    })->rules('required');
    $form->textarea('answer.commentary', 'commentary')->rules('required');

    return $form;
  }
}