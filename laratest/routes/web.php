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
    Route::get('/home/graphicscard','ComponentController@graphics_cardList')->name('home.graphics_card');
    Route::get('/home/storage','ComponentController@storageList')->name('home.storage');
    Route::get('/home/monitors','ComponentController@monitorList')->name('home.monitors');

    Route::get('/home/storage/hard_disk','ComponentController@hard_diskList')->name('home.storage.hard_disk');
    Route::get('/home/storage/ssd','ComponentController@ssdList')->name('home.storage.ssd');
    Route::get('/home/storage/portable_storage','ComponentController@pdList')->name('home.storage.portable_storage');

     Route::get('/home/customerlist','HomeController@customerlist')->name('home.customerlist');
            Route::get('/home/delete/{id}','HomeController@destroy')->name('home.delete');
    
     Route::get('/home/ram/review/{id}','ComponentController@review')->name('home.ram.review');
    Route::get('/home/casing/review/{id}','ComponentController@casing_review')->name('home.casing.review');
    Route::get('/home/graphics_card/review/{id}','ComponentController@graphics_card_review')->name('home.graphics_card.review');
    Route::get('/home/monitors/{id}','ComponentController@monitors_review')->name('home.monitors.review');
    Route::get('/home/storage/{id}','ComponentController@storage_review')->name('home.storage.review');

    });

    Route::group(['middleware'=>('admin')], function(){

           

          });


    Route::get('/logout','LogoutController@index');


