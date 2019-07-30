<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Tag;

class UserTest extends TestCase
{
    public function testListAuthors()
    {
      $user = factory(User::class)->create();
      $response = $this->actingAs($user)
                       ->get('/user');
      $response->assertStatus(200)
               ->assertSee($user->name)
               ->assertSee('Lista de Autores')
               ->assertSee('Crear');
    }

    public function testCreateUser()
    {
      $user = factory(User::class)->create();
      $response = $this->actingAs($user)
                       ->get('/user/create');
      $response->assertStatus(200)
               ->assertSee('Grabar');
    }

    public function testEditUser()
    {
      $this->withoutExceptionHandling();
      $user = factory(User::class)->create();

      $response = $this->actingAs($user)
                       ->get("/user/$user->id/edit");
      $response->assertStatus(200)
               ->assertSee($user->name)
               ->assertSee('Actualizar');
    }

    public function testShowUser()
    {
      $this->withoutExceptionHandling();
      $user = factory(User::class)->create();

      $response = $this->actingAs($user)
                       ->get("/user/$user->id");
      $response->assertStatus(200)
               ->assertSee($user->name)
               ->assertDontSee('Actualizar')
               ->assertDontSee('Grabar');
    }

    public function testDeleteUser()
    {
      $user = factory(User::class)->create();
      $userToDelete = factory(User::class)->create();
      $data =[
             "name" => $userToDelete->name,
             "email" => $userToDelete->email,
             ];

      $response = $this->actingAs($user)
                       ->delete("/user/$userToDelete->id");

      $response->assertRedirect("/user");
      $this->assertDatabaseMissing('users', $data);;
    }

    public function testStoreUser()
    {
      $user = factory(User::class)->create();
      $userToStore = factory(User::class)->make();
      $data =[
              "name" => $userToStore->name,
              "email" => $userToStore->email,
           ];
      $response = $this->actingAs($user)
                        ->post("/user",$data);
      $response->assertRedirect("/user");

      $this->assertDatabaseHas('users', $data);;
    }

    public function testUpdateUser()
    {
      $user = factory(User::class)->create();
      $existing_user = factory(User::class)->create();
      $new_user = factory(User::class)->make();
      $data =[
              "name" => $new_user->name,
              "email" => $new_user->email,
              "password" => "mypassword",
           ];
      $response = $this->actingAs($user)
                        ->put("/user/$user->id",$data);
      $response->assertRedirect("/user");
      unset($data['password']);
      $this->assertDatabaseHas('users', $data);;
    }
}
