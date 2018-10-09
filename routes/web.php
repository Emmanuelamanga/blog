<?php

use App\Post;
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
    return view('welcome')
        ->with('posts', Post::all());
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'user'], function () {
//    image controller
    Route::resource('image', 'ImageController');

//    profile controller
    Route::resource('profile', 'ProfileController');

//blog controller
    Route::resource('post', 'PostController');

});
