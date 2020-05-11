<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', function () {
    return view('home');
})->name('home');

Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
    Route::get('register','RegisterController@showRegistrationForm')->name('auth.register.form');
    Route::post('register','RegisterController@register')->name('auth.register');
    Route::get('login','LoginController@showLoginForm')->name('auth.login.form');
    Route::post('login','LoginController@login')->name('auth.login');
    Route::get('logout','LoginController@logout')->name('auth.logout');

});




