<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Applicants

class ApplicantsController extends Controller
{
    //

    public function applyView(Request $request)
    {
    	$rules = array(             
	        'name' => 'required',
	        'state' => 'required',
	        'city' => 'required',
	        'age' => 'required',
	        'gender' => 'required|in:Male,Female',
            'occupation' => 'required',
	        'reason' => 'required',  
	        'email' =>'required'          
    	);
    	$validator = Validator::make($request->input(), $rules);
    	if(validator->errors())
    	{
    		//pop-up
    	}
    	else
    	{
    		$applicant = new Applicants();
    		
    		$applicant->name = $request->input('name');
    		$applicant->state = $request->input('state');
    		$applicant->city = $request->input('city');
    		$applicant->age = $request->input('age');
    		$applicant->gender = $request->input('gender');
    		$applicant->occupation = $request->input('occupation');
    		$applicant->reason = $request->input('reason');
    		$applicant->email = $request->input('email');

    		$applicant->save();

    	}







    	}



    }
}
