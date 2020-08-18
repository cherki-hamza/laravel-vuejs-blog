<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Profile extends Model
{

    protected $guarded = [];

    // relation the profile belongsTo user
    public function user(){
        return $this->belongsTo(User::class);
    }

}
