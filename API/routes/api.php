<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentcontroller;
use App\Http\Controllers\PostController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function(){
return ["Name"=>"hmza","FNamza"=>"M.Akram"];
}
);

Route::get('/students',[studentcontroller::class,'list']);

Route::get('/posts/{id}', [PostController::class, 'show']);

Route::get('/posts', [PostController::class, 'index']); // For GET requests
Route::post('/posts', [PostController::class, 'store']); // For POST requests

// PUT: Update an existing post by ID
Route::put('/posts/{id}', [PostController::class, 'update']);

// DELETE: Delete a post by ID
Route::delete('/posts/{id}', [PostController::class, 'destroy']);