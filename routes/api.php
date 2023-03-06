<?php

use App\Http\Controllers\Shoulcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/POSTShouls', [Shoulcontroller::class, 'POSTShoul']);
Route::get('/GetAllShould', [Shoulcontroller::class, 'GetAllShould']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});