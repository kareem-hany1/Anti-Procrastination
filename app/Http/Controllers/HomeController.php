<?php

namespace App\Http\Controllers;



use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
        public function index(){
            return view('home.index');
        }
        public function login(){
            if(Auth::check()){
                return redirect('/tasks');
            }
            return view('home.login');
        }
        public function register(){
            if(Auth::check()){
                return redirect('/tasks');
            }
                return view('home.register');
        }
}
