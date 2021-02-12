<?php

namespace App\Http\Controllers\Employee;

use App\Model\EmployeeExperience;
use App\Model\UserEmployment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ExperienceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('employee');

    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     * @internal param CountryDataTable $dataTable
     */
    public function index()
    {
       $user_id = Auth::user()->id;
        $data = UserEmployment::where('user_id',$user_id)->get();
        //return view('admin.slider.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('job.employee.experience.add');
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
            'emp_name'=>'required',
            'emp_position' => 'required',
            'emp_salary'=>'required',
            'emp_address'=>'required',
            'emp_postcode' => 'required',
            'emp_date_from'=>'required',
            'emp_date_to'=>'required',
//            'emp_duties' => 'required',
//            'emp_leaving_reason'=>'required',
        ]);
        $user_id=Auth::user()->id;
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

        Session::flash('message', "Added successfully");

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $exp = UserEmployment::find($id);
        return view('job.employee.experience.edit',['info'=> $exp]);
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
            'emp_name'=>'required',
            'emp_position' => 'required',
            'emp_salary'=>'required',
            'emp_address'=>'required',
            'emp_postcode' => 'required',
            'emp_date_from'=>'required',
            'emp_date_to'=>'required',
//            'emp_duties' => 'required',
//            'emp_leaving_reason'=>'required',
        ]);
        $Exp = UserEmployment::find($id);
        $Exp->emp_name = $request->get('emp_name');
        $Exp->emp_position = $request->get('emp_position');
        $Exp->emp_salary = $request->get('emp_salary');
        $Exp->emp_address = $request->get('emp_address');
        $Exp->emp_postcode = $request->get('emp_postcode');
        $Exp->emp_date_from = $request->get('emp_date_from');
        $Exp->emp_date_to = $request->get('emp_date_to');
        $Exp->summaries = $request->get('emp_duties');
        $Exp->leaving_reason = $request->get('emp_leaving_reason');
        $Exp->save();

        Session::flash('message', "Edited successfully");

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Exp = EmployeeExperience::find($id);
        $Exp->delete();
        Session::flash('message', "One Experience deleted");
        return redirect()->back();

    }
}
