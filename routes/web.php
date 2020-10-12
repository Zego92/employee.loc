<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/employee', 'EmployeeController@index')->name('employee.index');
Route::get('employee/{employee}', 'EmployeeController@show')->name('employee.show');
Route::get('/department', 'DepartmentController@index')->name('department.index');
Route::get('/department/{department}', 'DepartmentController@show')->name('department.show');
