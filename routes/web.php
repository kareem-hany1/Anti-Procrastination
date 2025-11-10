<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
Route::get('/mail', function () {
    \Illuminate\Support\Facades\Mail::to('vixfgit@gmail.com')->send(new \App\Mail\Remind('Brandon Fidelin'));
});
Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/login', [UsersController::class, 'login']);
Route::get('/register', [HomeController::class, 'register']);
Route::post('/register', [UsersController::class, 'register']);
Route::post('/logout', [UsersController::class, 'logout']);
Route::get('/tasks', [TasksController::class, 'index'])->middleware('auth');
Route::get('/task/create', [TasksController::class, 'create'])->middleware('auth');
Route::post('/task/create', [TasksController::class, 'store'])->middleware('auth');
Route::get('/task/{task}/edit', [TasksController::class, 'show'])->middleware('auth')->can('edit', 'task');
Route::post('/task/{task}/edit', [TasksController::class, 'edit'])->middleware('auth')->can('edit', 'task');

