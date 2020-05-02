<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
  protected $table = 'answers';

  /**
   *
   * 回答セレクトボックス取得メソッド
   * 管理画面用にarray([id]=> [name])の配列を返却する
   * @return array
   */
  public function findAnswersSelectBoxInAdmin(): array
  {
    $answersIds = Answer::select('id')->get();
    $answersIdsArray = [];
    $count = count($answersIds);
    foreach ($answersIds as $answersId) {
      $answersIdsArray[$answersId->id] = $answersId->id;
      if ($count === $answersId->id) {
        // foreachが最後であれば、Answerテーブルの最新IDの次のIDを追加する
        $answersIdsArray[$answersId->id + 1] = $answersId->id + 1;
      }
    }
    return $answersIdsArray;
  }

  /**
   *
   * 4択回答セレクトボックス取得メソッド
   * 管理画面用に4択回答セレクトボックス用の配列を返却する
   * @return array
   */
  public function find4AnswersSelectBoxInAdmin(): array
  {
    $correctAnswerNoArray = [];
    // 4択問題なので、1-4のセレクトボックスを生成
    for ($i = 1; $i <= 4; $i++) {
      $correctAnswerNoArray[$i] = $i;
    }
    return $correctAnswerNoArray;
  }
}