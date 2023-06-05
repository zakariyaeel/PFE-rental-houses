<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Type;
use App\Models\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        $types = Type::all();
        return view('admin.posts.index',compact('posts','types'));   //->paginate(2)
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $post = new Post;
        if($request->image){
            $img = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('imgs/posts',$img);
            $post->image = $path;
        }else{
            $post->image = 'imgs/posts/default.jpg';
        }
        $post->titre = $request->titre;
        $post->description = $request->description;
        $post->adress = $request->adress;
        $post->prix = $request->prix;
        $post->etat = $request->etat;
        $post->type_id = $request->type;
        
        $post->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $posts = Post::all();
        return view('annonces.index',compact('posts'));
    }
    public function showAnnonce(Post $post){
        return view('annonces.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect()->route('posts.index');
    }
}
