<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

abstract class FiltersAbstract
{
    protected $request;
    
    protected $filters = [];

    public function __construct(Request $request)
    {
        return $this->request = $request;
    }

    public function filter(Builder $builder)
    {
        foreach ($this->getFilters() as $filter => $class){
            $this->resolveFilter($filter); 
        }
        return $builder;
    }

    protected function resolveFilter($filter)
    {
        return new $this->filters[$filter];
    }

    protected function getFilters()
    {
        return $this->filterFilters($this->filters);
    }  

    protected function filterFilters($filters)
    {
        return $this->request->only(array_keys($this->filters));
    }
    

}
