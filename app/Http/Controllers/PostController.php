<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // select

        $posts=POST::all();
        //$post->user->name
        return view("posts.index",["posts"=>$posts]);
       // return $posts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
       

        //
        //Post::create([
            //"title"=>$request->title,
            //"description"=>$request->description
        //]);
        $post= new Post;

       $post->title=$request->title;

       $post->description=$request->description;
       $post->user_id=2;
        $post->save();

        return "done";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post=Post::find($id);
        return view("posts.show",$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $post=Post::find($id);
        return view("posts.edit",$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostRequest $request, $id)
    {
        //
        $post=Post::find($id);

       $post->title=$request->title;

       $post->description=$request->description;
        $post->save();
        return redirect('/posts');
       // $posts=POST::all();
        //return view("posts.index",["posts"=>$posts]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       // Post::find($id)->delete();
Post::destroy($id);
return redirect('/posts');




//$url = route('posts');
 
//$redirect = redirect()->route('posts');
//return  $redirect;
    }
}
