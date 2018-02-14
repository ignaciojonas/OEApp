<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Tag;
use App\TeachingObject;

class TeachingObjectTest extends TestCase
{
    public function testAuthors()
    {
      $author1 = factory(User::class)->create();
      $author2 = factory(User::class)->create();
      $teachingObject = factory(TeachingObject::class)->create();
      $teachingObject->authors()->save($author1);
      $teachingObject->authors()->save($author2);
      $this->assertEquals($author1->id, $teachingObject->authors()->first()->id);
      $this->assertEquals(2, $teachingObject->authors()->count());
    }

    public function testAuthorsNames()
    {
      $author1 = factory(User::class)->create();
      $author2 = factory(User::class)->create();
      $teachingObject = factory(TeachingObject::class)->create();
      $teachingObject->authors()->save($author1);
      $teachingObject->authors()->save($author2);
      $this->assertEquals("$author1->name,$author2->name", $teachingObject->authorsNames());
    }

    public function testTags()
    {
      $tag1 = factory(Tag::class)->create();
      $tag2 = factory(Tag::class)->create();
      $teachingObject = factory(TeachingObject::class)->create();
      $teachingObject->tags()->save($tag1);
      $teachingObject->tags()->save($tag2);
      $this->assertEquals($tag1->id, $teachingObject->tags()->first()->id);
      $this->assertEquals(2, $teachingObject->tags()->count());
    }
}
