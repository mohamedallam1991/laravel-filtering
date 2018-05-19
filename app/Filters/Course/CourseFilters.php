<?php

namespace App\Filters\Course;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\Filters\FiltersAbstract;
use App\Filters\Course\AccessFilter;
use App\Filters\Course\DifficultyFilter;

class CourseFilters extends FiltersAbstract
{
    protected $filters = [
        'access' => AccessFilter::class, 
        'difficulty' => DifficultyFilter::class,
    ];
    
    


}
