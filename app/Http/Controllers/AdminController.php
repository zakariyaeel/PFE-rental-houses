<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Type;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
}
