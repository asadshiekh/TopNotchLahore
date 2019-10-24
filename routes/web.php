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

Route::any('topnotchlahore_map',function(){

	return view('ClientSite/topnotchdemo_map');
	
});

// Manage Client Site

// HOME
Route::get('/','Site_Controllers\MainController@viewIndex');

// INDEX
// Route::get('index','Site_Controllers\MainController@viewIndex');

//MENU
Route::get('Menu','Site_Controllers\MainController@viewMenu');

// RESERVATION
Route::get('Reservation','Site_Controllers\MainController@viewReservation');

Route::any('do-reservation','Site_Controllers\MainController@doReservation');

// About Us
Route::get('about-us','Site_Controllers\MainController@viewAboutUs');

// Contact Us
Route::get('kitchen-garden','Site_Controllers\MainController@viewKitchenGarden');

// Contact Us
Route::get('Contact-Us','Site_Controllers\MainController@viewContactUs');


Route::any('send-email','Site_Controllers\MainController@sendEmail');


// Manage Admin Site 



Route::get('admin-login','Admin_Controllers\AdminLogin@viewLogin')->middleware('Login_Confirmation');

Route::get('dashboard','Admin_Controllers\MainController@viewDashboard')->middleware('Authentications');

Route::get('change-logo','Admin_Controllers\MainController@viewlogoPage')->middleware('Authentications');

Route::any('do-upload','Admin_Controllers\MainController@doUploadLogo')->middleware('Authentications');

// categories routes

// add new cat

Route::any('add-menu-category','Admin_Controllers\MainController@viewCategoryPage')->middleware('Authentications');

Route::any('do-upload-cat','Admin_Controllers\MainController@doUploadCategory')->middleware('Authentications');

//update cat

Route::any('view-update-category','Admin_Controllers\MainController@viewUpdateCatModal')->middleware('Authentications');

Route::any('view-update-category-img','Admin_Controllers\MainController@viewUpdateCatModal1')->middleware('Authentications');

Route::any('do-update-category','Admin_Controllers\MainController@doUpdateCatModal')->middleware('Authentications');

Route::any('do-update-category-img','Admin_Controllers\MainController@doUpdateCatModal1')->middleware('Authentications');

// delete cat

Route::any('delete_category/{id}','Admin_Controllers\MainController@doDelCategory')->middleware('Authentications');

//categories routes end



//menu routes start
Route::any('view-menu-page','Admin_Controllers\MainController@viewMenuPage')->middleware('Authentications');

Route::any('do-add-in-menu','Admin_Controllers\MainController@doAddMenuItem')->middleware('Authentications');

Route::any('delete-item/{id}','Admin_Controllers\MainController@doDelMenuItem')->middleware('Authentications');

Route::any('open_model_window','Admin_Controllers\MainController@doOpenUpdateModel')->middleware('Authentications');

Route::any('update-item-menu','Admin_Controllers\MainController@doUpdateMenuItem')->middleware('Authentications');
//menu routes end

// reservation start
// Route::any('do-reserve','Site_Controllers\MainController@doReserveSeat');
// reservation end

Route::any('show-reservations','Admin_Controllers\MainController@viewReservation');
// about us routes start

Route::any('view-about-us','Admin_Controllers\MainController@viewAboutUsPage')->middleware('Authentications');

Route::any('edit-about-us','Admin_Controllers\MainController@editAboutUsDetail')->middleware('Authentications');

// about us routes end

Route::any('do-login','Admin_Controllers\LoginAdmin@doLoginAccount')->middleware('Login_Confirmation');

Route::any('logout','Admin_Controllers\LoginAdmin@adminLogout')->middleware('Authentications');

