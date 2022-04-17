<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function home(){
        $user = Auth::user();
        return view('home', compact('user'));
    }

    public function showlogin(){
        return view('login');
    }

    public function postlogin(){
        $email = request()->email;
        $password = request()->password;
        $cre = [
            'email'=>$email,
            'password'=>$password,
        ];
        if(Auth::attempt($cre)){
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect(url('/login'));
    }
}
