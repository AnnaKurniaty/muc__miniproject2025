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

use Illuminate\Support\Facades\Route;

Route::prefix('employees')->group(function() {
    Route::get('/index', 'EmployeesController@index')->name('employees.index');
    Route::post('/', 'EmployeesController@store')->name('employees.store');
    Route::patch('/{id}/status', 'EmployeesController@updateStatus')->name('employees.updateStatus');
});
