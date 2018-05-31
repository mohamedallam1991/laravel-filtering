<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

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

        factory('App\Course', 50)->create();
    }
}
