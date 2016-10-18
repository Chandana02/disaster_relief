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

Route::post('volunteer/login', 'VolunteerController@login');

Route::post('/apply', 'ApplicantsController@applyView');

Route::post('volunteer/updateReq', 'VolunteerController@updateRequirements');

Route::get('/apply', function(){
	return view('applicant');
});

Route::get('home', function() {
	return view('user.home');
});
Route::get('home/{city}','UserController@getReq');

Route::post('admin/login', 'AdminController@login');
