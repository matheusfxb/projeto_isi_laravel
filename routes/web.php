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

Route::get('/hello', function () {
    //return view('welcome');
    return '<h1>Hello World</h1>';
});

Route::get('/about', function (){
    return view('about');
});

Route::get('/users/{id}/{name}', function ($id, $name){
    return 'This is user '.$name. ' with an id of '.$id;
});

Route::get('/', 'EmployeeController@index');
Route::get('/add', 'EmployeeController@create');
Route::get('/edit', 'EmployeeController@edit');
Route::get('/view', 'EmployeeController@list');