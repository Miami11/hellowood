<?php

namespace App\Repositories;


use App\Movie;
use Carbon\Carbon;


class MovieRepository
{
    /**
     * @var Movie
     */
    private $entity;

    /**
     * AnswerRepository constructor.
     */
    public function __construct(
        Movie $entity
    )
    {
        $this->entity = $entity;
    }

    public function queryOrderByRank()
    {
        return $this->entity->with(['countries', 'rank'])->whereHas('rank', function ($q) {
            $q->orderBy('stars', 'desc');
        });
    }

    public function queryCommingSoon()
    {
        return $this->entity->with(['countries', 'rank'])
            ->whereBetween('release_date',[Carbon::today()->toDateString(),Carbon::today()->addDays(60)->toDateString()])
            ->orderBy('release_date', 'desc');
    }

    public function queryNewRelease()
    {
        return $this->entity->with(['countries', 'rank'])
            ->whereBetween('release_date', [Carbon::today()->subDays(120)->toDateString(), Carbon::today()->toDateString()])
            ->orderBy('release_date', 'desc');
    }
}