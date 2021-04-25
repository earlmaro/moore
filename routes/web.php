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

Route::get('/change-password', function () {
    return view('welcome');
});

Route::post('/create-account', 'UserController@createuser');
Route::post('/password', 'UserController@passwordChange');
Route::post('/login', 'UserController@login');
Route::post('/excel-upload', 'SheetController@test');



Route::get('/', 'UserController@loginPage');

Route::get('/link', 'SheetController@getdata');
Route::get('/create-content', 'SheetController@createContent');
Route::post('/preview', 'SheetController@preview');
Route::post('/upload', 'SheetController@upload');




