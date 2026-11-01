<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/teams', function () {
    return view('teams');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/join', function () {
    return view('join');
});
