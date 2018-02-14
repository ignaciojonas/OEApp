<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Tag;
use App\TeachingObject;

class UserTest extends TestCase
{
    public function testTeachingObjects()
    {
      $user = factory(User::class)->create();
      $teachingObject1 = factory(TeachingObject::class)->create();
      $teachingObject2 = factory(TeachingObject::class)->create();
      $teachingObject1->authors()->save($user);
      $teachingObject2->authors()->save($user);
      $this->assertEquals($teachingObject1->id, $user->teachingObjects()->first()->id);
      $this->assertEquals(2, $user->teachingObjects()->count());
    }
}
