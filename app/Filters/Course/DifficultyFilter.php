<?php

namespace App\Filters\Course;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class DifficultyFilter extends FilterAbstract
{
    public function mappings()
    {
        return \App\Filters\Course\CourseFilters::mappings()['difficulty'];
    }
    
    
    public function filter(Builder $builder, $value)
    {
        $value = $this->resolveFilterValue($value);
     
        if($value === null)  {
            return $builder;
        }
     
        return $builder->where('difficulty', $value);
    }
    
    

}
