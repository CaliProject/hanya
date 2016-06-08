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
Route::post('upload','ManagerController@uploadImage');
Route::group(['middleware' => ['web']], function (){
    Route::auth();
    Route::get('','HomeController@index');
    Route::get('about','HomeController@showAbout');
    Route::get('job','HomeController@showJob');
    Route::group(['prefix' => 'culture'], function() {
        Route::get('','HomeController@showCulture');
        Route::get('/{culture}','HomeController@showCultureDetail');
    });
    Route::group(['prefix' => 'course'], function() {
        Route::get('','HomeController@showCourse');
        Route::get('/{course}','HomeController@showCourseDetail');
    });
    Route::group(['prefix' => 'teacher'], function() {
        Route::get('','HomeController@showTeacher');
        Route::get('/{teacher}','HomeController@showTeacherDetail');
    });
    Route::group(['prefix' => 'train'], function() {
        Route::get('','HomeController@showTrain');
        Route::get('/{train}','HomeController@showTrainDetail');
    });
    
    //汉雅后台路由
    Route::group(['prefix' => 'manage'], function (){
        Route::get('','ManagerController@index');
        //香道文化的后台路由
        Route::group(['prefix' => 'culture'], function (){
            Route::get('','ManagerController@showCulture');
            Route::get('add','ManagerController@showCultureAdd');
            Route::get('edit/{culture}','ManagerController@showCultureEdit');
            Route::get('detail/{culture}','ManagerController@showCultureDetail');
            Route::post('add','ManagerController@addCulture');
            Route::patch('edit/{culture}','ManagerController@editCulture');
            Route::delete('/{culture}','ManagerController@deleteCulture');
        });
        //课程通知的后台路由
        Route::group(['prefix' => 'course'], function (){
            Route::get('','ManagerController@showCourse');
            Route::get('add','ManagerController@showCourseAdd');
            Route::get('edit/{course}','ManagerController@showCourseEdit');
            Route::get('detail/{course}','ManagerController@showCourseDetail');
            Route::post('add','ManagerController@addCourse');
            Route::patch('edit/{course}','ManagerController@editCourse');
            Route::delete('/{course}','ManagerController@deleteCourse');
        });
        //师资力量的后台路由
        Route::group(['prefix' => 'teacher'], function (){
            Route::get('','ManagerController@showTeacher');
            Route::get('add','ManagerController@showTeacherAdd');
            Route::get('edit/{teacher}','ManagerController@showTeacherEdit');
            Route::get('detail/{teacher}','ManagerController@showTeacherDetail');
            Route::post('add','ManagerController@addTeacher');
            Route::patch('edit/{teacher}','ManagerController@editTeacher');
            Route::delete('/{teacher}','ManagerController@deleteTeacher');
        });
        //培训动态的后台路由
        Route::group(['prefix' => 'train'], function (){
            Route::get('','ManagerController@showTrain');
            Route::get('add','ManagerController@showTrainAdd');
            Route::get('edit/{train}','ManagerController@showTrainEdit');
            Route::get('detail/{train}','ManagerController@showTrainDetail');
            Route::post('add','ManagerController@addTrain');
            Route::patch('edit/{train}','ManagerController@editTrain');
            Route::delete('/{train}','ManagerController@deleteTrain');
        });
        //关于汉雅的后台路由
        Route::group(['prefix' => 'about'], function (){
            Route::get('','ManagerController@showAbout');
            Route::get('edit','ManagerController@showAboutEdit');
            Route::patch('edit','ManagerController@editAbout');
        });
        //招贤纳士的后台路由
        Route::group(['prefix' => 'job'], function (){
            Route::get('','ManagerController@showJob');
            Route::get('edit','ManagerController@showJobEdit');
            Route::patch('edit','ManagerController@editJob');
        });
        //友情链接的后台路由
        Route::group(['prefix' => 'link'], function (){
            Route::get('','ManagerController@showLink');
            Route::get('add','ManagerController@showLinkAdd');
            Route::get('edit/{id}','ManagerController@showLinkEdit');
            Route::post('add','ManagerController@addLink');
            Route::patch('edit/{id}','ManagerController@editLink');
            Route::delete('/{id}','ManagerController@deleteLink');
        });
        //汉雅主页的后台路由
        Route::group(['prefix' => 'home'], function (){
            Route::get('','ManagerController@showHome');
        });
    });
});
