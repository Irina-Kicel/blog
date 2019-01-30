<?php
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
})->name('mainPage');*/

Route::get('/login', 'TestController@showLoginForm')->name('loginRoute');
Route::post('/login', 'TestController@postingLoginData')->name('loginRoutePost');

//Route::resource('posts', 'PostController');

Route::get('/', 'Site\IndexController@index')->name('home');

Route::group(['prefix' => '/articles'], function(){
    Route::get('/', 'Site\ArticlesController@index');
    Route::get('/cat/{cat_alias?}', 'Site\ArticlesController@show')->where('cat_alias', '[a-z]+');
});

Route::get('/ordinance','Site\OrdinanceController@index');
Route::get('/comments', 'Site\CommentsController@index');
Route::post('/comments', 'Site\CommentsController@store');
//Admin
Route::group(['prefix' => '/admin'],function() {

    Route::get('/','Admin\IndexController@index');
    Route::resource('/articles','Admin\ArticlesController');
    Route::resource('/permissions','Admin\PermissionsController');
    Route::resource('/menus','Admin\MenusController');
    Route::resource('/users','Admin\UsersController');

});

Route::get('/login_admin','Auth\AuthController@showLoginForm')->name('loginAdmin');
Route::post('/login_admin','Auth\AuthController@login')->name('loginPostAdmin');
Route::get('/logout_admin','Auth\AuthController@logout');