<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Http\Resources\Json\ResourceCollection;

class MoviesResource extends ResourceCollection
{

    /**
     * @var
     */
    private $type;

    /**
     * Create a new resource instance.
     *
     * @param  mixed $resource
     * @return void
     */
    public function __construct($resource, $type)
    {
        parent::__construct($resource);
        $this->resource = $resource;
        $this->type = $type;
    }

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     *   top rated
     *  new releases
     * comming soon
     */
    public function toArray($request)
    {

        return [
            'data' => [
                'type' => $this->type,
                'movie' => MovieResource::collection($this->collection),
            ]

        ];
    }

    public function with($request)
    {

        return [
            'links' => [
                'self' => route('movie.index'),
            ],
        ];
    }


}
