<?php

namespace App\Http\Controllers\Admin\Job;

use App\Model\Category;
use App\Model\Country;
use App\Model\Job;
use App\Model\JobEmployee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class JobController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');

    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     * @internal param CountryDataTable $dataTable
     */
    public function index()
    {
        $data = Job::orderBy('created_at','desc')->get();
        return view('admin.job.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = Category::where('cat_status','Active')->get();
        $country = Country::where('country_status','Active')->get();
        return view('admin.job.add',['cats'=>$cat,'countries'=>$country]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'bail|required',
            'description' => 'bail|required',
            //'address'=>'required',
            //'city'=>'required',
           // 'state'=>'required',
           // 'zip_code'=>'required',
            'country'=>'required',
            'salary' => 'bail|required',
            'job_valid' => 'bail|required',
            'job_category'=>'required'
        ]);
        
        $temp_slug = 1;
        $slug = str_replace(' ', '-',  $request->get('title'));
        $job = Job::where('job_title',$request->get('title'))->orderBy('id', 'desc')->get();
        if(count($job) > 0) {
        $temp_slug = $job[0]->slug_number;
        $temp_slug = $temp_slug + 1;
        $slug = $slug.'-'.$temp_slug;
        }

        Job::create([
            'job_title' => $request->get('title'),
            'job_description' => $request->get('description'),
            'job_location' => $request->get('country'),
            'job_zip_code' => '',
            'job_state' => '',
            'job_city' => '',
            'job_address' => '',
            'job_type' =>$request->get('job_type'),
            'job_salary' =>$request->get('salary'),
            'job_valid_upto' =>$request->get('job_valid'),
            'job_category'=>$request->get('job_category'),
            'job_status'=>'Active',
            'slug'=>$slug,
            'slug_number'=>$temp_slug

        ]);

        Session::flash('message', "New Job Added successfully");

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $count = JobEmployee::where('job_id',$id)->count();
        // CHM-WAL
        // if($count){
        //     echo "cannot detete this job,because this job is already applied by user.";
        // }else{
            $Slider = Job::find($id);
            $Slider->delete();
            Session::flash('message', "One Job deleted");
            return redirect()->back();
        // }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Slider = Job::find($id);
        $cat = Category::where('cat_status','Active')->get();
        $country = Country::where('country_status','Active')->get();
        return view('admin.job.edit',['info'=> $Slider,'cats'=>$cat,'countries'=>$country]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'bail|required',
            'description' => 'bail|required',
            // 'address'=>'required',
            // 'city'=>'required',
            // 'state'=>'required',
            // 'zip_code'=>'required',
            'country'=>'required',
            'salary' => 'bail|required',
            'job_valid' => 'bail|required',
            'job_category'=>'required'
        ]);
        $job = Job::find($id);
        $job->job_title = $request->get('title');
        $job->job_description = $request->get('description');
        $job->job_salary = $request->get('salary');
        $job->job_valid_upto = $request->get('job_valid');
        $job->job_location = $request->get('country');
        $job->job_zip_code = '';
        $job->job_state = '';
        $job->job_city = '';
        $job->job_type = $request->get('job_type');
        $job->job_address = '';
        $job->job_category = $request->get('job_category');

        $job->save();

        Session::flash('message', "Job edited successfully");

        return redirect()->back();
    }

    public function jobActive($user_id,$status){
        // $count = Job::where('job_status', 'Active')->count();
        $job = Job::find($user_id);
        $job->job_status = $status;
        // $slider->slider_position = $count + 1;
        $job->save();
        Session::flash('message', "Job Active");
        return redirect()->back();

    }
}
