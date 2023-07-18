<?php

namespace Tests\Unit;

use Tests\TestCase;

class StarWarsMoviesTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_starWars_form()
    {

        $response = $this->get('/');
        $response->assertStatus(200);
    }

}
