<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\File;

class FileTest extends TestCase
{

    public function testDeleteFile()
    {
      $user = factory(User::class)->create();
      $file = factory(File::class)->create();
      $data =[
             "name" => $file->name,
             "type" => $file->type,
             "path" => $file->path,
             ];

      $response = $this->actingAs($user)
                       ->delete("/file/$file->id");
      $this->assertDatabaseMissing('files', $data);;
    }
}
