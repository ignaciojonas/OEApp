<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Resource;

class ResourceTest extends TestCase
{
    public function testListResource()
    {
      $user = factory(User::class)->create();
      $resource = factory(Resource::class)->create();
      $response = $this->actingAs($user)
                       ->get('/resource');
      $response->assertStatus(200)
               ->assertSee($resource->name)
               ->assertSee('Lista de Recursos')
               ->assertSee('Crear');
    }

    public function testCreateResource()
    {
      $user = factory(User::class)->create();
      $response = $this->actingAs($user)
                       ->get('/resource/create');
      $response->assertStatus(200)
               ->assertSee('Grabar');
    }

    public function testEditResource()
    {
      $user = factory(User::class)->create();
      $resource = factory(Resource::class)->create();

      $response = $this->actingAs($user)
                       ->get("/resource/$resource->id/edit");
      $response->assertStatus(200)
               ->assertSee($resource->name)
               ->assertSee('Actualizar');
    }

    public function testShowResource()
    {
      $user = factory(User::class)->create();
      $resource = factory(Resource::class)->create();

      $response = $this->actingAs($user)
                       ->get("/resource/$resource->id");
      $response->assertStatus(200)
               ->assertSee($resource->name)
               ->assertDontSee('Actualizar')
               ->assertDontSee('Grabar');
    }

    public function testDeleteResource()
    {
      $user = factory(User::class)->create();
      $resource = factory(Resource::class)->create();
      $data =[
             "name" => $resource->name,
             "type" => $resource->type,
             ];

      $response = $this->actingAs($user)
                       ->delete("/resource/$resource->id");

      $response->assertRedirect("/resource");
      $this->assertDatabaseMissing('resources', $data);;
    }

    public function testStoreResource()
    {
      Storage::fake('resources');
      $user = factory(User::class)->create();
      $resource = factory(Resource::class)->make();
      $data =[
              "name" => $resource->name,
              "type" => $resource->type
           ];
      $request = $data;
      $request["document"] = UploadedFile::fake()->create('document.pdf', 10);
      $response = $this->actingAs($user)
                        ->post("/resource",$request);
      $response->assertRedirect("/resource");

      $this->assertDatabaseHas('resources', $data);
      $createdResource = Resource::where('name', $resource->name)->first();
      $this->assertTrue($createdResource->path != '');
    }

    public function testUpdateResource()
    {
      Storage::fake('resources');
      $user = factory(User::class)->create();
      $resource = factory(Resource::class)->create();
      $new_resource = factory(Resource::class)->make();
      $data =[
              "name" => $new_resource->name,
              "type" => $new_resource->type,
           ];
      $request = $data;
      $request["document"] = UploadedFile::fake()->create('document.pdf', 10);
      $response = $this->actingAs($user)
                        ->put("/resource/$resource->id", $request);
      $response->assertRedirect("/resource");
      $this->assertDatabaseHas('resources', $data);;
      $resource = $resource->fresh();
      $this->assertTrue($resource->path != '');
    }
}
