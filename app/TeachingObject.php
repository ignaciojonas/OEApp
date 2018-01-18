<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeachingObject extends Model
{
  protected $fillable = ['title','theme'];

  public function authors()
  {
      return $this->belongsToMany('App\User');
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
