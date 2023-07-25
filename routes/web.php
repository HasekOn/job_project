<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembersController;
use \App\Http\Controllers\TestController;
use App\Models\Member;

Route::get('/', function () {
    $members = Member::all();
    return view('mainPage', ['members' => $members]);
});

//Route for create and post member
Route::post('/create-member', [MembersController::class, 'createMember']);

//Route for edititing members
Route::get('/edit-member/{member}', [MembersController::class, 'showEditScreen']);
Route::put('/edit-member/{member}', [MembersController::class, 'saveEditedMember']);
//Route for delete members
Route::get('/delete-member/{member}', [MembersController::class, 'showDeleteScreen']);
Route::put('/delete-member/{member}', [MembersController::class, 'notDeleteMember']);
Route::delete('/delete-member/{member}', [MembersController::class, 'deleteMember']);
