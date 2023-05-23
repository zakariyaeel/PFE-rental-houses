<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showI(){
        return view('signUp');
    }

    public function register(Request $request){
        $request->validate([
            'nom'=>'required|string',
            'prenom'=>'required|string',
            'email'=>'required|string|email|max:255|unique:users',
            'password'=>'required|min:8|confirmed'
        ]);

        $user = User::create([
            'prenom'=>$request->prenom,
            'nom'=>$request->nom,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>$request->password,
        ]);

        auth()->login($user);
        return redirect('/');
    }

    public function showC(){
        return view('login');
    }

    public function login(Request $request){
        if(Auth::attempt(["email"=>$request->email,"password"=>$request->password,"role"=>"client"])){
            $request->session()->regenerate();
            return redirect('/');
        }elseif(Auth::attempt(["email"=>$request->email,"password"=>$request->password,"role"=>"admin"])){
            $request->session()->regenerate();
            return redirect('/admin');
        }
        
        return back()->withErrors([
            'email'=>'votre email est faux'
        ])->onlyInput('email');
        
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

}
