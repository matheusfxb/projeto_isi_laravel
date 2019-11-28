<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
/    return $request->user();
/});
/Route::get('/', function () {
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
Route::get('/add', 'EmployeeController@store');*/
Route::resource('employee', 'EmployeeController');

