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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function(){
    Route::get('login','Admin\AdminHomeController@getLogin')->name('getAdminLogin');
    Route::post('login','Admin\AdminHomeController@postLogin')->name('postAdminLogin');

    Route::group(['middleware' => 'checkAdminLogin'], function (){
        Route::get('logout','Admin\AdminHomeController@getLogout')->name('adminLogout');
        Route::get('reset','Admin\AdminHomeController@getReset')->name('adminReset');
        Route::get('index','Admin\AdminHomeController@index')->name('indexAdmin');
        Route::resource('categories', 'Admin\AdminCategoryController');
        Route::resource('posts', 'Admin\AdminPostController');
        Route::resource('pages', 'Admin\AdminPageController');
    });
});
