<?php

namespace App\Http\Controllers\Employee;

use App\Model\EmployeeDetails;
use App\Model\Skills;
use App\Model\User;
use App\Model\UserProfile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('employee');

    }

//    public function edit($id)
//    {
//
//        $a=array();
//        $info = EmployeeDetails::where('user_id',$id)->first();
//        $user_info =User::select('user_name','email')->where('id',$id)->first();
//        $skill = Skills::where('user_id',$id)->get();
//        foreach($skill as $skills){
//            array_push($a,$skills->skills_name);
//        }
//        return view('job.employee.profile.edit',['info'=> $info,'user_info'=>$user_info,'skill'=>$a]);
//    }


    public function update(Request $request)
    {
        $user_id=Auth::user()->id;
        $this->validate($request, [
            'title' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'postcode' => 'required',
            'dob' => 'required',
            'email'=>'required|unique:users,email,'.$user_id,
//            'ns' => 'required',
//            'mobile'=>'required',
//            'telephone'=>'required',
//            'work_permit' => 'required',
//            'work_permit_valid'=>'required',
//            'passport_no'=>'required',
//            'passport_expire' => 'required',
//            'dbs_no'=>'required',
//            'dbs_issue'=>'required',
            'birth_country' => 'required',
            'nationality' => 'required',
//            'nmc_pim'=>'required',
//            'nmc_pim_expire' => 'required',
//            'driver_license'=>'required',
//            'driver_license_no'=>'required',
        ]);

        $profile = UserProfile::where('user_id', $user_id)
            ->update([
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
            ]);

        DB::table('users')
            ->where('id', $user_id)
            ->update(['email'=>$request->get('email')]);


        Session::flash('message', "Edited successfully");

        return redirect()->back();
    }
    public function editPassword()
    {
        return view('job.employee.profile.password');
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

    public function updateEmg(Request $request)
    {
        $this->validate($request, [

//            'emg_name' => 'required',
//            'emg_relation'=>'required',
//            'emg_email'=>'required',
//            'emg_address' => 'required',
//            'emg_postcode'=>'required',
//            'emg_mobile'=>'required',
//            'emg_telephone'=>'required',
        ]);

        $user_id=Auth::user()->id;
        $profile = UserProfile::where('user_id', $user_id)
            ->update([
                'emg_name' => $request->get('emg_name'),
                'emg_relation' => $request->get('emg_relation'),
                'emg_mail' => $request->get('emg_email'),
                'emg_address' => $request->get('emg_address'),
                'emg_postcode' => $request->get('emg_postcode'),
                'emg_mobile' => $request->get('emg_mobile'),
                'emg_telephone' => $request->get('emg_telephone'),
                ]);

        Session::flash('message', "Saved successfully");

        return redirect()->back();
    }
    public function updateImage(Request $request, $id)
    {

        $EmpDetails = UserProfile::find($id);
        if ($request->hasFile('image')) {
            $file            = $request->file('image');
            $destinationPath = '/uploads/profile_image/';
            $filename        = str_random(6) . '_' . $file->getClientOriginalName();
            $request->file('image')->move(public_path().$destinationPath, $filename);
            $EmpDetails->user_image = $filename ;
        }

        $EmpDetails->save();

        Session::flash('message', "Saved successfully");

        return redirect()->back();
    }
    public function updateCV(Request $request, $id)
    {

        $EmpDetails = UserProfile::find($id);
        if ($request->hasFile('biodata')) {
            $file            = $request->file('biodata');
            $destinationPath = '/uploads/biadata/';
            $filename        = str_random(6) . '_' . $file->getClientOriginalName();
            $request->file('biodata')->move(public_path().$destinationPath, $filename);
            $EmpDetails->biodata = $filename ;
        }

        $EmpDetails->save();

        Session::flash('message', "Saved successfully");

        return redirect()->back();
    }



}
