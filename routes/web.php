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
Auth::routes();
Route::group(['prefix' => 'user-profile', 'middleware' => 'auth'], function () {
    Route::get('/edit', 'UserProfileController@edit')->name('editProfile');
    Route::post('/save', 'UserProfileController@save')->name('saveProfile');
});
