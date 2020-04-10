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

//Admin
Route::get('/Adminlogin','LoginController@index')->name('alogin');          //Login Page Showing
Route::post('/Admin','AdminController@index')->name('alog');                //Login Page Requested for the AdminHome Get
Route::get('/alogout','AdminLogoutController@index')->name('alogout');      //Logout 

//AdminHome Get
Route::get('/adminhome', 'AhomeController@index')->name('ahome');           //Showing AdminHome 



//Administrative_User

Route::get('/Administrative_User_login','AdloginController@index')->name('adlogin'); //Login Page Showing 
Route::post('/Administrative_User','AdController@index')->name('adlog');//Login Page Requested for the Administration Home Get
Route::get('/adlogout','AdLogoutController@index')->name('adlogout');//Logout 

//AdministrationUserHome Get
Route::get('/adhome', 'AdhomeController@index')->name('adhome');  //Showing Administration Home