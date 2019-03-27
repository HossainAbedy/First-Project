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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//api for employee
Route::get('employees', 'EmployeeController@index');
Route::get('employee/{id}', 'EmployeeController@show');
Route::post('employee', 'EmployeeController@store');
Route::put('employee', 'EmployeeController@store');
Route::delete('employee/{id}', 'EmployeeController@destroy');

//api for log
Route::get('logs', 'LogController@index');
Route::get('log/{id}', 'LogController@show');
Route::post('log', 'LogController@store');
Route::put('log', 'LogController@store');
Route::delete('log/{id}', 'LogController@destroy');