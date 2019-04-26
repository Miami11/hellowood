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
        $this->pagination = [
            'total' => $resource->total(),
            'count' => $resource->count(),
            'per_page' => $resource->perPage(),
            'current_page' => $resource->currentPage(),
            'total_pages' => $resource->lastPage()
        ];
        $this->resource = $resource->getCollection();
        parent::__construct($resource);

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
            ],
            'pagination' => $this->pagination

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
