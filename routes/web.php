<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\commanController;

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

//for admin
Route::view('/admin', 'admin.login');
Route::post('/admin', 'AdminController@login')->name('admin');


Route::group(['middleware' => 'admin'], function () {

Route::get('/admin/dashboard', 'AdminController@dashboard');
Route::get('/admin/logout', 'AdminController@logout');
Route::get('/admin/profile', 'AdminController@profile');
Route::view('/admin/change-password', 'admin/change_password');
Route::post('/admin/change-password', 'AdminController@changepassword')->name('admin.changepassword');

//banner route
Route::view('/admin/add-banner', 'admin.add-banner');
Route::post('/admin/add-banner', 'Admin\BannerController@store')->name('admin.addbanner');
Route::get('/admin/banner', 'Admin\BannerController@show');
Route::get('/admin/banner-delete/{id}', 'Admin\BannerController@destroy');
Route::get('/admin/add-banner/{id}', 'Admin\BannerController@edit');

//Religion route
Route::get('/admin/religion','Admin\ReligionController@show');
Route::post('/admin/religion','Admin\ReligionController@store')->name('admin.religion');
Route::get('/admin/religion-delete/{id}','Admin\ReligionController@destroy');
Route::get('/admin/religion/{id}','Admin\ReligionController@edit');

//Member Language route
Route::get('/admin/member-language','Admin\MemberLanguageController@show');
Route::post('/admin/member-language','Admin\MemberLanguageController@store')->name('admin.member-language');
Route::get('/admin/member-language-delete/{id}','Admin\MemberLanguageController@destroy');
Route::get('/admin/member-language/{id}','Admin\MemberLanguageController@edit');


//Caste route
Route::get('/admin/caste','Admin\CasteController@show');
Route::post('/admin/caste','Admin\CasteController@store')->name('admin.caste');
Route::get('/admin/caste-delete/{id}','Admin\CasteController@destroy');
Route::get('/admin/caste/{id}','Admin\CasteController@edit');

//Sub-Caste route
Route::get('/admin/sub_caste','Admin\SubCasteController@show');
Route::post('/admin/sub_caste','Admin\SubCasteController@store')->name('admin.sub_caste');
Route::get('/admin/sub_caste-delete/{id}','Admin\SubCasteController@destroy');
Route::get('/admin/sub_caste/{id}','Admin\SubCasteController@edit');

//Country Routes
Route::get('/admin/country','Admin\CountryController@show');
Route::post('/admin/country','Admin\CountryController@store')->name('admin.country');
Route::get('/admin/country-delete/{id}','Admin\CountryController@destroy');
Route::get('/admin/country/{id}','Admin\CountryController@edit');

//State Routes
Route::get('/admin/state','Admin\StateController@show');
Route::post('/admin/state','Admin\StateController@store')->name('admin.state');
Route::get('/admin/state-delete/{id}','Admin\StateController@destroy');
Route::get('/admin/state/{id}','Admin\StateController@edit');

//City route
Route::get('/admin/city','Admin\CityController@show');
Route::post('/admin/city','Admin\CityController@store')->name('admin.city');
Route::get('/admin/city-delete/{id}','Admin\CityController@destroy');
Route::get('/admin/city/{id}','Admin\CityController@edit');

//Family Values Route
Route::get('/admin/familyValues','Admin\FamilyValuesController@show');
Route::post('/admin/familyValues','Admin\FamilyValuesController@store')->name('admin.familyValues');
Route::get('/admin/familyValues-delete/{id}','Admin\FamilyValuesController@destroy');
Route::get('/admin/familyValues/{id}','Admin\FamilyValuesController@edit');

//Family Status Route
Route::get('/admin/familyStatus','Admin\FamilyStatusController@show');
Route::post('/admin/familyStatus','Admin\FamilyStatusController@store')->name('admin.familyStatus');
Route::get('/admin/familyStatus-delete/{id}','Admin\FamilyStatusController@destroy');
Route::get('/admin/familyStatus/{id}','Admin\FamilyStatusController@edit');

//Marital Status Route
Route::get('/admin/maritalStatus','Admin\MaritalStatusController@show');
Route::post('/admin/maritalStatus','Admin\MaritalStatusController@store')->name('admin.maritalStatus');
Route::get('/admin/maritalStatus-delete/{id}','Admin\MaritalStatusController@destroy');
Route::get('/admin/maritalStatus/{id}','Admin\MaritalStatusController@edit');



});  

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});

Route::get('/packages', function () {
    return view('packages');
});
Route::get('/story', function () {
    return view('story');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/profile', function () {
    return view('profile');
});
Route::get('/my-interests', function () {
    return view('interests');
});
Route::get('/requests', function () {
    return view('requests');
});
Route::get('/my-shortlists', function () {
    return view('shortlists');
});
Route::get('/ignored-list', function () {
    return view('ignored');
});
Route::get('/chat', function () {
    return view('chat');
});
Route::get('/profile-settings', function () {
    return view('profile_settings');
});
Route::get('/requests', function () {
    return view('requests');
});
Route::get('/profile', function () {
    return view('profile');
});



Auth::routes();
Route::post('/registerform', 'commanController@registration');
Route::get('/home', 'HomeController@index')->name('home');
//otp send
Route::post('/submitotp', 'commanController@submitOtp');
Route::post('/user/sendotp', 'commanController@sendotp');
Route::post('/user/login', 'commanController@login');
