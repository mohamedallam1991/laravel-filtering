<?php

Route::get('courses', 'CoursesController@index');

Route::get('factory', function(){
    return App\Course::all();
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
