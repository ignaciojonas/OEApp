<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
      protected $fillable = ['name','description'];

      public function TOs()
      {
          return $this->belongsToMany('App\TeachingObject','teaching_object_tags');
      }
}
