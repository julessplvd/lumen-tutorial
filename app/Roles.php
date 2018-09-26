<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
  protected $fillable = ['type'];

    public function authors()
    {
        return $this->hasMany('App\Author');
    }

}