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
    return view('login.welcome');
});
/*
Route::get('login', function () {
    return view('login.test');
});
*/
    Route::get('/login','loginController@index')->name('login');
    Route::post('/login','loginController@verify');
    Route::get('/registration','RegistrationController@index')->name('register');
    Route::post('/registration','RegistrationController@register');

    Route::group(['middleware'=>('sess')], function(){

    Route::get('/home','HomeController@index')->name('home');
    });


    Route::get('/logout','LogoutController@index');
