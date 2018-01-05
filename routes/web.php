<?php

Route::get('/', 'PrincipalController@index');
Route::get('/bienvenido', 'PrincipalController@index');
Route::get('/nosotros', 'PrincipalController@index');
Route::get('/blog', 'PrincipalController@index');
Route::get('/ubicacion', 'PrincipalController@index');

Route::get('/admin', 'AdminController@login');
Route::get('/admin/asistencia', 'AdminController@AsistenciaDomingo');

Route::post('asistencia', 'MembersController@show');
Route::post('reg_asistencia', 'AttendanceController@store');