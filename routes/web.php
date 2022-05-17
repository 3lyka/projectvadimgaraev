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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/catalog/coach', 'PostController@index')->name('post.index');
Route::get('/catalog/create', 'PostController@create');



Route::post('/catalog', 'PostController@store')->name('post.store');
Route::get('/catalog/coach/{post}', 'PostController@show')->name('post.show');

/* Route::get('/posts/update', 'PostController@update');
Route::get('/posts/delete', 'PostController@delete');
Route::get('/posts/restored', 'PostController@restored');
Route::get('/posts/first_or_create', 'PostController@firstOrCreate'); */

Route::get('/main', 'MainController@index')->name('main.index');
Route::get('/contacts', 'ContactsController@index')->name('contacts.index');
Route::get('/about', 'AboutController@index')->name('about.index');
Route::get('/buy', 'BuyController@index')->name('buy.index');

//Полезная информация
Route::get('/info', 'InfoController@index')->name('info.index');
Route::get('/info/{info}', 'InfoController@show')->name('info.show');