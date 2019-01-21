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
    return view('welcome');
})->name('mainPage');

Route::get('/login', 'TestController@showLoginForm')->name('loginRoute');
Route::post('/login', 'TestController@postingLoginData')->name('loginRoutePost');

Route::resource('posts', 'PostController');

