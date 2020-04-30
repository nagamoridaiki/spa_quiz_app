<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Quiz;

class QuizController extends Controller
{
  public function index(Request $request)
  {
    $category = $request->input('categories');
    if ($category) {
        //配列に変換
      $category = explode(',', $category);
    } else {
      return [];
    }

    //Quizモデルと共にAnswer・Categoryモデルを取得
    $quiz = Quiz::with(['answer', 'category'])
    //quizzes.categories_idの中から、$categoryが絞り込む
      ->wherein('quizzes.categories_id', $category)
      ->inRandomOrder()
      ->limit(10)
      ->get();

    return $quiz;
  }
}