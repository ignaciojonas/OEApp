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

  public function Tags()
  {
      return $this->belongsToMany('App\Tag','teaching_object_tags');
  }

  public function Resources()
  {
      return $this->belongsToMany('App\Resource', 'teaching_object_resources');
  }

  public function authorsNames()
  {
    $names = [];
    foreach ($this->authors as $author) {
      $names[] = $author->name;
    }
    return join(',', $names);
  }
}
