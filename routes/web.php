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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/Adminlogin','LoginController@index')->name('alogin');
Route::post('/Admin','AdminController@index')->name('alog');

Route::get('/adminhome', 'AhomeController@index')->name('ahome');
Route::get('/alogout','AdminLogoutController@index')->name('alogout');

Route::get('/Administrative_User','AdloginController@index')->name('adlogin');

