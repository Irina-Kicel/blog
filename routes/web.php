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

Route::get('/login', 'TestController@showLoginForm')->name('loginRoute');
Route::post('/login', 'TestController@postingLoginData')->name('loginRoutePost');

//Admin
Route::group(['prefix' => '/admin', 'namespace' => 'Admin'],function() {
    Route::get('/','IndexController@index');
    Route::resource('/articles','ArticlesController');
    Route::resource('/permissions','PermissionsController');
    Route::resource('/menus','MenusController');
    Route::resource('/users','UsersController');
});
Route::group(['namespace' => 'Auth'], function(){
    Route::get('/login_admin','AuthController@showLoginForm')->name('loginAdmin');
    Route::post('/login_admin','AuthController@login')->name('loginPostAdmin');
    Route::get('/logout_admin','AuthController@logout');
});

Route::view('/404', 'blocks.404');