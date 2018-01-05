<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

	public function login(){
		return view('admin.login');
	}

	public function AsistenciaDomingo(){

		return view('admin.asistencia_domingo');

	}
}
