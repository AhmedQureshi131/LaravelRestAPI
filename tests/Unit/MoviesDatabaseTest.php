<?php

namespace Tests\Unit;

use Tests\TestCase;

class MoviesDatabaseTest extends TestCase
{
    /**
     * Test Movies Database
     *
     * @return void
     */
    public function test_database()
    {
        $this->assertDatabaseHas('dbmovies',[
            'title' => 'God Is a Bullet'
        ]);
    }
}
