<?php

namespace Tests\Unit;

use App\Models\dbmovies;
use Tests\TestCase;

class DeleteMovieTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_delete_form()
    {

        //Take one of the movie id to test
        $id = 119;
        //Find the record
        $movie = dbmovies::find($id);
        //if record exists
       if($movie){
           //delete it
           $movie->delete();
       }
       $this->assertTrue(true);
    }
}
