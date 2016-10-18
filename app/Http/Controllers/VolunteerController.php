<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Volunteers;
use App\Requirements;
use Validator;

class VolunteerController extends Controller
{
    public function login(Request $request)
    {
    	$validator = Validator::make($request->all(), [
            'username' => 'required' ,
            'password' => 'required'
        ]);

        if($validator->fails())
        { 
            session()->flash('message', 'Please fill in all the details');
            return redirect()->back();
        }

        else
        {
            $credentials = [
                'username' => $request->input('username'),
                'password' => $request->input('password')
            ];

            $auth = Volunteers::where('username', $credentials['username'])
                         ->where('password', ($credentials['password'])) 
                         ->first();
            if($auth)
            {
                $volunteerId = Volunteers::where('username', $credentials['username'])->first()->id;
                $request->session()->put('volunteerId', $volunteerId);
                $requirements = Requirements::where('volunteerId', session('volunteerId'))->get();
                return view('volunteer.home')->with('requirements', $requirements);
            }
            else
            { 
                session()->flash('message', 'Username or Password is incorrect!');
                return redirect()->back();
            }

        }
    }
}
