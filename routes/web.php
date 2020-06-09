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

Route::post('/checkout/{book}', 'CheckoutController@store');
Route::post('/checkin/{book}', 'CheckinController@store');

