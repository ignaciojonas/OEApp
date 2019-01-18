<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moment extends Model
{
    protected $fillable = ['title', 'briefDescription', 'procedure', 'forecastDevelopment', 'teachers_record_id', 'resourceStudents', 'classroom_record_id'];

    public function teachersRecord()
    {
        return Record::find($this->teachers_record_id);
    }

    public function classroomRecord()
    {
        return Record::find($this->classroom_record_id);
    }
}
