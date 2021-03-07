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
Route::get('/test', 'AdminController@test');

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