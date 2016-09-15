<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin/login', 'LoginController@getLogin')->name('getlogin');
Route::post('admin/checklogin', 'LoginController@checkLogin')->name('checklogin');
Route::group(['middleware' => 'checkrole'], function () {
	Route::get('admin/logout', 'LoginController@getLogout')->name('getlogout');
	Route::get('admin', function () {
	    return view('admin.dashboard.main');
	})->name('getadmin');
	Route::get('admin/category_list', function () {
	    return view('admin.category.list');
	});
	Route::get('admin/category_add', function () {
	    return view('admin.category.add');
	});
	Route::get('admin/category_edit', function () {
	    return view('admin.category.edit');
	});
});
Route::get('admin/test', 'LoginController@test')->name('gettest');
