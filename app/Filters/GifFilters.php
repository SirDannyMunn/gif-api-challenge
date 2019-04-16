<?php

namespace App\Filters;

class GifFilters extends Filters
{
    /**
    * Registered filters to operate upon.
    *
    * @var array
    */
    protected $filters = ['search'];


    /**
    * Filter query based on a search term
    *
    * @return \Illuminate\Database\Eloquent\Builder
    */
    protected function search($name)
    {
        return $this->builder->where('name', 'LIKE', "%{$name}%");
    }
}