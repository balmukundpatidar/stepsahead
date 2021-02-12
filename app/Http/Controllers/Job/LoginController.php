<?php

namespace App\Http\Controllers\Job;

use App\Model\EmployeeDetails;
use App\Model\JobEmployee;
use App\Model\Skills;
use App\Model\UserProfile;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{
    public function registration_view(){
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        return view('job.registration', ['address'=> $address, 'setttings'=> $setttings]);
    }
    public function login_view(){
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        return view('job.login' , ['address'=> $address, 'setttings'=> $setttings]);
    }
    public function login_validate(Request $request)
    {
        $email = $request->get('Email');
        $password = $request->get('password');
        $job_id = $request->get('id');

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            $error = $validator->errors();
            // Response::Error(Response::ValidationFormater($error->toArray()), "Validation errors found");
        }

        if (Auth::guard('web')->attempt(['email' => $email,'password' => $password,'user_type'=>'Employee','status'=>'Active'])) {
           $count= UserProfile::where('user_id',Auth::user()->id)->count();
            if($count>0) {
                if ($job_id){
                    JobEmployee::create([
                        'user_id' => Auth::user()->id,
                        'job_id' => $job_id,
                        'cover_letter' => '',
                    ]);
                Session::flash('message', "Job Applied");
            }
                return redirect(route('employee::dashboard'));
            }else{
                Session::flash('message', "Complete Registration Process");

                return redirect()->route('registration_next',['user_id'=>encrypt(Auth::user()->id)]);

            }

        }
        else {
            Session::flash('message', "No User Found");
            return redirect()->back();
        }



    }
    public function store(Request $request){
        $this->validate($request,[
            'location' => 'required',
            'mobile' => 'required',
            'expyear'=>'required',
            'profile'=>'required',
            'comp_name'=>'required',
            'basicedu'=>'required',
            'username'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required',
            'confirm_password'=>'required|same:password',
            'resume'=>'required',
            'key_skill'=>'required'
        ]);
        $user = User::create([
            'user_name'=>$request->get('username'),
            'email'=>$request->get('email'),
            'password'=>bcrypt($request->get('password')),
            'status'=>'Active',
            'user_type'=>'Employee'
        ]);
        if ($request->hasFile('resume')) {
            $file            = $request->file('resume');
            $destinationPath = '/uploads/resume/';
            $filename        = str_random(6) . '_' . $file->getClientOriginalName();
            $request->file('resume')->move(public_path().$destinationPath, $filename);
        }
        else{
            $filename = '';
        }
        EmployeeDetails::create([
            'user_id'=>$user->id,
            'company_name'=>$request->get('comp_name'),
            'location'=>$request->get('location'),
            'mobile'=>$request->get('mobile'),
            'exprience'=>$request->get('expyear'),
            'position'=>$request->get('profile'),
            'qualification'=>$request->get('basicedu'),
            'resume'=>$filename
        ]);
        $skills = explode(",",$request->get('key_skill'));
        foreach ($skills as $skill){
            Skills::create([
                'user_id'=>$user->id,
                'skills_name'=>$skill,
            ]);
        }
        // Mail::to($request->get('email'))->send(new Registration($request));
        Session::flash('message', "Registration Successfully Done");
        return redirect()->back();

    }
}

