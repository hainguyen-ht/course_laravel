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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/course', 'HomeController@course')->name('course');
Route::get('/detail/{id}', 'HomeController@detail')->name('detail');

// test
// Route::post('/capnhat/{id}', 'CategoryController@capnhat')->name('capnhat');

//Auth
Route::get('/login', 'AuthHNController@getLogin')->name('login');
Route::get('/register', 'AuthHNController@getRegister')->name('register');
Route::get('/logout', 'AuthHNController@getLogout')->name('logout');
Route::get('/reset-pass', 'AuthHNController@getReset')->name('reset');
//Auth form request
Route::post('/post-login', 'AuthHNController@postLogin')->name('postLogin');
Route::post('/post-register', 'AuthHNController@postRegister')->name('postRegister');
Route::post('/post-reset-pass', 'AuthHNController@postReset')->name('postReset');

//RegCourse
Route::get('/reg-course/{courseID}-{accountID}', 'HomeController@reg')->name('course.reg');


Route::group(['prefix' => 'admin'], function(){
	Route::get('/','AdminController@dashboard')->name('dashboard');
	Route::resources([
		'category' => 'CategoryController',
		'course' => 'CourseController',
		'account' => 'AcountController',
	]);
});
// Route::group(['prefix' => 'account'], function(){
// 	Route::get('/', 'AcountController@index')->name('account');
// });