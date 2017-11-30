<?php

Route::get('/', 'PrincipalController@index');
Route::get('/Asistencia', 'AdminController@AsistenciaDomingo');

Route::post('asistencia', 'MembersController@show');
Route::post('reg_asistencia', 'AttendanceController@store');