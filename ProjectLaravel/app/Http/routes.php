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

Route::get('/Create', function () {
    return view('users.create');
});

Route::get('/Show', 'MsUserController@Tampil') -> name('show');

Route::post('/adduser','MsUserController@Simpan');

Route::get('/Delete/id/{id}','MsUserController@Delete');
 
//Route::get('/Delete/{id}','MsUserController@Delete');
