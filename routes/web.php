<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/test', function () {
    return view('welcome');
});*/

/*Route::get('/posts', function () {
    $posts=[
        [

    
        "id"=>1,
        "name"=>"mirette",
        "body"=>"hi mirette",
        "title"=>"title mirette"
    ],[

    
        "id"=>2,
        "name"=>"maria",
        "body"=>"hi maria",
        "title"=>"title maria"
    ],
    [

    
        "id"=>3,
        "name"=>"john",
        "body"=>"hi john",
        "title"=>"title john"
    ],




    [

    
        "id"=>4,
        "name"=>"mark",
        "body"=>"hi mark",
        "title"=>"title mark"
    ]
    ];return view('posts.index',["posts"=>$posts]);
});
Route::get('/show/{id}', function ($id) {

    $post= [

    
        "id"=>$id,
        "name"=>"mark",
        "body"=>"hi mark",
        "title"=>"title mark"
    ];
return view('posts.show',$post);
})->where('id','[0-9]+');

Route::get('/edit/{id}', function ($id) {

    $post= [

        "id"=>$id,
        "name"=>"mark",
        "body"=>"hi mark",
        "title"=>"title mark"
    ];
return view('posts.edit',$post);});

Route::post("update", function () {

    return "update" ;});

    Route::get("/create", function () {
        return view("posts.create");});

        Route::post("/store", function () {
            return "store" ;});*/


Route::resource('posts',PostController::class);

Route::get("/users/create",[UserController::class,"create"]);
Route::post("/users",[UserController::class,"store"]);