<?php
use Illuminate\Support\Facades\Route;
//Site
Route::group(['prefix' => '/articles', 'namespace' => 'Site'], function(){
    Route::get('/', 'ArticlesController@index');
    Route::get('/{id}', 'ArticlesController@oneIndex');
    Route::get('/cat/{cat_alias?}', 'ArticlesController@show')->where('cat_alias', '[a-z-]+');
});

Route::group(['namespace' => 'Site'], function(){
    Route::get('/', 'IndexController@index')->name('home');
    Route::get('/ordinance','OrdinanceController@index');
    Route::get('/comments', 'CommentsController@index');
    Route::post('/comments', 'CommentsController@store');
});

Route::get('/register', 'RegisterController@showRegisterForm')->name('registerRoute');
Route::post('/register', 'RegisterController@postingRegisterData')->name('registerRoutePost');
Route::get('/login', 'LoginController@showLoginForm')->name('loginRoute');
Route::post('/login', 'LoginController@postingLoginData')->name('loginRoutePost');
//Admin
Route::group(['prefix' => '/admin', 'namespace' => 'Admin'],function() {
    Route::get('/','IndexController@index');
    Route::resource('/articles','ArticlesController');
    Route::resource('/permissions','PermissionsController');
    Route::resource('/menus','MenusController');
    Route::resource('/users','UsersController');
});
Route::group(['prefix' => '/admin', 'namespace' => 'Auth'], function(){
    Route::get('/login','AuthController@showLoginForm')->name('loginAdmin');
    Route::post('/login','AuthController@login')->name('loginPostAdmin');
    Route::get('/logout','AuthController@logout');
});

Route::view('/404', 'blocks.404');