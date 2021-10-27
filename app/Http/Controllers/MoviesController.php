<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\MoviesActor;

class MoviesController extends Controller
{
    public function index()
    {
        $moviesactors = MoviesActor::all();
        return view('movies.index')
                ->with('moviesactors', $moviesactors);
    }

    public function show(MoviesActor $moviesactor)
    {
        $movies = Movie::all();
        return view('movies.show')
            ->with(compact('moviesactor'))
            ->with(compact('movies'));
    }
}
