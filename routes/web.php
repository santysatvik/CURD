<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('users',UserController::class);
Route::resource('users.addresses',AddressController::class)
->scoped(['addresses'=>'user2']);