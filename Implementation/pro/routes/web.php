<?php
use Illuminate\Support\Facades\Input;
use App\User;


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

Route::any('/matchmaking',function(){
    $q = Input::get ( 'q' );
    $user = User::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
    

    if(count($user) > 0)
        return view('matchmaking')->withDetails($user)->withQuery ( $q );
    else return view ('matchmaking')->withMessage('No Details found. Try to search again !');
});
