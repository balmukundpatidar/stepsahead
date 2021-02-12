<?php

namespace App\Http\Controllers\Job;

use App\Mail\AppliedJob;
use App\Mail\JobApplied;
use App\Model\Category;
use App\Model\EmployerDetails;
use App\Model\Job;
use App\Model\JobEmployee;
use App\Model\UserProfile;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class JobController extends Controller
{
    //
    public function index(){
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        $job = Job::where('job_status','Active')->orderBy('created_at','desc')->paginate('12');
        return view('job.job.job',['address'=> $address, 'setttings'=> $setttings,'jobs'=>$job]);
    }
    public function applyJob($job_id){
        // if(Session::has('user_id')){  Auth::loginUsingId(Session::get('user_id'));}
        if(Auth::check()){
            $count=UserProfile::where('user_id',Auth::user()->id)->count();
            if($count>0) {
                JobEmployee::create([
                    'user_id' => Auth::user()->id,
                    'job_id' => $job_id,
                    'cover_letter' => '',
                ]);
                if (UserProfile::where('user_id', Auth::user()->id)->count())
                {
                    $user_details = User::select('user_name', 'email')->where('id', Auth::user()->id)->first();
                    $profile = UserProfile::where('user_id', Auth::user()->id)->first();
                $jobDetails = Job::where('id', $job_id)->first();
                Mail::to($user_details->email)->send(new AppliedJob($user_details, $profile, $jobDetails));

                Mail::to('belal.almassri@gmail.com')->send(new JobApplied($user_details , $profile,$jobDetails));
                }

                Session::flash('message', "Job Applied");
                return redirect()->back();
            }else{
                Session::flash('message', "Complete Registration Process");

                return redirect()->route('registration_next',['user_id'=>encrypt(Auth::user()->id),'id'=>$job_id]);

            }
        }else{
            return redirect(route('my-application',['id'=>$job_id]));
            //return view('job.job.my_application');
        }
    }
    public function myApplication(Request $request){
          $job_id=$request->get('id');
          $address = DB::table('address')->get();
          $setttings = DB::table('site_setttings')->where('id', 1)->first();
              return view('job.job.my_application', ['address'=> $address, 'setttings'=> $setttings,'job_id' => $job_id]);
    }
    // CHM-WAL RESET PASSWORD
    public function resetPassword(Request $request){
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        return view('job.job.reset_password', ['address'=> $address, 'setttings'=> $setttings]);
    }

    public function userResetPassword(Request $request){
         
         // Validation
        $this->validate($request, [
            'reset_email'     =>  'required',
            'reset_password'  =>  'required_with:reset_confirm_password|same:reset_confirm_password',
            'reset_confirm_password'=>'required'
        ]);
        $email = $request->reset_email;
        if ($email != null) {

            $validateEmail = User::where('email',$email)->first();

            if ($validateEmail != null) {

                $password = $request->reset_password;
                $updatePassword = User::where('email',$email)->update(['password' => bcrypt($password)]);
                 // Success Message
                Session::flash('message', 'Password reset successfully!');
                return redirect(route('my-application'));
            }else{

                Session::flash('message', 'Email not exists!');
                return redirect('user_reset_password');
            }
            
            
        }
    }
    public function applicationQuestion(Request $request,$job_id=0){
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
     return view ('job.job.application',['address'=> $address, 'setttings'=> $setttings,'job_id'=>$job_id]);
    }
    public function jobDetails($slug){
        // CHM-WAL

        $job = Job::where('slug',$slug)->first();
        if($job) {
            Session::put('jobApplyId',$job->id);
        } else {
            $job = array();
        }
        
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
       return view('job.job.job_details',['address'=> $address, 'setttings'=> $setttings,'job'=>$job]);
    }
    public function job_query(Request $request){

        $postPerPage= 10;
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        if( $request->get('page') != '' ){

            if ($request->get('page') == 1) {
                $offset = 0;
            } else {
                $offset = ( $request->get('page') * $postPerPage ) - $postPerPage;
            }
        } else {
            $offset = 0;
        }

        $keyword = $request->get('keyword');
        $division = $request->get('division');
        $location = $request->get('location');
        //$postal_code = $request->get('postal_code');

        if($division!=''){
            $query1 = " AND job_type='$division'";
        }
        else{
            $query1='';
        }
        if($location!=''){
            $query2 = " AND job_location ='$location'";
        }
        else{
            $query2='';
        }
        if($keyword!=''){
            $query3 = " AND (job_title LIKE '$keyword' OR job_state LIKE '$keyword' OR job_city LIKE '$keyword')";
        }
        else {
            $query3 = '';
        }
//        if($postal_code!=''){
//            $query4 = " AND job_zip_code ='$postal_code'";
//            }
//            else{
//                $query4='';
//            }

        $Total = "SELECT * FROM job WHERE 1 ".$query1."$query2"."$query3"."AND job_status='Active'";
        $TotalResult = DB::select($Total);
        $total = round(count($TotalResult) / $postPerPage);

        $Query = "SELECT * FROM job WHERE 1 ".$query1."$query2"."$query3"."AND job_status='Active' LIMIT $offset,$postPerPage";
        $result = DB::select($Query);

        return view('job.job.job',['address'=> $address, 'setttings'=> $setttings,'jobs'=>$result,'pages' => $total]);
        }





    public function autoComplete(Request $request) {
        $query = $request->get('term');

        $products=Category::where('cat_title','LIKE','%'.$query.'%')->get();

        $data=array();
        foreach ($products as $product) {
            $data[]=array('value'=>$product->cat_title,'id'=>$product->id);
        }
        if(count($data))
            return $data;
        else
            return ['value'=>'No Result Found','id'=>''];
    }
    public  function registration(Request $request){
        $job_id=$request->get('id');
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        return view('job.job.registration',['address'=> $address, 'setttings'=> $setttings,'job_id'=>$job_id]);
    }

    public function jobSearchCategory($id){
        $job = Job::where('job_status','Active')->where('job_category',$id)
                        ->orderBy('created_at','desc')->paginate('12');
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        return view('job.job.cat_job_details',['address'=> $address, 'setttings'=> $setttings,'jobs'=>$job,'id'=>$id]);
    }
}
