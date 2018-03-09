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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::group(['middleware' => 'web'], function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/department', 'DepartmentController@index')->name('department');
    Route::get('/logout', 'HomeController@logout')->name('logout');
    Route::get('/department/{depID}/', 'DepartmentController@department');
});
