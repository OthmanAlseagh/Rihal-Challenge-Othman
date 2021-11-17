<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CountryTest extends TestCase
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
