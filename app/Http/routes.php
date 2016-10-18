<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('app');
});

Route::get('volunteer/login', 'VolunteerController@login');
Route::get('/apply', function(){
	return view('applicant');
});
Route::post('/apply', 'ApplicantsController@applyView');

Route::get('home','UserController@getReq');
