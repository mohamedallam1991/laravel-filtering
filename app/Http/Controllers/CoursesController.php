<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CoursesController extends Controller
{
    public function index(Request $request)
    {
        $courses = Course::filter($request)->get();
        return view('courses.index' , compact('courses'));
    }   
    
    



}
