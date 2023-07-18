<?php

namespace Tests\Unit;

use Tests\TestCase;

class EditMovieTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_edit_form()
    {
        //Take one of the movie id to test
        $id = 140;
        $response = $this->get('/edit/'.$id);
        $response->assertStatus(200);
    }

}
