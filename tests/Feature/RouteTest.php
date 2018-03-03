<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RouteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRouteRoot()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRouteTasks()
    {
        $response = $this->get('/tasks');

        $response->assertStatus(200);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRouteTask()
    {
        $response = $this->get('/tasks/{$id}');

        $response->assertStatus(200);
    }
}
