<?php

namespace App\Http\Controllers;

use App\Model\EmployerDetails;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class registrationController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
            'company_name' => 'required',
            'user_name' => 'required',
            'email' => 'required|unique:users',
            'phone' => 'required',
            'password'=>'required',
            'confirm_password'=>'required|same:password'
        ]);
        $user = User::create([
            'user_name'=>$request->get('user_name'),
            'email'=>$request->get('email'),
            'password'=>bcrypt($request->get('password')),
            'status'=>'Active',
            'user_type'=>'Employer'
        ]);
        EmployerDetails::create([
            'user_id'=>$user->id,
            'company_name'=>$request->get('company_name'),
            'mobile'=>$request->get('phone'),
        ]);
       // Mail::to($request->get('email'))->send(new Registration($request));
        Session::flash('message', "Registration Successfully Done");
        return redirect()->back();

    }
}
