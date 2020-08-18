<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\User;

class Comment extends Model
{
    protected $guarded = [];
    // the comment belongs to post
    public function post(){
        return $this->belongsTo(Post::class);
    }

    // the comment belongs to user
    public function user(){
        return $this->belongsTo(User::class);
    }
}
