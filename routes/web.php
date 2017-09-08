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

Route::get('/', 'PagesController@home');

Route::get('/info', 'PagesController@info');
Route::get('/contato', 'PagesController@contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts', 'PostsController@index')->name('posts.index');
Route::get('/post/novo', 'PostsController@create')->name('posts.create')->middleware('auth');
Route::post('/post/novo', 'PostsController@store')->name('posts.store')->middleware('auth');
Route::get('/post/{post}', 'PostsController@show')->name('posts.show');
Route::get('/post/{post}/editar', 'PostsController@edit')->name('posts.edit')->middleware('auth');
Route::post('/post/{post}/editar', 'PostsController@update')->name('posts.update')->middleware('auth');
Route::get('/post/{post}/remover', 'PostsController@delete')->name('posts.delete')->middleware('auth');