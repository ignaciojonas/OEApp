<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\File;
use App\FileRecord;

class FileRecordTest extends TestCase
{
    public function testFile()
    {
      $fileRecord = factory(FileRecord::class)->create();
      $fileRecord->file_id = factory(File::class)->create(['name'=>'Test File'])->id;
      $fileRecord->save();
      $this->assertEquals($fileRecord->file->name,'Test File');
    }

}
