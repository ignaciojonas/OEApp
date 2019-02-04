<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileRecord extends Model
{
    protected $fillable = ['record_id', 'file_id'];

    public function file()
    {
        return $this->hasOne('App\File','id', 'file_id');
    }
}
