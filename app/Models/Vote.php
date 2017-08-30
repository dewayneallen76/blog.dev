<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
  public function users()
  {
    return $this->hasMany('App\Users', 'user_id');
  }

  public function posts()
  {
    return $this->hasMany('App\Models\Posts', 'post_id');
  }
}
