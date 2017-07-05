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


Route::group(
    [
        'domain'=>'admin.laravel.com',
        'namespace'=>'Admin',
        'as'=>'admin.laravel.com::',
    ],function (){
    Route::any('/',['as'=>'index','uses'=>'IndexController@index']);
    Route::any('login',['as'=>'login','uses'=>'AdminAuthController@login']);
    Route::any('doLogin',['as'=>'dologin','uses'=>'AdminAuthController@doLogin']);
});