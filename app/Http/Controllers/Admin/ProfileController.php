<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');

    }

    public function index()
    {
        $user_id=Auth::user()->id;
        $user_info =User::select('user_name','email')->where('id',$user_id)->first();
        return view('admin.profile.profile',['user_info'=>$user_info]);
    }


    public function update(Request $request)
    {
        $user_id=Auth::user()->id;
        $this->validate($request,[
            'user_name'=>'required',
            'email'=>'required|unique:users,email,'.$user_id,
        ]);
        $EmpDetails = User::find($user_id);
        $EmpDetails->user_name = $request->get('user_name');
        $EmpDetails->email = $request->get('email');
        $EmpDetails->save();


        Session::flash('message', "Edited successfully");

        return redirect()->back();
    }


    public function edit_password(){
        return view('admin.profile.password');
    }

    public function update_password(Request $request){
        $id = Auth::user()->id;
        $this->validate($request, [
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);
        User::where('id', $id)->update(['password' => bcrypt($request->password)]);
        return redirect()->back()->with('message', 'Password Changed Successfully');
    }
}
