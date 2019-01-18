<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Moment;

class MomentTest extends TestCase
{
    public function testListMoment()
    {
      $user = factory(User::class)->create();
      $moment = factory(Moment::class)->create();
      $response = $this->actingAs($user)
                       ->get('/moment');
      $response->assertStatus(200)
               ->assertSee($moment->procedure)
               ->assertSee('Lista de Momentos')
               ->assertSee('Crear')
               ->assertSee('Borrar')
               ->assertSee('Editar');
    }

    public function testCreateMoment()
    {
      $user = factory(User::class)->create();
      $response = $this->actingAs($user)
                       ->get('/moment/create');
      $response->assertStatus(200)
               ->assertSee('Grabar');
    }

    public function testEditMoment()
    {
      $user = factory(User::class)->create();
      $moment = factory(Moment::class)->create();

      $response = $this->actingAs($user)
                       ->get("/moment/$moment->id/edit");
      $response->assertStatus(200)
               ->assertSee($moment->procedure)
               ->assertSee('Actualizar');
    }

    public function testShowMoment()
    {
      $user = factory(User::class)->create();
      $moment = factory(Moment::class)->create();

      $response = $this->actingAs($user)
                       ->get("/moment/$moment->id");
      $response->assertStatus(200)
               ->assertSee($moment->procedure)
               ->assertDontSee('Actualizar')
               ->assertDontSee('Grabar');
    }

    public function testDeleteMoment()
    {
      $user = factory(User::class)->create();
      $moment = factory(Moment::class)->create();
      $data =[
             "procedure" => $moment->procedure,
             "forecastDevelopment" => $moment->forecastDevelopment,
             "teachers_record_id" => $moment->teachersRecord()->id,
             "resourceStudents" => $moment->resourceStudents,
             "classroom_record_id" => $moment->classroomRecord()->id,
             ];

      $response = $this->actingAs($user)
                       ->delete("/moment/$moment->id");

      $response->assertRedirect("/moment");
      $this->assertDatabaseMissing('moments', $data);;
    }

    public function testStoreMoment()
    {
      $user = factory(User::class)->create();
      $moment = factory(Moment::class)->make();
      $data =[
            "title" => $moment->title,
            "briefDescription" => $moment->briefDescription,
            "procedure" => $moment->procedure,
            "forecastDevelopment" => $moment->forecastDevelopment,
            "teachersRecord" => $moment->teachersRecord()->record,
            "resourceStudents" => $moment->resourceStudents,
            "classroomRecord" => $moment->classroomRecord()->record,
           ];
      $response = $this->actingAs($user)
                        ->post("/moment",$data);

      $response->assertRedirect("/moment");
      unset($data['teachersRecord']);
      unset($data['classroomRecord']);
      $this->assertDatabaseHas('moments', $data);
      $this->assertDatabaseHas('records', ["record" => $moment->teachersRecord()->record]);
      $this->assertDatabaseHas('records', ["record" => $moment->classroomRecord()->record]);
    }

    public function testUpdateMoment()
    {
      $user = factory(User::class)->create();
      $moment = factory(Moment::class)->create();
      $new_moment = factory(Moment::class)->make();
      $data =[
            "procedure" => $moment->procedure,
            "forecastDevelopment" => $moment->forecastDevelopment,
            "teachersRecord" => $moment->teachersRecord()->record,
            "teachers_record_id" => $moment->teachersRecord()->id,
            "resourceStudents" => $moment->resourceStudents,
            "classroomRecord" => $moment->classroomRecord()->record,
            "classroom_record_id" => $moment->classroomRecord()->id,
           ];
      $response = $this->actingAs($user)
                        ->put("/moment/$moment->id",$data);
      $response->assertRedirect("/moment");
      unset($data['teachersRecord']);
      unset($data['classroomRecord']);
      $this->assertDatabaseHas('moments', $data);;
    }
}
