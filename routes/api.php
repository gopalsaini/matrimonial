<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'auth:api'], function() {
	
	Route::get('/logout', 'API\PreLoginController@logout');
	Route::get('/user-profile', 'API\postloginController@userProfile');
	Route::post('/change-password', 'API\postloginController@changePassword');
	//match profile
	Route::get('/match-profile', 'API\postloginController@matchProfile');
});




//registration api
Route::post('/registration','API\PreLoginController@registration');
Route::post('/submitotp','API\PreLoginController@submitOtp');
Route::post('/sendotp', 'API\PreLoginController@sendOtp');

//login api
Route::post('/login', 'API\PreLoginController@login');

//membership api
Route::get('/free-membership', 'API\PreLoginController@FreeMembership');
Route::get('/primum-membership', 'API\PreLoginController@premiumMembership');

//bannner api
Route::get('/banner', 'API\PreLoginController@premiumMembership');


