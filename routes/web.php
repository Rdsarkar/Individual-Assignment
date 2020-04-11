<?php

//Landing Page
Route::get('/', function () {
    return view('welcome');
});

//registration
Route::get('/registration','RegController@index')->name('reg');
Route::post('/registration','RegController@store')->name('regi');


//Login
Route::get('/login','LoginController@index')->name('blogin');
Route::post('/login','LoginController@store')->name('blogin');

//Showing Admin Dashboard
Route::get('/AdminDash','AdminController@index')->name('adash');

//Showing Administrative User Dashboard
Route::get('/UserDash','UserController@index')->name('userdash');


//Categories
Route::get('/AllCategories','CategoriesController@index')->name('categories');
Route::get('/Categories/Create','CategoriesController@create')->name('ccategories');
Route::post('/CreateCategories','CategoriesController@store')->name('scategories');
Route::get('/Categories/update/{id}','CategoriesController@show')->name('updateCategories');
Route::post('/UpdatingCategories/{id}','CategoriesController@update')->name('updating');
Route::get('/Categories/des/{id}', 'CategoriesController@destroy')->name('des');
//Tags
Route::get('/AllTags','TagsController@index')->name('tags');
Route::get('/Tags/Create','TagsController@create')->name('ctags');
Route::post('/CreateTags','TagsController@store')->name('stags');
Route::get('/Tags/update/{id}','TagsController@show')->name('updateTags');
Route::post('/UpdatingTags/{id}','TagsController@update')->name('updatingtag');
Route::get('/Tags/des/{id}', 'TagsController@destroy')->name('destroy');

//Logout
Route::get('/logout','LogoutController@index')->name('blogout');









