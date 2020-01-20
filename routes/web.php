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

Route::get('/', 'HomeController@index')->name('home');
Route::get('categories/{id}', 'CategoryController@show')->name('categories.show');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::get('login','AdminHomeController@getLogin')->name('getAdminLogin');
    Route::post('login','AdminHomeController@postLogin')->name('postAdminLogin');

    Route::group(['middleware' => 'checkAdminLogin'], function (){
        Route::get('logout','AdminHomeController@getLogout')->name('adminLogout');
        Route::get('reset','AdminHomeController@getReset')->name('adminReset');
        Route::get('index','AdminHomeController@index')->name('indexAdmin');
        Route::get('profile/{id}', 'AdminUserController@getProfile')->name('AdminProfile');
        Route::post('profile/change-password', 'AdminUserController@postChangePass')->name('postAdminChangePass');
        Route::resource('categories', 'AdminCategoryController');
        Route::resource('posts', 'AdminPostController');
        Route::resource('pages', 'AdminPageController');
    });
});

