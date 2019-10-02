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

// INDEX
Route::get('index','Site_Controllers\MainController@viewIndex');

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

// categories routes
//add new cat

Route::any('add-menu-category','Admin_Controllers\MainController@viewCategoryPage');

Route::any('do-upload-cat','Admin_Controllers\MainController@doUploadCategory');

//update cat

Route::any('view-update-category','Admin_Controllers\MainController@viewUpdateCatModal');
Route::any('view-update-category-img','Admin_Controllers\MainController@viewUpdateCatModal1');

Route::any('do-update-category','Admin_Controllers\MainController@doUpdateCatModal');

Route::any('do-update-category-img','Admin_Controllers\MainController@doUpdateCatModal1');

// delete cat
Route::any('delete_category/{id}','Admin_Controllers\MainController@doDelCategory');
//categories routes end

Route::any('do-login','Admin_Controllers\LoginAdmin@doLoginAccount');

Route::any('logout','Admin_Controllers\LoginAdmin@adminLogout');