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

Route::group(['middleware' => ['web']], function (){
    Route::auth();
    Route::group(['prefix' => 'manager'], function (){
        Route::get('','ManagerController@index');
        Route::group(['prefix' => 'culture'], function (){
            Route::get('','ManagerController@showCulture');
            Route::get('add','ManagerController@showCultureAdd');
            Route::get('edit/{culture}','ManagerController@showCultureEdit');
            Route::get('detail/{culture}','ManagerController@showCultureDetail');
            Route::post('add','ManagerController@addCulture');
            Route::patch('edit/{culture}','ManagerController@editCulture');
            Route::delete('/{culture}','ManagerController@deleteCulture');
        });
    });
});
