<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('create/blog','BlogController@apiCreateBlog');
Route::get('view/blog','BlogController@apiViewBlog');
Route::get('blog/detail/{id}', 'BlogController@apiDetailBlog');
Route::get('edit/blog/{id}', 'BlogController@apiEditBlog');
Route::post('update/blog', 'BlogController@apiUpdateBlog');
Route::delete('delete/blog/{id}', 'BlogController@apiDeleteBlog');



