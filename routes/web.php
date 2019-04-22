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

/*Route::get('/', function () { // default  router laravel
    return view('welcome');
});*/


Route::get('/', 'SiteController@main'); // custom router
Route::get('/contacts', 'SiteController@contacts'); // custom router
Route::get('/category/{id}', 'SiteController@category'); // custom router

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
