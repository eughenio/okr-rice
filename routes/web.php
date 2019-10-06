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

Route::prefix('admin')->group(function () {
	Route::get('/', function () {
	    return view('admin/welcome_admin');
	});
});

Route::prefix('okr')->group(function () {
	Route::get('/', 'OkrController@index')->name('okr');
	Route::get('okrCreate', 'OkrController@create')->name('okrCreate');
	Route::post('okrCreate', 'OkrController@store')->name('okrStore');
	Route::post('okrCreatePlusTeam', 'OkrController@storePlusTeam')->name('okrStorePlusTeam');
	Route::get('team/{id}', 'TeamController@index')->name('team');

	Route::get('gantt', 'GanttController@index')->name('gantt');
	Route::get('gantt/data', 'GanttController@show')->name('ganttData');
});