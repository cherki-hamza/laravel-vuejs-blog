<?php

namespace App\Http\Controllers\frontend;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SiteController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
    // this is for show the home site page
    public function index(){
        Carbon::setLocale('en');
        // get the all latest posts and paginate to 5
       $posts = Post::latest()->paginate(5);

        // add the user by user_id in the post
        foreach ($posts as $post){
            $post->setAttribute('user',$post->user);
            $post->setAttribute('added' , Carbon::parse(strtotime($post->created_at))->diffForHumans());
            $post->setAttribute('path','/post/'.$post->slug);
            $post->setAttribute('category' ,$post->category);
            $post->setAttribute('admin_category' ,$post->category->name);
            $post->setAttribute('picture' ,$post->user->profile->picture);

        }

        return response()->json($posts);
    }

    // function to show single post
    public function show(Post $post){
        // set the local carbon lange
        Carbon::setLocale('en');

        // return the single post data
        return response()->json([ 'post' =>
            [
            'id' => $post->id,
            'title' => $post->title,
            'slug' => $post->slug,
            'body' => $post->body,
            'photo' => $post->photo,
            'category' => $post->category->name,
            'category_id' => $post->category_id,
            'user' => $post->user->name,
            'user_profile' => $post->user->profile->picture,
            'created_at' => $post->created_at->diffForHumans(),
            'comments_count' => $post->comments->count(),
            'comments'  => $this->commentsArray($post->comments),
        ]
        ]);
    }

    // function to get all comment by post
    public function commentsArray($comments){
        $jsonComments = [];
        foreach ($comments as $comment){
            array_push($jsonComments , [
                'id' => $comment->id,
                'body' => $comment->body,
                'user' => $comment->user->name,
                'created_at' => $comment->created_at->diffForHumans(),
            ]);
        }
        return $jsonComments;
    }

    // show the all Posts by category
    public function category($slug){
        Carbon::setLocale('en');
        $category = Category::where('slug' , $slug)->first();
        $posts = Post::where('category_id',$category->id)->get();
        // add the user by user_id in the post
        foreach ($posts as $post){
            $post->setAttribute('user',$post->user);
            $post->setAttribute('added' , Carbon::parse(strtotime($post->created_at))->diffForHumans());
            $post->setAttribute('path','/post/'.$post->slug);
            $post->setAttribute('category' ,$post->category);
            $post->setAttribute('picture' ,$post->user->profile->picture);

        }

        return response()->json($posts);
    }

    // function store to save new post
    public function store(Request $request){
        $image_name = null;
        if ($request->hasFile('photo')){
            $image_name = time().'.'.$request->photo->getClientOriginalName();
            $request->photo->move(public_path('images' ), $image_name);
            $image_name = '/images/'.$image_name;
        }

        Post::create([
            'title'=> $request->get('title'),
            'slug' => Str::slug($request->get('title')),
            'category_id' => $request->get('category_id'),
            'body' => $request->get('body'),
            'photo' => $image_name,
            'user_id' => $request->get('user_id'),

        ]);
        return response()->json([
            'message' => 'The Post add with success',
        ]);
    }

    // function to delete post
    public function destroy(Post $post){
        $post->delete();
        return response()->json([
           'message' => 'the post deleted with success'
        ]);
    }

    // function to update post
    public function update(Request $request, Post $post){
        $image_name = $post->photo;
        if ($request->hasFile('photo')){
            $image_name = time().'.'.$request->photo->getClientOriginalName();
            $request->photo->move(public_path('images' ), $image_name);
            $image_name = '/images/'.$image_name;
        }

        $post->update([
            'title'=> $request->get('title'),
            'slug' => Str::slug($request->get('title')),
            'category_id' => $request->get('category_id'),
            'body' => $request->get('body'),
            'photo' => $image_name,
            'user_id' => $request->get('user_id'),

        ]);
        return response()->json([
            'message' => 'The Post updated with success',
        ]);
    }
}
