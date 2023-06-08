<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Type;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::Paginate(3);
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

    Public function filtrer(Request $request){
        $city = $request->ville;
        $posts = Post::where('adress','like','%'. $city .'%')->get();

        return view('annonces.index',compact('posts'));
        // return $posts;
    }

    public function reserver(Post $post,Request $request){
        $post = Post::find($post->id);
        $user = User::find(auth()->user()->id);

        $dateDebut = Carbon::parse($request->date_debut);
        $dateFin = Carbon::parse($request->date_fin);
        $jours = $dateDebut->diffInDays($dateFin);
        $montant = $post->prix * $jours;

        $post->users()->attach($user,[
            'date_debut'=>$dateDebut,
            'date_fin'=>$dateFin,
            'jours'=>$jours,
            'montant'=>$montant
        ]);
        return redirect()->back()->with('sent','Bien Résevée');
    }
}


// $diff =strtotime($dd) - strtotime($df);
// return abs(round($diff/86400));