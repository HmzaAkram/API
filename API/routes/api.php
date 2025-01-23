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

// POST: Create a new post
Route::post('/posts', [PostController::class, 'store']);

// PUT: Update an existing post by ID
Route::put('/posts/{id}', [PostController::class, 'update']);

// DELETE: Delete a post by ID
Route::delete('/posts/{id}', [PostController::class, 'destroy']);