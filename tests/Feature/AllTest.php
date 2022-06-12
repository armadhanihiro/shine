<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AllTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    
     //login
     public function test_login()
    {
        $response = $this->get('/login_page');

        $response->assertStatus(200);
    }

    // public function test_register()
    // {
    //     $response = $this->get('/viewcart');

    //     $response->assertStatus(404);
    // }
}
