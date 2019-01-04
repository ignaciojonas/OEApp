<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeachingObject extends Model
{
  protected $fillable = ['title','theme','content','goal','previousKnowledge','didacticIntentionality','receiver','date','place', 'generalDescription','teachingArea', 'reflection'];

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

  public function Moments()
  {
      return $this->belongsToMany('App\Moment', 'teaching_object_moments');
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
