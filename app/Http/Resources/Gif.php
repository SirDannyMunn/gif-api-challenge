<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class Gif extends ResourceCollection
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     *
     * @return array
     */
    public function toArray($request)
    {
        $gifs = [];

        foreach ($this->collection as $gif) {
            array_push($gifs, [
                'data' => [
                    'gif' => [
                        'name' => ucfirst($gif->name),
                        'url' => url(strtolower($gif->name))
                    ]
                ],
            ]);
        }

        return $gifs;
    }
}
