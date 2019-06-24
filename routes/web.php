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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@home')->name('pages.home');
Route::get('contact', 'PagesController@getContact')->name('pages.contact');
Route::post('/', 'ContactsController@sendEmail')->name('send');

Route::group(['prefix' => 'admin-secure'], function () {
    Voyager::routes();
});
