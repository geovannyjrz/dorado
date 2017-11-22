<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AsistenciaDomingo(){

    	return view('admin.asistencia_domingo');

    }
}
