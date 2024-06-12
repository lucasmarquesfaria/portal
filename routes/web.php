<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
      
Route::get('/docs', function () {
    return view('docs');
});

Route::get('/historico', function () {
    return view('historico');
});

Route::get('/config', function () {
    return view('config');
});

