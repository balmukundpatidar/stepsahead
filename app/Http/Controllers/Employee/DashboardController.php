<?php

namespace App\Http\Controllers\Employee;

use App\Model\Acheivement;
use App\Model\EmployeeDetails;
use App\Model\EmployeeExperience;
use App\Model\Skills;
use App\Model\User;
use App\Model\UserEducation;
use App\Model\UserEmployment;
use App\Model\UserProfile;
use App\Model\UserTraining;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('employee');

    }

    public function index(){
        if(Session::has('user_id')){Auth::loginUsingId(Session::get('user_id'));}
        $user_id = Auth::user()->id;
        $count = UserProfile::where('user_id',$user_id)->count();
        if($count>0) {
            $user = User::select('user_name', 'email')->where('id', $user_id)->first();
            $profile_info = UserProfile::where('user_id', $user_id)->first();
            $experience = UserEmployment::where('user_id', $user_id)->get();
            $acheivement = UserTraining::where('user_id', $user_id)->get();
            $education = UserEducation::where('user_id', $user_id)->get();
            $address = DB::table('address')->get();
            $setttings = DB::table('site_setttings')->where('id', 1)->first();
            return view('job.employee.dashboard', [
                'experiences' => $experience,
                'acheivements' => $acheivement,
                'education' => $education,
                'user_id' => $user_id,
                'profile_info' => $profile_info,
                'user' => $user, 'address'=> $address, 'setttings'=> $setttings
            ]);
        }else{
            Session::flash('message', "Complete Registration Process");

            return redirect()->route('registration_next',['user_id'=>encrypt(Auth::user()->id)]);

        }
    }

    public function logout(){
        Auth::logout();
        return redirect(url('/job_potal/login'));
    }//
}
