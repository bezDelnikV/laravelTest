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

Route::get('database-test',function (){
   if( DB::connection()->getDatabaseName() )
   {
       echo 'Connected succesfuly: '.DB::connection()->getDatabaseName();
   }
});
Route::get('People','tbl_usersController@index');

Route::get('addUser','tbl_usersController@addUser');

Route::post('/addUser1','tbl_usersController@addUserPost');
