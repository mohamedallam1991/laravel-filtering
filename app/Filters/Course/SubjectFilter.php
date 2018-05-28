<?php

namespace App\Filters\Course;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class SubjectFilter extends FilterAbstract
{

    public function mappings()
    {
        //$sub = \App\Subject::orderBy('name' , 'asc')->pluck('slug')->toArray();
        //return array_combine($sub, $sub);
        return \App\Subject::get()->pluck('name','slug');
    }
  
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
