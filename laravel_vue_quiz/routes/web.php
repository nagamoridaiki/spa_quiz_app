<?php

Route::get('/', function () {
    return view('index');
});
Route::get('/quiz', function () {
    return view('quiz.index');
});