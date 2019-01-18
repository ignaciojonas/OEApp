<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Moment;
use App\Record;

class MomentTest extends TestCase
{
    public function testTeachersRecord()
    {
      $moment = factory(Moment::class)->create();
      $moment->teachers_record_id = factory(Record::class)->create(['record' => 'Teacher Record Test'])->id;
      $moment->save();
      $this->assertEquals($moment->teachersRecord()->record,'Teacher Record Test');
    }

    public function testClassroomRecord()
    {
      $moment = factory(Moment::class)->create();
      $moment->classroom_record_id = factory(Record::class)->create(['record' => 'Classroom Record Test'])->id;
      $moment->save();
      $this->assertEquals($moment->classroomRecord()->record,'Classroom Record Test');
    }

}
