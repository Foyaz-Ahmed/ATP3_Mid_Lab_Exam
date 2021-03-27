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
    Route::get('/registration/type', 'RegistrationController@home')->name('registration.home');


    Route::get('/registration','RegistrationController@index')->name('register');
    Route::post('/registration','RegistrationController@register')->name('register');


    Route::get('/customer/registration','RegistrationController@customer_index')->name('customer.register');
    Route::post('/customer/registration','RegistrationController@customer_register')->name('customer.register');



    Route::group(['middleware'=>('sess')], function(){

    Route::get('/home','HomeController@index')->name('home');
    Route::get('/home/casing','ComponentController@casingList')->name('home.casing');
    Route::get('/home/ram','ComponentController@ramList')->name('home.ram');
    });

    


    Route::get('/logout','LogoutController@index');


