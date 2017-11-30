<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MembersController extends Controller
{
	public function show(){

		$Code = request('Code');

		$data = Member::where('code', $Code)->get();

		if($data->count()>0){
			return array(
				'validacion' => true,
				'user'=>array(
					'Id'=>$data[0]->id,
					'Nombre'=>$data[0]->name,
					'Familia'=>$data[0]->family
				)
			);
		}

		return array(
			'validacion' => false,
			'mensaje' => "Usuario no encontrado"
		);
	}
}
