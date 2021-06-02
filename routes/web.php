<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/test', function () {
    return view('test');
});
Route::get('/loginpage', function () {
    return view('login');
});
Route::get('/reg', function () {
    return view('register');
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




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
