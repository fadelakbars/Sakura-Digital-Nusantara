<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/publisher', function () {
    return view('publisher');
});
Route::get('/software-house-sakura', function () {
    return view('software-house');
});