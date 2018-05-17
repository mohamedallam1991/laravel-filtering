<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Filters\Course\CourseFilters;

class Course extends Model
{
    public function scopeFilter(Builder $builder, $request)
    {
        return (new CourseFilters($request))->filter($builder);
    }
    
    

}
