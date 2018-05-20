<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CoursesController extends Controller
{
    public function index(Request $request)
    {
        return Course::with(['subjects'])->filter($request, $this->getFilters())->get();
    }
    
   protected function getFilters()
   {
       return [
           //'difficulty' => DifficultyFilter::class,
       
       ];
   }
   
    
    
    



}
