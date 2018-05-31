<?php

use Illuminate\Support\Facades\DB;

Route::get('courses', 'CoursesController@index')->name('courses.index');
//Route::get('courses/{course}', 'CoursesController@show');



Route::get('factory', function(){
   $subjectsss = ['php', 'laravel', 'vue', 'redis', 'javascript', 'mongodb', 'nodejs', 'vim', 'fedora'];
    foreach($subjectsss as $key => $value )
    {
        DB::table('subjects')->insert(['name' => strtoupper($value), 'slug' => $value]); 
    }

    //return \App\Subject::get();
    

    $subjects = \App\Subject::get();

    foreach ($subjects as $subject)
    {
        $courses = factory('App\Course', 10)->create()->each(function ($courses) use ($subject){
            $courses->subjects()->save($subject);
        });
    }

    return \App\Course::get();
/*
    $sum = 1;
    for($i = 1; $i<= 10; $i++ )
    {
        $sum = $sum + $i;
        foreach($sum){
        DB::table('subjectables')->insert(['subject_id' => rand(1, 9), 'subjectable_id' => $sum, 'subjectable_type' => 'App\Course'])
        }
    }

    for($i = 1; $i<= 20; $i++ )
    {
        $sum = $sum + $i;
        foreach($sum as $sum){
            DB::table('course_user')->insert(['user_id' => 1, 'course_id' => $sum]);
            }
    }
 */
});
Route::get('yes', function(){
/*
    $sum = 1;
    for($i = 1; $i<= 10; $i++ )
    {
        $sumi = $sum + $i;
    for($i = 1; $i<= 10; $i++ )
        DB::table('subjectables')->insert(['subject_id' => rand(1, 9), 'subjectable_id' => $i, 'subjectable_type' => 'App\Course']);
        }
    }

$yes = \App\Course::all();
return $yes;
 */
});
 
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
