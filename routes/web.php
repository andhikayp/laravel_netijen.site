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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);
Route::get('/about', 'HomeController@about')->name('home.about');
Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/home/{user_id}', 'HomeController@id')->name('home.id');
Route::get('/post', 'PostController@index')->name('post.index');
Route::get('/category/{id}','PostController@kategori')->name('kategori.search');

Route::middleware('auth', 'verified')->group(function(){
	Route::get('/post/create', 'PostController@create')->name('post.create');
	Route::post('/post/create', 'PostController@store')->name('post.store');
	
	Route::get('/post/{id}/edit', 'PostController@edit')->name('post.edit'); 
	Route::patch('/post/{id}/edit', 'PostController@update')->name('post.update');
	Route::delete('/post/{post}/delete', 'PostController@destroy')->name('post.destroy');
	Route::post('/post/{post}/comment', 'PostCommentController@store')->name('post.comment.store');

	Route::get('/post/{post}', 'PostController@show')->name('post.show');

	Route::get('/profil','UserProfileController@edit')->name('user.edit');
	Route::post('/profil','UserProfileController@update');
	Route::delete('/profil','UserProfileController@destroy')->name('avatar.delete');

	Route::get('/result','PostController@search')->name('post.search');
	Route::get('/user','PostController@cari')->name('post.cari');
	
	// Route::get('/category/{name?}', function ($name = '1') {return $name; })->name('kategori.search');
	// Route::get('/category/{post->category_id}', 'PostController@kategori')->name('kategori.search');

});
