<?php

namespace App\Http\Controllers;

use App\Models\dbmovies;
use App\Models\movies;
use App\Models\Tmdbmovies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TmdbmoviesController extends Controller
{
    //fetch the movies data from TMDB
    public function fetchMovies(){
        $response = Http::get('https://api.themoviedb.org/3/trending/movie/day',[
            'language'=>'en-US',
             'api_key'=>'0f7d52a8e7a69ab75f2699002f7ed225',
            'accept' => 'application/json'
            ]);
        $moviesData=json_decode($response->body());

        foreach ($moviesData->results as $m) {
//            dump($m->title);
            $tmdbMovies = new dbmovies();
            $tmdbMovies['title'] = $m->title;
            $tmdbMovies['description'] = $m->overview;
            $tmdbMovies->save();
        }


        return "Data fetched and saved in db";

    }
    //Show the movies data
    public function showMovies(){
       $data['movies']=dbmovies::all();
       return view('welcome', $data);
    }

    //Modify the movie data
    public function editMovies($id){
//        $data['movies']=dbmovies::all();
//        return view('welcome', $data);
        $movie = dbmovies::find($id);
        return view('edit');

    }
}
