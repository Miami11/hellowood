<?php

namespace App\Http\Controllers;

use App\Http\Resources\MovieResource;
use App\Http\Resources\MoviesResource;
use App\Movie;
use Illuminate\Http\Request;
use App\Repositories\MovieRepository;

class MovieController extends Controller
{
    function __construct(Movie $movie, MovieRepository $movieRepository)
    {
        $this->movie = $movie;
        $this->movieRepository = $movieRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $rank = $this->movieRepository->queryOrderByRank();

        $newRelease = $this->movieRepository->queryNewRelease();

        $commingSoon = $this->movieRepository->queryCommingSoon();
        $data[] = new MoviesResource($rank->paginate(8),'topRated');
        $data[] = new MoviesResource($newRelease->paginate(8),'newRelease');
        $data[] = new MoviesResource($commingSoon->paginate(8),'commingSoon');

        return $data;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($this->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return new MovieResource($movie);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
