<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class LoginTest extends TestCase
{
    public function testLoginRedirectIfAuthenticated()
    {
      $user = factory(User::class)->create();
      $response = $this->actingAs($user)
                       ->get('/login');

       $response->assertStatus(302);
    }
}
