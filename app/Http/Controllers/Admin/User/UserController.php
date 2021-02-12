<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Model\EmployeeDetails;

use App\Model\EmployeeExperience;

use App\Model\Job;

use App\Model\JobEmployee;

use App\Model\Skills;

use App\Model\UserEducation;

use App\Model\UserEmployment;

use App\Model\UserProfile;

use App\Model\UserTraining;

use App\User;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\DB;

use PDF;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');

    }

    public function index(){
        $user_list = User::where('user_type','Employee')->get();
        return view('admin.user.index',[
            'user_list' => $user_list,
            'user_type'=>'Employee'
        ]);
    }

    public function employer_index(){
        $user_list = User::where('user_type','Employer')->get();
        return view('admin.user.index',['user_list' => $user_list,'user_type'=>'Employer'
        ]);
    }
    public function userActive($user_id,$status){
        $users = User::find($user_id);
        $users->status = $status;
        $users->save();
//        if($status=='Active') {
//            $user_details = Users::select('f_name', 'l_name', 'email')->where('_id', $user_id)->first();
//            Mail::to($user_details->email)->send(new ShopActive($user_details));
//        }
//        if($status=='InActive') {
//            $user_details = Users::select('f_name', 'l_name', 'email')->where('_id', $user_id)->first();
//            Mail::to($user_details->email)->send(new ShopInActive($user_details));
//        }
        Session::flash('message', "User Active");
        return redirect()->back();

    }

    // CHM-WAL userDetail

    public function userDetail(Request $request){
        
        $users = User::select('users.*','user_profile.*','user_profile.id as user_profile_id','users.id as user_id')
                    ->join('user_profile', 'user_profile.user_id','=','users.id')
                    ->get();
        return view('admin.user.user_detail',['users'=>$users]);

    }

    // CHM-WAL edit detail
    public function editUserDetail($user_id)
    {

        $employee = UserProfile::where('user_id',$user_id)->count();

        if($employee > 0){

            $data = UserProfile::where('user_id',$user_id)->first();

            $training = UserTraining::where('user_id',$user_id)->get();
            // CHM-WAL
            $user = User::select('id','user_name','email')->where('id',$user_id)->first();
            $exp=UserEmployment::where('user_id',$user_id)->get();

            $edu=UserEducation::where('user_id',$user_id)->get();

            return view('admin.user.user_detail_edit',['data'=>$data,'user'=>$user,'trainings'=>$training,'exps'=>$exp,'edus'=>$edu]);

        }else{
            // CHM-WAL

            $data = collect();
            $user = "";
            dd('No data available');
            // return view('admin.job_application.user_detail',['data'=>$data,'user'=>$user]);

        }
    } 
    
     // CHM-WAL update USER
    public function updateUserDetail(Request $request)
    { 
        $user_id = $request->user_id;
        // dd(\Request::all());
        // user table updation
        $email = ($request->email) ?($request->email) :"";
        $updatUserInfo = User::where('id',$user_id)->update(['email' => $email]);

        // user profile updation
        $title              = ($request->title) ? ($request->title) : "";
        $first_name         = ($request->first_name)?($request->first_name) :"";
        $last_name          = ($request->last_name)?($request->last_name) :"";
        $address            = ($request->address)?($request->address) :"";
        $post_code          = ($request->post_code)?($request->post_code) :"";
        $dob                = ($request->dob)?($request->dob) :"";
        $birth_country      = ($request->birth_country)?($request->birth_country) :"";
        $nationality        = ($request->nationality)?($request->nmc_pim_expire) :"";
        $national_insurance_no = ($request->national_insurance_no)?($request->nmc_pim_expire) :"";
        $mobile             = ($request->mobile)?($request->mobile) :"";
        $telephone          = ($request->telephone)?($request->telephone) :"";
        $work_permit        = ($request->work_permit)?($request->work_permit) :"";
        $work_permit_valid  = ($request->work_permit_valid)?($request->work_permit_valid) :"";
        $passport_no        = ($request->passport_no)?($request->passport_no) :"";
        $passport_expire    = ($request->passport_expire)?($request->passport_expire) :"";
        $dbs_no             = ($request->dbs_no)?($request->dbs_no) :""; 
        $dbs_issue          = ($request->dbs_issue)?($request->dbs_issue) :"";
        $nmc_pim            = ($request->nmc_pim)?($request->nmc_pim_expire) :""; 
        $nmc_pim_expire     = ($request->nmc_pim_expire)?($request->nmc_pim_expire) :"";
        $driver_license     = ($request->driver_license)?($request->driver_license) :"";
        $driver_license_no  = ($request->driver_license_no)?($request->driver_license_no) :"";
        $emg_name           = ($request->emg_name)?($request->emg_name) :"";
        $emg_relation       = ($request->emg_relation)?($request->emg_relation) :"";
        $emg_mail           = ($request->emg_mail)?($request->emg_mail) :"";
        $emg_address        = ($request->emg_address)?($request->emg_address) :"";
        $emg_postcode       = ($request->emg_postcode)?($request->emg_postcode) :"";
        $emg_mobile         = ($request->emg_mobile)?($request->emg_mobile) :"";
        $emg_telephone      = ($request->emg_telephone)?($request->emg_telephone) :"";

        $updatUserProfileInfo = UserProfile::where('user_id',$user_id)->update(['title'=>$title,'first_name'=>$first_name,'last_name'=>$last_name,'address'=>$address,'post_code'=>$post_code,'dob'=>$dob,'birth_country'=>$birth_country,'nationality'=>$nationality,'national_insurance_no'=>$national_insurance_no,'mobile'=>$mobile,'telephone'=>$telephone,'work_permit'=>$work_permit,'work_permit_valid'=>$work_permit_valid,'passport_no'=>$passport_no,'passport_expire'=>$passport_expire,'dbs_no'=>$dbs_no,'dbs_issue'=>$dbs_issue,'nmc_pim'=>$nmc_pim,'nmc_pim_expire'=>$nmc_pim_expire,'driver_license'=>$driver_license,'driver_license_no'=>$driver_license_no,'emg_name'=>$emg_name,'emg_relation'=>$emg_relation,'emg_mail'=>$emg_mail,'emg_address'=>$emg_address,'emg_postcode'=>$emg_postcode,'emg_mobile'=>$emg_mobile,'emg_telephone'=>$emg_telephone]);

        // update employment
        $emp_name = $request->emp_name;
        if ($emp_name != null) {
            foreach ($emp_name as $id =>$val)
            {
                $updatEmployment = UserEmployment::where('id',$id)->update(["emp_name"         => $emp_name[$id],
                    "emp_position"     => ($request->emp_position[$id]) ? ($request->emp_position[$id]) : "",
                    "emp_salary"       => ($request->emp_salary[$id]) ? $request->emp_salary[$id] : 0,
                    "emp_address"      => ($request->emp_address[$id]) ? $request->emp_address[$id] : "",
                    "emp_postcode"      => ($request->emp_postcode[$id]) ? $request->emp_postcode[$id] : "",
                    "emp_date_from"      => ($request->emp_date_from[$id]) ? $request->emp_date_from[$id] : "",
                    "emp_date_to"      => ($request->emp_date_to[$id]) ? $request->emp_date_to[$id] : "",
                    "summaries"      => ($request->summaries[$id]) ? $request->summaries[$id] : "",
                    "leaving_reason"      => ($request->leaving_reason[$id]) ? $request->leaving_reason[$id] : ""]);
            }
            
        }

        // update education information
        $edu_qualification = $request->edu_qualification;
        if ($edu_qualification != null) {
            foreach ($edu_qualification as $id =>$val)
            {
                $updatEducation = UserEducation::where('id',$id)->update(
                    [
                    "edu_qualification" => $edu_qualification[$id],
                    "edu_city"          => ($request->edu_city[$id]) ? ($request->edu_city[$id]) : "",
                    "edu_institute"     => ($request->edu_institute[$id]) ? $request->edu_institute[$id] : 0,
                    "edu_date_from"    => ($request->edu_date_from[$id]) ? $request->edu_date_from[$id] : "",
                    "edu_date_to"      => ($request->edu_date_to[$id]) ? $request->edu_date_to[$id] : "",
                    "edu_subject"      => ($request->edu_subject[$id]) ? $request->edu_subject[$id] : "",
                    "grade"      => ($request->grade[$id]) ? $request->grade[$id] : ""
                    ]
                );
            }
            
        }

        // update training information
        $tra_name = $request->tra_name;
        if ($tra_name != null) {
            foreach ($tra_name as $id =>$val)
            {
                $updatTraining = UserTraining::where('id',$id)->update(
                    [
                    "tra_name"  => $tra_name[$id],
                    "tra_taken" => ($request->tra_taken[$id]) ? ($request->tra_taken[$id]) : ""
                    ]
                );
            }
            
        }

        Session::flash('message','Data updated successfully');
        return redirect('admin/edit_user_details/'.$user_id);
        
    }  

    // CHM-WAL DELETE USER
    public function deleteUser(Request $request)
    {
        $user_id = $request->user_id;

        $data = UserProfile::where('user_id',$user_id)->delete();

        $training = UserTraining::where('user_id',$user_id)->delete();

        $user = User::where('id',$user_id)->delete();

        $exp =UserEmployment::where('user_id',$user_id)->delete();

        $edu=UserEducation::where('user_id',$user_id)->delete();

        Session::flash('message','Data deleted successfully');

        return redirect('admin/user_detail/');
    }
}
