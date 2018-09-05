<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moment extends Model
{
    protected $fillable = ['title', 'description', 'developmentForecast', 'registrationTeacher', 'resourcesStudent', 'classroomRecord'];
}
