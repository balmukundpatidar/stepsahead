<?php

namespace App\Http\Controllers\Job;

use App\Model\JobEmployee;
use App\Model\UserEducation;
use App\Model\UserEmployment;
use App\Model\UserProfile;
use App\Model\UserTraining;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class RegistrationController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
            'email' => 'required|unique:users',
            'password'=>'required',
            'confirm_password'=>'required|same:password'
        ]);
        $user = User::create([
            'email'=>$request->get('email'),
            'password'=>bcrypt($request->get('password')),
            'status'=>'Active',
            'user_type'=>'Employee'
        ]);
        $job_id=$request->get('id');
        Session::flash('message', "Registration Successfully Done");
        return redirect()->route('registration_next',['user_id'=>encrypt($user->id),'id'=>$job_id]);

    }
    public function registrationNext(Request $request,$user_id){
        $user_id=decrypt($user_id);
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        $find=User::find($user_id);
        $job_id=$request->get('id');
        if($find)
        return view('job.job.registraion_details',['address'=> $address, 'setttings'=> $setttings,'user_id'=>encrypt($user_id),'message'=>'Data Found','id'=>$job_id ]);
        else
            return view('job.job.registraion_details',['address'=> $address, 'setttings'=> $setttings,'user_id'=>encrypt($user_id),'message'=>'Data Not Found','id'=>$job_id ]);

    }

    public function step1(Request $request){

    }

    public function upload_cv(Request $request){
        if ($request->hasFile('biodata')) {
            $file            = $request->file('biodata');
            $destinationPath = '/uploads/biadata/';
            $filename        = str_random(6) . '_' . $file->getClientOriginalName();
            $request->file('biodata')->move(public_path().$destinationPath, $filename);
            return response()->json(['success'=>'3']);
        }
    }
    public function registrationNextStore(Request $request,$user_id){
        // CHM-WAL
        $user_id=decrypt($user_id);
        Session::put('user_id',$user_id);
        $job_id=$request->get('id');
        $jobApplyId=Session::get('jobApplyId');
        $count=UserProfile::where('user_id',$user_id)->count();
        if($count>0){
           echo "Invalid User";
        }else {


            $this->validate($request, [
                'title' => 'required',
                'first_name' => 'required',
                'last_name' => 'required',
                'address' => 'required',
                'postcode' => 'required',
                'dob' => 'required',
//            'ns' => 'required',
//            'mobile'=>'required',
//            'telephone'=>'required',
//            'work_permit' => 'required',
//            'work_permit_valid'=>'required',
//            'passport_no'=>'required',
//            'passport_expire' => 'required',
//            'dbs_no'=>'required',
//            'dbs_issue'=>'required',
//                'birth_country' => 'required',
//                'nationality' => 'required',
//            'nmc_pim'=>'required',
//            'nmc_pim_expire' => 'required',
//            'driver_license'=>'required',
//            'driver_license_no'=>'required',
//            'emg_name' => 'required',
//            'emg_relation'=>'required',
//            'emg_email'=>'required',
//            'emg_address' => 'required',
//            'emg_postcode'=>'required',
//            'emg_mobile'=>'required',
//            'emg_telephone'=>'required',
//                'edu_name' => 'required',
//                'edu_city' => 'required',
//                'edu_institute' => 'required',
//                'edu_date_from' => 'required',
//                'edu_date_to' => 'required',
//                'edu_subject' => 'required',
//                'edu_grade' => 'required',
//            'emp_name'=>'required',
//            'emp_position' => 'required',
//            'emp_salary'=>'required',
//            'emp_address'=>'required',
//            'emp_postcode' => 'required',
//            'emp_date_from'=>'required',
//            'emp_date_to'=>'required',
//            'emp_duties' => 'required',
//            'emp_leaving_reason'=>'required',
//            'training_name'=>'required',
//            'training_date'=>'required'
            ]);

            UserProfile::create([
                'user_id' => $user_id,
                'title' => $request->get('title'),
                'first_name' => $request->get('first_name'),
                'last_name' => $request->get('last_name'),
                'address' => $request->get('address'),
                'post_code' => $request->get('postcode'),
                'dob' => $request->get('dob'),
                'national_insurance_no' => $request->get('ns'),
                'mobile' => $request->get('mobile'),
                'telephone' => $request->get('telephone'),
                'work_permit' => $request->get('work_permit'),
                'work_permit_valid' => $request->get('work_permit_valid'),
                'passport_no' => $request->get('passport_no'),
                'passport_expire' => $request->get('passport_expire'),
                'dbs_no' => $request->get('dbs_no'),
                'dbs_issue' => $request->get('dbs_issue'),
                'birth_country' => $request->get('birth_country'),
                'nationality' => $request->get('nationality'),
                'nmc_pim' => $request->get('nmc_pim'),
                'nmc_pim_expire' => $request->get('nmc_pim_expire'),
                'driver_license' => $request->get('driver_license'),
                'driver_license_no' => $request->get('driver_license_no'),
                'emg_name' => $request->get('emg_name'),
                'emg_relation' => $request->get('emg_relation'),
                'emg_mail' => $request->get('emg_email'),
                'emg_address' => $request->get('emg_address'),
                'emg_postcode' => $request->get('emg_postcode'),
                'emg_mobile' => $request->get('emg_mobile'),
                'emg_telephone' => $request->get('emg_telephone'),
                'hear_about'  => $request->get('hear_about'),
                //'biodata' => $filename
            ]);
            if ($request->get('emp_name') != "") {
                UserEmployment::create([
                    'user_id' => $user_id,
                    'emp_name' => $request->get('emp_name'),
                    'emp_position' => $request->get('emp_position'),
                    'emp_salary' => $request->get('emp_salary'),
                    'emp_address' => $request->get('emp_address'),
                    'emp_postcode' => $request->get('emp_postcode'),
                    'emp_date_from' => $request->get('emp_date_from'),
                    'emp_date_to' => $request->get('emp_date_to'),
                    'summaries' => $request->get('emp_duties'),
                    'leaving_reason' => $request->get('emp_leaving_reason'),
                ]);
            }
            if ($request->get('edu_name') != "") {
                UserEducation::create([
                    'user_id' => $user_id,
                    'edu_qualification' => $request->get('edu_name'),
                    'edu_city' => $request->get('edu_city'),
                    'edu_institute' => $request->get('edu_institute'),
                    'edu_date_from' => $request->get('edu_date_from'),
                    'edu_date_to' => $request->get('edu_date_to'),
                    'edu_subject' => $request->get('edu_subject'),
                    'grade' => $request->get('edu_grade'),
                ]);
            }
            if ($request->get('training_name') != "") {
                UserTraining::create([
                    'user_id' => $user_id,
                    'tra_name' => $request->get('training_name'),
                    'tra_taken' => $request->get('training_date'),
                ]);
            }
            if($job_id){
                JobEmployee::create([
                    'user_id'=>$user_id,
                    'job_id'=>$job_id,
                    'cover_letter'=>'',
                ]);
                Session::flash('message', "You have successfully applied for this job.");

            }
            if($jobApplyId != null){
                JobEmployee::create([
                    'user_id'=>$user_id,
                    'job_id'=>$jobApplyId,
                    'cover_letter'=>'',
                ]);
                Session::flash('message', "You have successfully applied for this job.");

            }
            if(Session::has('user_id')){Auth::loginUsingId(Session::get('user_id'));}
            Session::flash('message1', "You Have To Login In");
            return response()->json(['success'=>'1']);
            //return redirect(route('my-application'));
        }
    }
}
