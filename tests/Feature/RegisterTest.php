<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class RegisterTest extends TestCase
{
    public function testRegisterPage()
    {
      $response = $this->get('/register');

      $response->assertStatus(200)
               ->assertSee('Name')
               ->assertSee('E-Mail Address')
               ->assertSee('Password')
               ->assertSee('Confirm Password')
               ->assertSee('Register');
    }

    public function testStoreUser()
    {
      $user = factory(User::class)->make();
      $data =[
             "name" => $user->name,
             "email" => $user->email,
             'password' => 'passwordtest',
             'password_confirmation' => 'passwordtest'
           ];
       $response = $this->post("/register",$data);
       $response->assertRedirect("/");

        //Remove password and password_confirmation from array
        array_splice($data,2);

        $this->assertDatabaseHas('users', $data);;
    }
}
