<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class UsersController extends Controller
{
    public function login(Request $request){

        $validated = $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required',
        ]);

        $user = Auth::attempt($validated);
       if($user){
           $request->session()->regenerate();
           return redirect('/tasks');
       }else{
           throw ValidationException::withMessages([
               'email' => "email ou mot de passe incorrect",
           ]);
       }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }


    public function register(Request $request){
        $validated = $request->validate([
            'email' => 'required|unique:users|email',
            'fullname' => 'required',
            'password' => 'required',
        ]);
        $user = User::create($validated);
        Auth::login($user);
        return redirect('/tasks');
    }
}
