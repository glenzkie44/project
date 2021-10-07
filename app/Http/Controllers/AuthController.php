<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Symfony\Contracts\Service\Attribute\Required;

class AuthController extends Controller
{
    public function registrationForm(){
        return view ('register');
    }
    public function loginForm(){
        return view('login');
    }
    public function register(Request $request){
        $request->validate([
            'fname' => 'string|required',
            'lname' => 'string|required',
            'phone' => 'string|required',
            'email' => 'email|required',
            'password' => 'string|required'
        ]);
        
        $token = Str::random(24);

        $user = User::create([
            'name' => $request->fname.' '.$request->lname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => $token
        ]);

        return redirect('/login')->with('Message', 'Your account has been created. You may now login.');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'email|required',
            'password' => 'string|required'
        ]);

        $user = User::where('email', $request->email)->first();

        $login = auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]); 

        if(!$login){
            return back()->with('Error', 'Invalid Credentials');
        }
        return redirect('/items');
    }

}
