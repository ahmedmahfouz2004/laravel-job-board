<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\Api\ApiPostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

//API Routes

Route::apiResource('blog',ApiPostController::class);


//Route::get('/', [IndexController::class,'index']);
//Route::get('/about', [IndexController::class,'about']);
//Route::get('/contact', [IndexController::class,'contact']);
//Route::get('/job',[JobController::class,'index']);
/*
Route::get('/blog',[PostController::class,'index']);
Route::post('/blog',[PostController::class,'store']);
Route::delete('/blog/{id}',[PostController::class,'destroy']);
Route::put('/blog/{id}',[PostController::class,'update']);
Route::get('/blog/{id}',[PostController::class,'show']);
*/
//Route::get('/comments',[CommentController::class,'index']);
//Route::post('/comments',[CommentController::class,'create']);
//
//Route::get('/tags',[TagController::class,'index']);
//Route::post('/tags',[TagController::class,'create']);
//Route::get('/tags/many',[TagController::class,'Many_to_Many']);
//
//



