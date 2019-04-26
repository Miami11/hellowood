<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class MovieResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'attributes' => [
                'country_id' => $this->countries->name,
                'category' => array_pluck($this->categories->all(),'name'),
                'release_date' => $this->release_date,
                'title' => $this->title,
                'introduction'=> $this->introduction,
                'running_time' => $this->running_time,
                'price' => $this->price,
                'video_link' => 'https://www.youtube.com/watch?v='.$this->video_link
            ]
        ];
    }
}
