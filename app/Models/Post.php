<?php

namespace App\Models;

use BaseModel;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $table = 'posts';

  public function user()
	{
		return $this->belongsTo('App\User', 'created_by', 'id');
	}

  public static $rules = [
    'title' => 'required|min:2|max:100',
    'url' => 'required|url',
    'content' => 'required'
  ];
}
