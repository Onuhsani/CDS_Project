<?php

use Illuminate\Support\Facades\Route;

route::get('/user/dashboard', function(){
    return view('user.dashboard');
});

Route::get('/home', function(){
    return view('user.index');
});