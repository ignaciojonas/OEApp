<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
      protected $fillable = ['name','type', 'path', 'link', 'geogebra_type', 'geogebra_id'];
}
