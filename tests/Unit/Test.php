<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Test extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_checkIfHasName()
    {
        $response = $this->get('/count-country');

        $this->assertStringContainsString('name', $response->content());

        $response->assertSuccessful();
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_checksIsOk()
    {
        $response = $this->get('/count-country');

        $response->assertSuccessful();
    }
}
