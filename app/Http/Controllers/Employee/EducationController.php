<?php

namespace App\Http\Controllers\Employee;

use App\Model\UserEducation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class EducationController extends Controller
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
        $data = UserEducation::where('user_id',$user_id)->get();
        //return view('admin.slider.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('job.employee.education.add');
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
            'edu_name' => 'required',
            'edu_city' => 'required',
            'edu_institute' => 'required',
            'edu_date_from' => 'required',
            'edu_date_to' => 'required',
            'edu_grade' => 'required',
        ]);
        UserEducation::create([
            'user_id' => Auth::user()->id,
            'edu_qualification' => $request->get('edu_name'),
            'edu_city' => $request->get('edu_city'),
            'edu_institute' => $request->get('edu_institute'),
            'edu_date_from' => $request->get('edu_date_from'),
            'edu_date_to' => $request->get('edu_date_to'),
            'edu_subject' => $request->get('edu_subject'),
            'grade' => $request->get('edu_grade'),
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
        $exp = UserEducation::find($id);
        return view('job.employee.education.edit',['info'=> $exp]);
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
            'edu_name' => 'required',
            'edu_city' => 'required',
            'edu_institute' => 'required',
            'edu_date_from' => 'required',
            'edu_date_to' => 'required',
            'edu_grade' => 'required',
        ]);
        $Ach= UserEducation::find($id);
        $Ach->edu_qualification = $request->get('edu_name');
        $Ach->edu_city = $request->get('edu_city');
        $Ach->edu_institute = $request->get('edu_institute');
        $Ach->edu_date_from = $request->get('edu_date_from');
        $Ach->edu_date_to = $request->get('edu_date_to');
        $Ach->edu_subject = $request->get('edu_subject');
        $Ach->grade = $request->get('edu_grade');

        $Ach->save();

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
