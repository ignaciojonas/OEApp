<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeachingObject extends Model
{
  protected $fillable = ['title'];

  public function authors()
  {
      return $this->belongsToMany('App\User');  
  }
}
