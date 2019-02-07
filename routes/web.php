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



Route::group(['middleware' => ['auth']],function (){

	Route::get('/rental','ApartmentController@creates');
	Route::Post('/homes','ApartmentController@store');
	Route::get('/profile/{id}','ApartmentController@viewProfile');
	Route::get('/map/{lat}/{lng}','ApartmentController@map');
	Route::get('/home','ApartmentController@create');
Route::post('/homesearch','ApartmentController@searchHome');


});


Route::get('/reg','RegistrationController@create');
Route::Post('/reg','RegistrationController@store');


Route::get('/login','SessionController@create');
Route::Post('/login','SessionController@store');
Route::get('/logout','SessionController@destroy');
Route::get('/searchhome','ApartmentController@createsearch');
Route::Post('/searchhome','ApartmentController@storesearch');

// Route::get('/calculate','ApartmentController@initiate');
// Route::post('/calculate','ApartmentController@solve');






