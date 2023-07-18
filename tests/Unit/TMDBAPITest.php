<?php

namespace Tests\Unit;

use App\Models\dbmovies;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class TMDBAPITest extends TestCase
{
    /**
     * Test TMDB API
     *
     * @return void
     */
    public function test_TMDB_Api()
    {

        $response = Http::get('https://api.themoviedb.org/3/trending/movie/day',[
            'language'=>'en-US',
            'api_key'=>'0f7d52a8e7a69ab75f2699002f7ed225',
            'accept' => 'application/json'
        ]);
        $moviesData=json_decode($response->body());

       if($moviesData) {
           $this->assertTrue(true);
       }
    }
}
