<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Filters\GifFilters;

class Gif extends Model
{
    /**
    * Apply all relevant Gif filters.
    *
    * @param  Builder       $query
    * @param  GifFilters $filters
    * @return Builder
    */
    public function scopeFilter($query, GifFilters $filters)
    {
        return $filters->apply($query);
    }
}