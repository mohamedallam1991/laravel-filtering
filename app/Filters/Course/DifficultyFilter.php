<?php

namespace App\Filters\Course;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class DifficultyFilter extends FilterAbstract
{
    public function filter(Builder $builder, $value)
    {
        return $builder;
    }
    
    

}
