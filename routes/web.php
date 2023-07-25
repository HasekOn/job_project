<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use \App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('mainPage');
});

//Route for create and post member
Route::post('/create-member', [PostController::class, 'createMember']);
