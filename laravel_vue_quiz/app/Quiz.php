<?php

namespace App;

use App\Answer;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
  protected $table = 'quizzes';

  public function answer()
  {
    return $this->hasOne('App\Answer', 'id', 'answers_id');
  }
  public function category()
  {
    return $this->hasOne('App\Category', 'id', 'categories_id');
  }

  public static function boot()
  {
    parent::boot();

    static::deleting(function ($answer_model) {
      $answer_model->answer()->delete();
    });
  }
}