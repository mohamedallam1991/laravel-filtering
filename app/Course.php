<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Filters\Course\CourseFilters;
use Illuminate\Http\Request;

class Course extends Model
{
    public function scopeFilter(Builder $builder, Request $request, array $filters = [])
    {
        return (new CourseFilters($request))->add($filters)->filter($builder);
    }
    
    

}
