<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckUserId;

Route::get('/', function () {
    return view('welcome');
})->middleware([CheckUserId::class]);

Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'login_action']);

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'register_action']);

Route::get('/users', [UserController::class, 'show_user']);
Route::get('/user/{id}', [UserController::class, 'update_user']);
Route::put('/user', [UserController::class, 'update_user_action']);
Route::delete('/user', [UserController::class, 'delete_user']);

Route::get('/hello', function () {
    return view('test');
});

Route::get('/home/{user?}', [Mycontroller::class, 'index']);
Route::post('/myprocess', [Mycontroller::class, 'process']);
