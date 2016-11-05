<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Requirements;
use App\Areas;
use App\Volunteers;

class UserController extends Controller
{
    
	public function getReq($city)
	{
		$areas = Areas::where('city',$city)->get();
		$data = [];
		$i=0;
		foreach($areas as $area)
		{
			$requirementsPerArea = Requirements::where('areaCode',$area->id)->get();
			foreach($requirementsPerArea as $req)
			{
				$data[$i]['areaName'] = $area->area;
				$data[$i]['requirements'] = $req->requirement;
				$data[$i]['quantity'] = $req->quantity;
				$volunteer = Volunteers::where('id', $req->volunteerId)->first();
				$data[$i]['name'] = $volunteer->username;
				$data[$i]['contact'] = $volunteer->contact;
				$i++;
			}
		}
		return view('user.city')->with('data', $data);
	}
}
