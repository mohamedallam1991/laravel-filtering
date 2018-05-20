<?php

namespace App\Filters\Course;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class SubjectFilter extends FilterAbstract
{

    public function mappings()
    {
        $sub = \App\Subject::all()->pluck('slug')->toArray();
        return array_combine($sub, $sub);
    }
    // we need mapings to make sure user will not type something randomly
    // if its a random we just return all builder    
    public function filter(Builder $builder, $value)
    {
        $value = $this->resolveFilterValue($value);
        if ($value === null) {
            return $builder;
        }
        return $builder->whereHas('subjects', function (Builder $builder) use ($value) {
            $builder->where('slug', $value);
        });

    }
}
