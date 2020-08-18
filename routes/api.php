<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

// posts resource
Route::apiResource('/posts' , 'frontend\SiteController');
// category resource
Route::apiResource('/categories' , 'backend\CategoryController');
// users resource
Route::apiResource('/users' , 'backend\UsersController');
// get posts by category
Route::get('/posts/category/{slug}' , 'frontend\SiteController@category');
// comments
Route::apiResource('/comments' , 'frontend\CommentsController');
