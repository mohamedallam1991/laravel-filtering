<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

abstract class FiltersAbstract
{
    protected $request;

    public function __construct(Request $request)
    {
        return $this->request = $request;
    }

    public function filter(Builder $builder)
    {
        return $builder;
    }
}
