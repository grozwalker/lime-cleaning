<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

//Admin panel
Route::group(['middleware' => ['auth']], function () {
    Route::get('admin',         ['uses' => 'AdminController@index']);
    Route::get('admin/menu',    ['uses' => 'MenuController@index']);
    Route::get('admin/services',    ['uses' => 'ServiceController@index']);
    Route::get('admin/service',    ['uses' => 'ServiceController@create']);
    Route::post('admin/service',    ['as' => 'admin.service.store', 'uses' => 'ServiceController@store']);
    Route::get('admin/service/{service}',    ['as' => 'admin.service.view', 'uses' => 'ServiceController@view']);
    Route::post('admin/service/{service}',    ['as' => 'admin.service.update', 'uses' => 'ServiceController@update']);
});




