<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "<h1>Hello World!</h1>";
});

Route::get('/home/{user?}', [Mycontroller::class, 'index']);
Route::post('/myprocess', [Mycontroller::class, 'process']);
