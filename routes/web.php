<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'PostController@index')->name('posts.index');
Route::get('/post/{id}', 'PostController@show')->name('post.show');
Route::get('/category/{id}', 'PostController@category')->name('posts.category');



Route::group(['prefix' => 'manager', 'namespace' => 'Manager'], function (){
    Route::get('posts', 'PostController@index')->name('manager.posts.index');
    Route::get('post/create', 'PostController@create')->name('manager.post.create');
    Route::post('post', 'PostController@store')->name('manager.post.store');
    Route::get('post/{id}/edit', 'PostController@edit')->name('manager.post.edit');
    Route::put('post/{id}', 'PostController@update')->name('manager.post.update');
    Route::delete('post/{id}', 'PostController@destroy')->name('manager.post.destroy');

    Route::get('categories', 'CategoryController@index')->name('manager.categories.index');
    Route::get('category/create', 'CategoryController@create')->name('manager.category.create');
    Route::post('category', 'CategoryController@store')->name('manager.category.store');
    Route::get('category/{id}/edit', 'CategoryController@edit')->name('manager.category.edit');
    Route::put('category/{id}', 'CategoryController@update')->name('manager.category.update');
    Route::delete('category/{id}', 'CategoryController@destroy')->name('manager.category.destroy');
});

