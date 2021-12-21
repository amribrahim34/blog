<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'Admin\AdminController@index');

Route::namespace('Admin')->name('admin.')->group(function () {
    Route::resource('/posts', PostController::class);
    Route::resource('/categories', CategoryController::class);
    Route::resource('/keywords', KeywordController::class);

    Route::get('/comments', 'CommentController@index')->name('comments.index');
    Route::delete('/comments', 'CommentController@destroy')->name('comments.destroy');
    Route::post('/comments/activate/{comment}', 'CommentController@activate')->name('comments.activate');
    Route::post('/comments/deactivate/{comment}', 'CommentController@deactivate')->name('comments.deactivate');
});
