<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostMembersController;
use \App\Http\Controllers\TestController;
use App\Models\Member;

Route::get('/', function () {
    $members = Member::all();
    return view('mainPage', ['members' => $members]);
});

//Route for create and post member
Route::post('/create-member', [PostMembersController::class, 'createMember']);
