<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendance;

class AttendanceController extends Controller
{
    public function store(){
    	$Attendance = new Attendance;
    	$Attendance->member_id = request('Id');

		$Attendance->save();

		return array( 'validacion' => true );
    }
}
