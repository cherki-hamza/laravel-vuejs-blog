<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use App\User;
use App\Profile;

class UsersController extends Controller
{

    // function to register new use and new profile
    public function register(Request $request){

        $user = User::create([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
        ]);
        $profile = Profile::create([
            'user_id' => $user->id,
            'picture' => $user->getGravatar(),
        ]);
        return response()->json([
            'logged' => true,
            'id' => $user->id,
            'name' => $user->name,
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'email' => $user->email,
            'admin' => $user->role,
            'profile_picture' => $profile->picture,
        ]);
    }

    // function to login
    public function login(Request $request){

        if (auth()->attempt(['email'=>$request->get('email') , 'password'=>$request->get('password')])){
            return response()->json([
                'logged' => true,
                'id' => auth()->user()->id,
                'name' => auth()->user()->name,
                'first_name' => auth()->user()->first_name,
                'last_name' => auth()->user()->last_name,
                'email' => auth()->user()->email,
                'img' => auth()->user()->profile->picture,
                'admin' => auth()->user()->role,
            ]);
         }else{
            return response()->json([
                'error' => 'Oops this user not found or the email or password not found',
            ]);
        }
    }



}
