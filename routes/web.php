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


// HOME
Route::get('/','Site_Controllers\MainController@viewHome');

//MENU
Route::get('Menu','Site_Controllers\MainController@viewMenu');

// RESERVATION
Route::get('Reservation','Site_Controllers\MainController@viewReservation');

// Contact Us
Route::get('Contact-Us','Site_Controllers\MainController@viewContactUs');
