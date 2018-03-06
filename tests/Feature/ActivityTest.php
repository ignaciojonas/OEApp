<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Activity;

class ActivityTest extends TestCase
{
    public function testListActivity()
    {
      $user = factory(User::class)->create();
      $activity = factory(Activity::class)->create();
      $response = $this->actingAs($user)
                       ->get('/activity');
      $response->assertStatus(200)
               ->assertSee($activity->procedure)
               ->assertSee('Lista de Actividades')
               ->assertSee('Crear')
               ->assertSee('Delete')
               ->assertSee('Editar');
    }

    public function testCreateActivity()
    {
      $user = factory(User::class)->create();
      $response = $this->actingAs($user)
                       ->get('/activity/create');
      $response->assertStatus(200)
               ->assertSee('Grabar');
    }

    public function testEditActivity()
    {
      $user = factory(User::class)->create();
      $activity = factory(Activity::class)->create();

      $response = $this->actingAs($user)
                       ->get("/activity/$activity->id/edit");
      $response->assertStatus(200)
               ->assertSee($activity->procedure)
               ->assertSee('Actualizar');
    }

    public function testShowActivity()
    {
      $user = factory(User::class)->create();
      $activity = factory(Activity::class)->create();

      $response = $this->actingAs($user)
                       ->get("/activity/$activity->id");
      $response->assertStatus(200)
               ->assertSee($activity->procedure)
               ->assertDontSee('Actualizar')
               ->assertDontSee('Grabar');
    }

    public function testDeleteActivity()
    {
      $user = factory(User::class)->create();
      $activity = factory(Activity::class)->create();
      $data =[
             "procedure" => $activity->procedure,
             "suggestions" => $activity->suggestions,
             "achievementExpectation" => $activity-> achievementExpectation,
             "implementationResult" => $activity-> achievementExpectation,
             ];

      $response = $this->actingAs($user)
                       ->delete("/activity/$activity->id");

      $response->assertRedirect("/activity");
      $this->assertDatabaseMissing('activities', $data);;
    }

    public function testStoreActivity()
    {
      $user = factory(User::class)->create();
      $activity = factory(Activity::class)->make();
      $data =[
            "procedure" => $activity->procedure,
            "suggestions" => $activity->suggestions,
            "achievementExpectation" => $activity-> achievementExpectation,
            "implementationResult" => $activity-> achievementExpectation,
           ];
      $response = $this->actingAs($user)
                        ->post("/activity",$data);
      $response->assertRedirect("/activity");

      $this->assertDatabaseHas('activities', $data);;
    }

    public function testUpdateActivity()
    {
      $user = factory(User::class)->create();
      $activity = factory(Activity::class)->create();
      $new_activity = factory(Activity::class)->make();
      $data =[
            "procedure" => $activity->procedure,
            "suggestions" => $activity->suggestions,
            "achievementExpectation" => $activity-> achievementExpectation,
            "implementationResult" => $activity-> achievementExpectation,
           ];
      $response = $this->actingAs($user)
                        ->put("/activity/$activity->id",$data);
      $response->assertRedirect("/activity");
      $this->assertDatabaseHas('activities', $data);;
    }
}
