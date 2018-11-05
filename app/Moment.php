<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moment extends Model
{
    protected $fillable = ['procedure', 'developmentForecast', 'registrationTeacher', 'resourcesStudent', 'classroomRecord'];
}
