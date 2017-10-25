<?php


Route::redirect('/', 'login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', 'DashboardController@dashboard')->name('auth.dashboard');
    // Employee Management
    Route::get('/employees', 'EmployeesController@index')->name('employees.index');
    Route::get('/employees/create', 'EmployeesController@create')->name('employees.create');
});
