<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Category;
use App\Comment;

class Post extends Model
{
    protected $guarded = [];

    // the relation of user
    public function user(){
        return $this->belongsTo(User::class);
    }
    // the relation of category
    public function category(){
        return $this->belongsTo(Category::class , 'category_id' , 'id');
    }
    // the relation of comments
    public function comments(){
        return $this->hasMany(Comment::class)->orderBy('created_at' , 'DESC');
    }

    // convert the route by id on route by slug accept the slug
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // function to get post by latest date
    public function scopeLatest($query){
        return $query->orderBy('created_at','DESC');
    }


}
