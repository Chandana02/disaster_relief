<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Admin;

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
                         ->where('password', sha1($credentials['password'])) 
                         ->first();
            if($auth)
            {
                $request->session()->put('username', $credentials['username']);
                return view('admin.home')->with('requirements', $requirements);
            }
            else
            { 
                session()->flash('message', 'Username or Password is incorrect!');
                return redirect()->back();
            }

        }
    }
}
