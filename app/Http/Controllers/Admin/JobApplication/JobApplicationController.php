<?php



namespace App\Http\Controllers\Admin\JobApplication;



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

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use PDF;
use Response;
use File;

class JobApplicationController extends Controller

{

    public function __construct()

    {

        $this->middleware('auth');

        $this->middleware('admin');



    }

    public function index()

    {

        $user_id = Auth::user()->id;

        $data = Job::orderBy('created_at','desc')->get();

        return view('admin.job_application.index',['data'=>$data]);

    }

    public function appliedUserList($job_id)

    {

        $user_id = Auth::user()->id;
        // CHM-WAL(,'job_employee.id as job_employee_id')
        $data = DB::table('job')

            ->select('users.user_name','users.email','job_employee.user_id','job.id','job_employee.created_at','job_employee.id as job_employee_id')

            ->join('job_employee', 'job.id', '=', 'job_employee.job_id')

            ->join('users', 'job_employee.user_id', '=', 'users.id')

            ->where('job.id',$job_id)

            ->get();

        // dd($data);

        return view('admin.job_application.user_list',['data'=>$data]);



    }

    // CHM-WAL APPLIED USER DELETE
    public function appliedUserDelete(Request $request)
    {
        $jobId = $request->job_id;
        $jobEmployeeId = $request->job_employee_id;

        $data = DB::table('job_employee')->where('id',$jobEmployeeId)->where('job_id',$jobId)->delete();

        Session::flash('message','User deleted successfully');
        return redirect('admin/job_applied_user_list/'.$jobId);
    }


    public function appliedUserDetails($user_id)

    {

        $employee = UserProfile::where('user_id',$user_id)->count();

        if($employee > 0){

            $data = UserProfile::where('user_id',$user_id)->first();

            $training = UserTraining::where('user_id',$user_id)->get();
            // CHM-WAL(id)
            $user = User::select('id','user_name','email')->where('id',$user_id)->first();

            $exp=UserEmployment::where('user_id',$user_id)->get();

            $edu=UserEducation::where('user_id',$user_id)->get();



            return view('admin.job_application.user_detail',['data'=>$data,

                                        'user'=>$user,'trainings'=>$training,'exps'=>$exp,

                'edus'=>$edu]);



        }else{

            $data = "No Data Found";

            return view('admin.job_application.user_detail',['data'=>$data]);

        }

        //return view('employer.job_application.user_list',['data'=>$data]);



    }
    // CHM-WAL DOWNLOAD APPLIED USER CV
    public function downloadAppliedUserCV(Request $request)

    {
        $filename = $request->filename;

        $path= public_path(). "/uploads/biadata/".$filename;

        $file     = File::get($path);
        // get the type or extension
        $type     = File::mimeType($path);

        $headers = array(
              'Content-Type: $type',
            );
        
        return Response::download($path, $filename, $headers);

        
    }
    // CHM-WAL DOWNLOAD APPLIED USER PDF
    public function appliedUserDetailPdf(Request $request)

    {
        $user_id = $request->user_id;

        $employee = UserProfile::where('user_id',$user_id)->count();

        if($employee > 0){

            $data = UserProfile::where('user_id',$user_id)->first();

            $training = UserTraining::where('user_id',$user_id)->get();
            // CHM-WAL
            $user = User::select('id','user_name','email')->where('id',$user_id)->first();

            $exp=UserEmployment::where('user_id',$user_id)->get();

            $edu=UserEducation::where('user_id',$user_id)->get();

            $pdf = PDF::loadView('admin.job_application.user_detail_pdf',['data'=>$data,'user'=>$user,'trainings'=>$training,'exps'=>$exp,'edus'=>$edu]);

            return $pdf->download(uniqid().'user_details.pdf');
            
        }else{

            $data = "No Data Found";


        }
    }

    public function coverLetter($user_id,$job_id){

        $cl=JobEmployee::where('user_id',$user_id)->where('job_id',$job_id)->value('cover_letter');

        return view('employer.job_application.cover_letter',['info'=>$cl]);



    }
    public function show($id)
    {
		var_dump('I am here');exit;
        $Slider = JobEmployee::find($id);
        $Slider->delete();
        Session::flash('message', "One applicant deleted");
        return redirect()->back();
    }

    public function destroy($id)
    {
		var_dump('here');exit;
        $Slider = Service::find($id);
        $Slider->delete();
        Session::flash('message', "One service deleted");
        return redirect()->back();

    }

}

