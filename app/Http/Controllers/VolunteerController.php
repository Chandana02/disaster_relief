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
                         ->where('password', sha1($credentials['password'])) 
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

    public function updateRequirements(Request $request)
    {
        $areaCode = Volunteers::where('id', session('volunteerId'))->first()->areaCode;

        $requirements = new Requirements();

        $requirements->volunteerId = session('volunteerId');
        $requirements->areaCode = $areaCode;
        $requirements->requirement = $request->get('item');
        $requirements->quantity = $request->get('quantity');

        $requirements->save();

        return json_encode(["item" => $request->get('item'), "quantity" => $request->get('quantity')]);
    }

    public function dropRequirements(Request $request)
    {
        Requirements::where('volunteerId', session('volunteerId'))->delete();
        return json_encode("none");
    }

    public function deleteRequirements(Request $request)
    {
        Requirements::where('requirement', $request->get('requirement'))
                        ->where('volunteerId', session('volunteerId'))->delete();
        return json_encode("none");
    }

    public function logout()
    {
        session()->flush();
        return redirect('volunteer/login');
    }
}
