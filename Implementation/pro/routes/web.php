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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admindash','HomeController@admin')->middleware('admin');
Route::get('/matchmaking',function()
{
	return view('matchmaking');
});
Route::get('/sample',function()
{
	return view('sample');
});

Route::get('/editprofile/{id}','ProfileController@edit');
Route::put('/editprofile/{id}','ProfileController@updateprofile');


Route::get('/sample','BlogController@create');
Route::post('/sample','BlogController@store');

Route::get('\matchmaking','MatchMaking@index');