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
Route::get('/phpinfo', function() {
    return phpinfo();
});

Route::get('/', ['as' => 'frontend.pages.index', 'uses' => 'FrontendController@index']);
Route::get('/work', ['as' => 'frontend.pages.work', 'uses' => 'Frontend\WorkController@index']);
Route::post('/work', ['as' => 'frontend.pages.work.store', 'uses' => 'Frontend\WorkController@store']);
Route::get('/dry-cleaning', ['as' => 'frontend.pages.dry-cleaning', 'uses' => 'Frontend\DrycleaningController@index']);
Route::post('/dry-cleaning', ['as' => 'frontend.pages.dry-cleaning.store', 'uses' => 'Frontend\OrderController@store']);
Route::get('/cleanups', ['as' => 'frontend.pages.cleanups', 'uses' => 'Frontend\CleanupsController@index']);
Route::get('/about', ['as' => 'frontend.pages.about', 'uses' => 'Frontend\AboutController@index']);
Route::get('/equipment', ['as' => 'frontend.pages.equipment', 'uses' => 'Frontend\EquipmentController@index']);
Route::get('/outside', ['as' => 'frontend.pages.outside', 'uses' => 'Frontend\OutsideController@index']);

//Route::resource('/blog/{slug}', 'BlogController');
Route::auth();

Route::get('/send', ['as' => 'frontend.email.index', 'uses' => 'EmailController@index']);

//Frontend
Route::get('/order', ['as' => 'frontend.order.index', 'uses' => 'Frontend\OrderController@index']);
Route::post('/order', ['as' => 'frontend.order.store', 'uses' => 'Frontend\OrderController@store']);
Route::get('/order/getsubservices/{id}', ['as' => 'frontend.order.get_sub_services', 'uses' => 'Frontend\OrderController@getSubServices']);

//Admin panel
Route::group(['middleware' => ['auth']], function () {
    Route::get('admin',         ['uses' => 'AdminController@index']);
    Route::get('admin/menu',    ['uses' => 'MenuController@index']);

    /** Список для услуг */
    Route::get('admin/services',    ['as' => 'admin.service.index', 'uses' => 'ServiceController@index']);
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


    /** Профили клиентов */
    Route::get('admin/profiles', ['as' => 'admin.profiles.index', 'uses' => 'Admin\ProfileController@index']);
    Route::get('admin/profiles/{profile}', ['as' => 'admin.profiles.view', 'uses' => 'Admin\ProfileController@view']);
    Route::post('admin/profiles/{profile}', ['as' => 'admin.profiles.update', 'uses' => 'Admin\ProfileController@update']);
    Route::get('admin/profiles/{profile}/destroy', ['as' => 'admin.profiles.destroy', 'uses' => 'Admin\ProfileController@destroy']);
    Route::get('admin/profile', ['as' => 'admin.profiles.create', 'uses' => 'Admin\ProfileController@create']);
    Route::post('admin/profile', ['as' => 'admin.profiles.store', 'uses' => 'Admin\ProfileController@store']);


    /** Заказы */
    Route::get('admin/orders', ['as' => 'admin.orders.index', 'uses' => 'Admin\OrderController@index']);
    Route::get('admin/order/{order}', ['as' => 'admin.orders.view', 'uses' => 'Admin\OrderController@view']);
    Route::post('admin/order/{order}', ['as' => 'admin.orders.update', 'uses' => 'Admin\OrderController@update']);

    Route::resource('admin/blogs', 'Admin\BlogController');
});




