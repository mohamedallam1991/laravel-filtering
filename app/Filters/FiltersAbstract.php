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

    public function add(array $filters)
    {
        return $this->filters = array_merge($this->filters, $filters);
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
        return array_filter($this->request->only(array_keys($this->filters)));
    }
    

}
