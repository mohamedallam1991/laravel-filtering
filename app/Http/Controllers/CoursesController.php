<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CoursesController extends Controller
{
    public function index(Request $request)
    {
        return Course::filter($request)->get();
    }
    
    public function show(Course $course)
    {
        return $course;
    }
    
    



}
