<?php

namespace App\Http\Controllers;

use App\Models\dbmovies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TmdbmoviesController extends Controller
{
    //fetch TMDB movies data
    public function TMDBMovies(){
        //fetch data from API
        $response = Http::get('https://api.themoviedb.org/3/trending/movie/day',[
            'language'=>'en-US',
             'api_key'=>'0f7d52a8e7a69ab75f2699002f7ed225',
            'accept' => 'application/json'
            ]);
        $moviesData=json_decode($response->body());

        foreach ($moviesData->results as $m) {
            $tmdbMovies = new dbmovies();
            //Set Title
            $tmdbMovies['title'] = $m->title;
            //Set description
            $tmdbMovies['description'] = $m->overview;
            //Save in db
            $tmdbMovies->save();
        }
        //Redirect it to home page with status message
        return redirect('/')->with('status', "TMDB Data fetched and saved in db");
    }

    //fetch SWAPI movies data
    public function SwapiMovies(){
        //fetch data from API
        $response = Http::get('https://swapi.dev/api/starships/');
        $moviesData=json_decode($response->body());

        foreach ($moviesData->results as $m) {
            $tmdbMovies = new dbmovies();
            //Set title
            $tmdbMovies['title'] = $m->name;
            //Set description
            $tmdbMovies['description'] = $m->manufacturer;
            //Save in db
            $tmdbMovies->save();
        }
       //redirect it to home page with status message
        return redirect('/')->with('status', "SWAPI Data fetched and saved in db");

    }

    //Show the movies data
    public function showMovies(){
        //get all movies data from db
       $data['movies']=dbmovies::all();
       //display the data in a view
       return view('welcome', $data);
    }

    //Modify the movie data
    public function editMovies($id){
        //find the movie data by passing the id
        $movieData['movie'] = dbmovies::find($id);
        //show it in a view
        return view('edit', $movieData);

    }

    //Update the movie data
    public function updateMovies(Request $req, $id){
        //find the movie data by passing the id
        $movieData = dbmovies::find($id);
        //set the title
        $movieData['title'] = $req->input('title');
        //set the description
        $movieData['description'] = $req->input('description');
        //update the movie data
        $movieData->update();
        //redirect it to the home page with status
        return redirect('/')->with('status', "Data Updated Successfully");
    }

    //Remove the movie data
    public function removeMovies($id){
        //find the movie data by passing the id
        $movieData = dbmovies::find($id);
        //delete it from the db
        $movieData->delete();
        //redirect it to the home page with status
        return redirect('/')->with('status', "Data removed successfully");
    }
}
