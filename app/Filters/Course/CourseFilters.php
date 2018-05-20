<?php

namespace App\Filters\Course;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\Filters\FiltersAbstract;
use App\Filters\Course\AccessFilter;
use App\Filters\Course\DifficultyFilter;
use App\Filters\Course\TypeFilter;
use App\Filters\Course\SubjectFilter;
use App\Filters\Course\StartedFilter;
use App\Filters\Course\OrderFilter;

class CourseFilters extends FiltersAbstract
{
    protected $filters = [
        'access' => AccessFilter::class,
        'difficulty' => DifficultyFilter::class,
        'type' => TypeFilter::class,
        'subject' => SubjectFilter::class,
        'started' => StartedFilter::class,
        'order' => OrderFilter::class,
    ];
}
