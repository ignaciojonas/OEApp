<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeachingObject extends Model
{
  protected $fillable = ['title','theme','content','goal','approach','recipients','date','place'];

  public function authors()
  {
      return $this->belongsToMany('App\User');
  }

  public function selectTags()
  {
    return $this->belongsToMany('App\Tag','teaching_object_tags');
  }


  public function authorsNames()
  {
    $names = '';
    foreach ($this->authors as $author) {
      $names .= $author->name.',';
    }
    return $names;
  }
}
