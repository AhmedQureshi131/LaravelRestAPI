<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class SWAPIAPITest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_SWAPI_Api()
    {

        $response = Http::get('https://swapi.dev/api/starships/');

        $moviesData=json_decode($response->body());

        if($moviesData) {
            $this->assertTrue(true);
        }
    }
}
