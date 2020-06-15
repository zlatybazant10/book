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

Auth::routes();

Route::get('/email', function () {
    return new \App\Mail\NewUserWelcomeMail();
});

Route::get('/library', 'BookController@create');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

Route::get('/books', 'BookController@index');
Route::post('/books', 'BookController@store');
Route::patch('/books/{book}-{slug}', 'BookController@update');
Route::delete('/books/{book}-{slug}', 'BookController@destroy');

Route::patch('/checkout/{book}', 'CheckoutController@update')->name('checkout.update');
Route::patch('/checkin/{book}', 'CheckinController@update')->name('checkin.update');

//Route::post('/comments/{id}', 'CommentsController@post');
//Route::get('/comments/create', 'CommentsController@create');
Route::get('/comments/{book}', 'CommentsController@index');
Route::get('/create/{book}', 'ReviewController@index');
Route::post('/comments/{book}', 'ReviewController@store')->name('comment.create');
Route::post('/comments/{comment}','LikesController@store')->name('likes.create');


Route::get('/add', 'AddBookController@index');
Route::post('/add', 'AddBookController@store')->name('book.create');
Route::patch('/add/{book}-{slug}', 'AddBookController@update');
