<?php

namespace App\Filters\Course;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class StartedFilter extends FilterAbstract
{
    public function mappings()
    {
        return \App\Filters\Course\CourseFilters::mappings()['started'];
    }
    
    
    public function filter(Builder $builder, $value)
    {
        $value = $this->resolveFilterValue($value);
     
        if ($value === null || !auth()->user()) {
            return $builder;
        }

        $method = $value ? 'whereHas' : 'whereDoesntHave';
     
        return $builder->{$method}('users', function (Builder $builder) {
            $builder->whereIn('users.id', [auth()->id()]);
        });
    }
}
