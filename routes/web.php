<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/register', function() {
    return view('register');
});

route::get('/login',function(){
    return view('login');
});

route::get('/home', function(){
    return view('home');
});

route::get('/profile', function(){
    return view('profile');
});

route::get('/edit', function(){
    return view('edit');
});

route::get('/favorite', function(){
    return view('favorite');
});

route::get('/read-more', function(){
    return view('read-more');
});

