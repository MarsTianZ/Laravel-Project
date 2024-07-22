<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function showMoviesPage(Request $request)
    {
        // get the movie_title, movie_poster, movie_ratings, get all
        $moviesData = Movie::select('movie_title', 'movie_poster', 'movie_ratings','movie_slug')->get();
        return view('movies.movieslist', ["movies" => $moviesData]);
    }
    public function showMovieDetailsPage(Request $request, string $slug)
    {
        $movieData = Movie::where('movie_slug', $slug)->first();
        return view('movies.moviedetails', ["movie" => $movieData]);
    }
}
