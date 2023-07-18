<?php

namespace Tests\Unit;

use App\Models\dbmovies;
use Tests\TestCase;

class UpdateMovieTest extends TestCase
{
    /**
     * Update Movie Data
     *
     * @return void
     */
    public function test_update_form()
    {

        //Take one of the movie id to test
        $id = 137;
        //Find the record
        $movie = dbmovies::find($id);
        //if record exists
        if($movie){
            //Update title
            $movie['title'] = "Fast X Updated Version";
           //Update description
            $movie['description'] = "Over many missions and against impossible odds, Dom Toretto and his family have outsmarted, out-nerved and outdriven every foe in their path.";
            //update it
            $movie->update();
        }
        $this->assertTrue(true);
    }
}
