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
     * $type topRated,newRelease,commingSoon
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $type = $request->get('type');
        switch ($type) {
            case "topRated":
                $rank = $this->movieRepository->queryOrderByRank();
                return new MoviesResource($rank->paginate(8), $type);
                break;
            case "newRelease":
                $newRelease = $this->movieRepository->queryNewRelease();
                return new MoviesResource($newRelease->paginate(8), $type);
                break;
            case "commingSoon":
                $commingSoon = $this->movieRepository->queryCommingSoon();
                return new MoviesResource($commingSoon->paginate(8), $type);
                break;
            default:
                return response()->json([
                    'error' => 'Incorrect search type',
                    'status' => '200'
                ]);
        }

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
