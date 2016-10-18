<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Requirements;
use App\Areas;

class UserController extends Controller
{
    
	public function getReq($city)
	{
		$areas = Areas::where('city',$city)->get();
		$req = [];
		$i=0;
		foreach($areas as $area)
		{
			$req[$i] = Requirements::where('areaCode',$area->id)->get(); 
			$i++;
		}
		$data = [
					'areas' => $areas,
					'requirements' => $req
				];
		return view('user.city')->with($data);
	}
}
