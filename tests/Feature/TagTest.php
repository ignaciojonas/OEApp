<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Tag;

class TagTest extends TestCase
{
    public function testListTag()
    {
      $user = factory(User::class)->create();
      $tag = factory(Tag::class)->create();
      $response = $this->actingAs($user)
                       ->get('/tag');
      $response->assertStatus(200)
               ->assertSee($tag->name)
               ->assertSee('Lista de Tags')
               ->assertSee('Crear');
    }

    public function testCreateTag()
    {
      $user = factory(User::class)->create();
      $response = $this->actingAs($user)
                       ->get('/tag/create');
      $response->assertStatus(200)
               ->assertSee('Grabar');
    }

    public function testEditTag()
    {
      $user = factory(User::class)->create();
      $tag = factory(Tag::class)->create();

      $response = $this->actingAs($user)
                       ->get("/tag/$tag->id/edit");
      $response->assertStatus(200)
               ->assertSee($tag->name)
               ->assertSee('Actualizar');
    }

    public function testShowTag()
    {
      $user = factory(User::class)->create();
      $tag = factory(Tag::class)->create();

      $response = $this->actingAs($user)
                       ->get("/tag/$tag->id");
      $response->assertStatus(200)
               ->assertSee($tag->name)
               ->assertDontSee('Actualizar')
               ->assertDontSee('Grabar');
    }

    public function testDeleteTag()
    {
      $user = factory(User::class)->create();
      $tag = factory(Tag::class)->create();
      $data =[
             "name" => $tag->name,
             "description" => $tag->description,
             ];

      $response = $this->actingAs($user)
                       ->delete("/tag/$tag->id");

      $response->assertRedirect("/tag");
      $this->assertDatabaseMissing('tags', $data);;
    }

    public function testStoreTag()
    {
      $user = factory(User::class)->create();
      $tag = factory(Tag::class)->make();
      $data =[
              "name" => $tag->name,
              "description" => $tag->description,
           ];
      $response = $this->actingAs($user)
                        ->post("/tag",$data);
      $response->assertRedirect("/tag");

      $this->assertDatabaseHas('tags', $data);;
    }

    public function testUpdateTag()
    {
      $user = factory(User::class)->create();
      $tag = factory(Tag::class)->create();
      $new_tag = factory(Tag::class)->make();
      $data =[
              "name" => $tag->name,
              "description" => $tag->description,
           ];
      $response = $this->actingAs($user)
                        ->put("/tag/$tag->id",$data);
      $response->assertRedirect("/tag");
      $this->assertDatabaseHas('tags', $data);;
    }
}
