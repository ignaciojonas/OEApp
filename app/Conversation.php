<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
  protected $fillable = ['message', 'user_id', 'teaching_object_id'];

      public function user()
      {
          return $this->belongsTo(User::class);
      }

      public function teachingObject()
      {
          return $this->belongsTo(TeachingObject::class);
      }
}
