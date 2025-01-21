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
Route::apiResource('posts', PostController::class);