<?php

use Illuminate\Support\Facades\DB;

Route::get('courses', 'CoursesController@index')->name('courses.index');
//Route::get('courses/{course}', 'CoursesController@show');



Route::get('factory', function(){
    //DB::table('course_user')->insert(['user_id' => 1, 'course_id' => 1]);
    //DB::table('subjectables')->insert(['subject_id' => 1, 'subjectable_id' => 1, 'subjectable_type' => 'App\Course']);
    //DB::table('subjectables')->insert(['subject_id' => 2, 'subjectable_id' => 2, 'subjectable_type' => 'App\Course']);
    return $a;
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
