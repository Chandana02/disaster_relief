<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Admin;
use App\Volunteers;
use App\Areas;
use App\Applicants;
use App\Requirements;
use Validator;
use Log;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
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

            $auth = Admin::where('username', $credentials['username'])
                         ->where('password', ($credentials['password'])) 
                         ->first();
            $applicants = Applicants::all();
            if($auth)
            {
                $request->session()->put('username', $credentials['username']);
                return view('admin.home')->with('applicants',$applicants);
                // return view('admin.home')->with('requirements', $requirements);
            }
            else
            { 
                session()->flash('message', 'Username or Password is incorrect!');
                return redirect()->back();
            }

        }
    }
    
    public function dropApplicant(Request $request)
    {
        if(session('username'))
            Applicants::where('id',$request->get('id'))->delete();
        return json_encode("none");
    }

    public function selectApplicant(Request $request)
    {
        if(session('username'))
        {
            $applicant = Applicants::where('id',$request->get('id'))->first();

            $volunteer = new Volunteers();
            
            $volunteer->username = $applicant->name;
            $volunteer->password = $applicant->name;
            $volunteer->city = $applicant->city;
            // $volunteer->contact = $request->input('contact');
            $volunteer->contact = $applicant->contact;
            

            $volunteer->save();
            // Mail::send(
            //     'email',['name'=>$applicant->name],function ($m) {
            //         $m->from('chandanabitra02@gmail.com','hi');
            //         $m->to('nks.shruti@gmail.com')->subject('crap');

            //     });

            Applicants::where('id',$request->get('id'))->delete();

        }

        //send email to email

        return json_encode("none");
    }

    public function assignArea(Request $request)
    {
        $area = $request->get('area');
        $volunteerId = $request->get('id');

        $areaCode = Areas::where('area', $area)->first()->id;
        Volunteers::where('id', $volunteerId)
                        ->update(["areaCode" => $areaCode]);

        return json_encode(["areaCode" => $areaCode]);
    }

    public function returnVolunteers(Request $request)
    {
        
        // $areaCode = Areas::where('city', $request->get('city'))->first()->areaCode;
        $volunteers = Volunteers::where('city', $request->get('city'))->get();

        for($i=0; $i < sizeof($volunteers); $i++)
        {
           
            // if($volunteers[$i]->areaCode == 1)
            // {
            //     $volunteers[$i]->areaCode = 
            // }
            // else
            // {
                $volunteers[$i]->areaCode = Areas::where('id', $volunteers[$i]->areaCode)->first()->area;
            // }
            
        }

        return view('admin.city')->with('volunteers', $volunteers);
    }

    public function logout()
    {
        session()->flush();
        return redirect('admin/login');
    }
}
