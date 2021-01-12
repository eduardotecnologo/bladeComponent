<?php

use Illuminate\Support\Facades\Route;

Route::get('/components', function(){
    return view('components');
});

Route::get('/', function () {
    return view('welcome');
});
