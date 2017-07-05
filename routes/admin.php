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
Route::get('test2', function (){
    return  '213123';
});

Route::group(
    [
        'domain'=>'admin.laravel.com',
        'namespace'=>'Admin',
        'as'=>'admin.laravel.com::',
    ],function (){
        Route::any('/',function (){return '1231';});
});