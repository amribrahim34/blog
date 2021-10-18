<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'Admin\AdminController@index');

Route::resource('/posts', PostController::class);
Route::resource('/categories', CategoryController::class);
Route::resource('/keywords', KeywordController::class);
Route::resource('/comments', CommentController::class);
