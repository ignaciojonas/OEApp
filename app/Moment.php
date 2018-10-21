<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moment extends Model
{
    protected $fillable = ['title', 'briefDescription', 'procedure', 'forecastsDevelopment', 'recordsTeachers', 'resourceStudents', 'classroomRecords'];
}
