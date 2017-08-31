<?php

namespace App\Models;

use App\User;
use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Model;

class Post extends BaseModel
{
  protected $table = 'posts';

  public static $rules = [
    'title' => 'required|min:2|max:100',
    'url' => 'required|url',
    'content' => 'required'
  ];

  public function user()
	{
		return $this->belongsTo('App\User', 'created_by');
	}

  public function votes()
  {
    return $this->hasMany('App\Models\Vote', 'vote_id');
  }

  public static function search($search)
  {
    $posts = Post::with('user')
                    ->where('title', 'LIKE', '%' . $search . '%')
                    ->orWhere('content', 'LIKE', '%' . $search . '%')
                    ->orderBy('created_at', 'DESC')
                    ->get();
    return $posts;
  }

}
