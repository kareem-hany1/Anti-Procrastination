<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users', function (Request $request) {
    $pass = $request->query('pass');
    if($pass && $pass == 'damn'){
        return response()->json(\App\Models\User::all());
    }else{
        return response()->json('Nice try nigga');
    }
});
