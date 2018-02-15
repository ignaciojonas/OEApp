<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class HomePageTest extends TestCase
{
    public function testHomeNoUser()
    {
        $response = $this->get('/');

        $response->assertStatus(302);
    }

    public function testHomeLoggedInUser()
    {
      $user = factory(User::class)->create();
      $response = $this->actingAs($user)
                       ->get('/');

       $response->assertStatus(200)
                ->assertSee($user->name)
                ->assertSee('Objetos de Enseñanza');
    }
}
