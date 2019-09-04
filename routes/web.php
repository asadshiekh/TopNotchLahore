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


Route::any('email',function(){

	return view('ClientSite/mail');
});


// Manage Client Site

// HOME
Route::get('/','Site_Controllers\MainController@viewHome');

//MENU
Route::get('Menu','Site_Controllers\MainController@viewMenu');

// RESERVATION
Route::get('Reservation','Site_Controllers\MainController@viewReservation');

// Contact Us
Route::get('Contact-Us','Site_Controllers\MainController@viewContactUs');


Route::any('send-email','Site_Controllers\MainController@sendEmail');


// Manage Admin Site 



Route::get('admin-login','Admin_Controllers\AdminLogin@viewLogin');

Route::get('dashboard','Admin_Controllers\MainController@viewDashboard');

Route::get('change-logo','Admin_Controllers\MainController@viewlogoPage');

Route::any('do-upload','Admin_Controllers\MainController@doUploadLogo');

