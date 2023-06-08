<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $clients = User::where('role','client')->orderBy('created_at','desc')->limit(3)->get();
        $revenue = DB::table('reservations')->sum('montant');
        $reservations = DB::table('reservations')->count();
        $nbrClients = User::count();
        $nbrPosts = Post::count();

        return view('admin.index',compact('clients','reservations','revenue','nbrClients','nbrPosts'));
    }
}
