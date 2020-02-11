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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/login/{social}','Auth\LoginController@socialLogin')->where('social','twitter|facebook|linkedin|google');
Route::get('/login/{social}/callback','Auth\LoginController@handleProviderCallback')->where('social','twitter|facebook|linkedin|google');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
// Routes for Users Pages
Route::get('/users' , 'UserController@index')->name('users');
Route::get('/user/edit/{id}','UserController@edit')->name('edit_user');
Route::get('/user/update','UserController@update')->name('update_user');
Route::get('/user/delete' , 'UserController@destroy')->name('delete_user');
