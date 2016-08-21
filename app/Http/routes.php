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

    /** Список для услуг */
    Route::get('admin/services',    ['uses' => 'ServiceController@index']);
    Route::get('admin/service',    ['uses' => 'ServiceController@create']);
    Route::post('admin/service',    ['as' => 'admin.service.store', 'uses' => 'ServiceController@store']);
    Route::get('admin/service/{service}',    ['as' => 'admin.service.view', 'uses' => 'ServiceController@view']);
    Route::post('admin/service/{service}',    ['as' => 'admin.service.update', 'uses' => 'ServiceController@update']);
    Route::get('admin/service/{service}/destroy',    ['as' => 'admin.service.destroy', 'uses' => 'ServiceController@destroy']);


    /** Список для доп услуг */
    //Route::get('admin/service/{service}/subservices',    ['as' => 'admin.subservice.index', 'uses' => 'SubserviceController@index']);
    Route::get('admin/service/{service}/subservice',    ['as' => 'admin.subservice.create', 'uses' => 'SubserviceController@create']);
    Route::post('admin/service/{service}/subservice',    ['as' => 'admin.subservice.store', 'uses' => 'SubserviceController@store']);
    Route::get('admin/service/{service}/subservice/{subservice}',    ['as' => 'admin.subservice.view', 'uses' => 'SubserviceController@view']);
    Route::post('admin/service/{service}/subservice/{subservice}',    ['as' => 'admin.subservice.update', 'uses' => 'SubserviceController@update']);
    Route::get('admin/service/{service}/subservice/{subservice}/destroy',    ['as' => 'admin.subservice.destroy', 'uses' => 'SubserviceController@destroy']);

});




