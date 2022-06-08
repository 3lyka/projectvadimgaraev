<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function () {
	return view('admin');
});

Route::group(['namespace' => 'Post'], function () {
	Route::post('/catalog', 'IndexController')->name('post.store');
	Route::get('/catalog/coach', 'IndexController')->name('post.index');
	Route::get('/catalog/create', 'CreateController');
	Route::get('/catalog/coach/{post}', 'ShowController')->name('post.show');
});



Route::group(['namespace' => 'Info'], function () {
	Route::get('/info', 'IndexController')->name('info.index');
	Route::get('/info/{info}', 'ShowController')->name('info.show');
});


Route::post('/catalog', 'PostController@store')->name('post.store');



Route::group(['namespace' => 'Admin', 'prefix' => 'admin'],	function () {
	/* 	Route::get('/admin', 'InfoController')->name('admin.index'); */

	Route::group(['namespace' => 'Post'],	function () {
		Route::get('/post', 'IndexController')->name('admin.post.index');
	});
});

Route::get('/', 'MainController@index')->name('main.index');
Route::get('/contacts', 'IndexController@index')->name('contacts.index');
Route::get('/about', 'AboutController@index')->name('about.index');
Route::get('/buy', 'BuyController@index')->name('buy.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
