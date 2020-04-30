<?php

Route::get('/', function () {
    return view('index');
});
Route::get('/quiz', function () {
    return view('quiz.index');
});
Route::get('/register', function () {
    return view('auth.register.index');
});
Route::post('/register', 'Auth\RegisterController@register');