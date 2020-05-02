<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    /**
     *
     * カテゴリーセレクトボックス取得メソッド
     * 管理画面用にarray([id]=> [name])の配列を返却する
     * @return array
     */
    public function findCategorySelectBoxInAdmin(): array
    {
        $categories = Category::select('id', 'name')->get();

        $categoryArray = [];

        foreach ($categories as $category) {
        $categoryArray[$category->id] = $category->name;
        }
        return $categoryArray;
    }
}
