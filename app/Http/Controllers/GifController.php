<?php

namespace App\Http\Controllers;

use App\Gif;
use Illuminate\Http\Request;
use App\Filters\GifFilters;
use App\Http\Resources\Gif as GifResource;

class GifController extends Controller
{
    /**
    *
    * @var \App\Gif
    */
    private $gif;

    /**
     * Create a new GifController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->gif = new Gif();
    }

    /**
     * Returns array of gif objects.
     *
     * @return void
     */
    public function index(Request $request, GifFilters $filters)
    {
        return new GifResource($this->gif->filter($filters)->get());
    }
}
