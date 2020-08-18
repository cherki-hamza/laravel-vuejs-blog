<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Category extends Model
{

    protected $guarded = [];

    // function relation the Category hase Many Posts
    public function posts(){
        return $this->hasMany(Post::class);
    }

    // convert the route by id on route by slug accept the slug
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
