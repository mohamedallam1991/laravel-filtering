<?php

namespace App\Filters\Course;

use Illuminate\Database\Eloquent\Builder;
use App\Filters\FilterAbstract;

class AccessFilter extends FilterAbstract
{
    public function filter(Builder $builder, $value)
    {
        $value = $this->resolveFilterValue($value);

        if($value === null)  {
            return $builder;
        }

        return $builder->where('free', $value);
    }

    
    public function mappings()
    {
        return \App\Filters\Course\CourseFilters::mappings()['access'];
    }
    
    
    
    

}
