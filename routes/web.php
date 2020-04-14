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


Route::group(['middleware' => ['locker']], function(){


//Showing Admin Dashboard
Route::get('/AdminDash','AdminController@index')->name('adash');
Route::get('/Users/show/{id}','AdminController@show')->name('showUsers');


//Posts
Route::get('/AllPosts','PostsController@index')->name('posts');
Route::get('/Posts/Create','PostsController@create')->name('cposts');
Route::post('/CreatePosts','PostsController@store')->name('sposts');
Route::get('/Posts/update/{id}','PostsController@show')->name('updatePosts');
Route::post('/UpdatingPosts/{id}','PostsController@update')->name('updatingpos');

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

//Showing Administrative User Dashboard
Route::get('/UserDash','UserController@index')->name('userdash');
Route::get('/User/PersonalInfo/{id}','UserController@show')->name('userinfo');



});

//Logout
Route::get('/logout','LogoutController@index')->name('blogout');









