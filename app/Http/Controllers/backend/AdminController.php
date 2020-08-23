<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    // function to show the admin dashboard
    public function dashboard(){
        return view('backend.admin.index');
    }

    // function store to save new post
    public function store(Request $request){
        $image_name = null;
        if ($request->hasFile('photo')){
            $image_name = time().'.'.$request->photo->getClientOriginalName();
            $request->photo->move(public_path('images'), $image_name);
        }

        Post::create([
             'title'=> $request->get('title'),
              'slug' => Str::slug($request->get('title')),
             'category_id' => $request->get('category_id'),
              'body' => $request->get('body'),
              'photo' => '/images/'.$image_name,
             'user_id' => $request->get('user_id'),

        ]);
        return response()->json([
           'message' => 'The Post add with success',
        ]);
    }
}
