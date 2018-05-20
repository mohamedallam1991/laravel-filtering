<?php

namespace App\Filters\Course;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class OrderFilter extends FilterAbstract
{
    public function mappings()
    {
        return [
            'desc' => 'desc',
            'asc' => 'asc',
        ];
    }
    
    
    public function filter(Builder $builder, $value)
    {
        $value = $this->resolveFilterValue($value);
     
        if ($value === null) {
            return $builder->orderBy('name', 'desc');
        }
     
        return $builder->orderBy('name', $value);
    }
}
