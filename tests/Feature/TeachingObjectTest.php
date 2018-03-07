<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\TeachingObject;

class TeachingObjectTest extends TestCase
{
    public function testListTeachingObject()
    {
      $user = factory(User::class)->create();
      $teachingObject = factory(TeachingObject::class)->create();
      $response = $this->actingAs($user)
                       ->get('/teachingObject');
      $response->assertStatus(200)
               ->assertSee($teachingObject->title)
               ->assertSee('Objeto de Enseñanza')
               ->assertSee('Crear')
               ->assertSee('Delete')
               ->assertSee('Editar');
    }

    public function testCreateTeachingObject()
    {
      $user = factory(User::class)->create();
      $response = $this->actingAs($user)
                       ->get('/teachingObject/create');
      $response->assertStatus(200)
               ->assertSee('Grabar');
    }

    public function testEditTeachingObject()
    {
      $user = factory(User::class)->create();
      $teachingObject = factory(TeachingObject::class)->create();

      $response = $this->actingAs($user)
                       ->get("/teachingObject/$teachingObject->id/edit");
      $response->assertStatus(200)
               ->assertSee($teachingObject->title)
               ->assertSee('Actualizar');
    }

    public function testShowTeachingObject()
    {
      $user = factory(User::class)->create();
      $teachingObject = factory(TeachingObject::class)->create();

      $response = $this->actingAs($user)
                       ->get("/teachingObject/$teachingObject->id");
      $response->assertStatus(200)
               ->assertSee($teachingObject->title)
               ->assertDontSee('Actualizar')
               ->assertDontSee('Grabar');
    }

    public function testDeleteTeachingObject()
    {
      $user = factory(User::class)->create();
      $teachingObject = factory(TeachingObject::class)->create();
      $data =[
             "title" => $teachingObject->title,
             "theme" => $teachingObject->theme,
             "content" => $teachingObject->content,
             "goal" => $teachingObject->goal,
             "approach" => $teachingObject->approach,
             "recipients" => $teachingObject->recipients,
             "date" => $teachingObject->date,
             "place" => $teachingObject->place,
           ];

      $response = $this->actingAs($user)
                       ->delete("/teachingObject/$teachingObject->id");

      $response->assertRedirect("/teachingObject");
      $this->assertDatabaseMissing('teaching_objects', $data);;
    }

    public function testStoreTeachingObject()
    {
      $user = factory(User::class)->create();
      $teachingObject = factory(TeachingObject::class)->make();
      $data =[
             "title" => $teachingObject->title,
             "theme" => $teachingObject->theme,
             "content" => $teachingObject->content,
             "goal" => $teachingObject->goal,
             "approach" => $teachingObject->approach,
             "recipients" => $teachingObject->recipients,
             "date" => $teachingObject->date,
             "place" => $teachingObject->place,
           ];
      $response = $this->actingAs($user)
                        ->post("/teachingObject",$data);
      $response->assertRedirect("/teachingObject");

      $this->assertDatabaseHas('teaching_objects', $data);;
    }

    public function testUpdateTeachingObject()
    {
      $user = factory(User::class)->create();
      $teachingObject = factory(TeachingObject::class)->create();
      $teachingObject->authors()->save($user);
      $new_teachingObject = factory(TeachingObject::class)->make();
      $data =[
             "title" => $new_teachingObject->title,
             "theme" => $new_teachingObject->theme,
             "content" => $new_teachingObject->content,
             "goal" => $new_teachingObject->goal,
             "approach" => $new_teachingObject->approach,
             "recipients" => $new_teachingObject->recipients,
             "date" => $new_teachingObject->date,
             "place" => $new_teachingObject->place,
           ];
      $response = $this->actingAs($user)
                        ->put("/teachingObject/$teachingObject->id",$data);
      $response->assertRedirect("/teachingObject");
      $this->assertDatabaseHas('teaching_objects', $data);;
    }
}
