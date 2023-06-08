<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function show(){
        $users = User::whereIn('id',function($query){
            $query->select('user_id')
            ->from('reservations');
        })->get();
        
        return view('admin.reservations.index',compact('users'));
    }
}
