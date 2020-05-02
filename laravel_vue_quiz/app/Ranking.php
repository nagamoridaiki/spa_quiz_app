<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{

  protected $table = 'rankings';

  public function insertScore(int $correctRatio, int $userId)
  {
    $ranking = new Ranking();
    $ranking->percentage_correct_answer = $correctRatio;
    $ranking->user_id = $userId;
    $ranking->save();
  }

  public function user()
  {
    return $this->belongsTo('App\User', 'user_id', 'id');
  }
}