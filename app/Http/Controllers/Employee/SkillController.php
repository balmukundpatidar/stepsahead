<?php

namespace App\Http\Controllers\Employee;

use App\Model\Skills;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SkillController extends Controller
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
        $data = EmployeeExperience::where('user_id',$user_id)->get();
        return view('admin.slider.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('job.employee.skill.add');
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
            'skill_name' => 'required'
        ]);
        Skills::create([
            'user_id'=>Auth::user()->id,
            'skills_name' => $request->get('skill_name'),

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
        $exp = Skills::find($id);
        return view('job.employee.skill.edit',['info'=> $exp]);
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
            'skill_name' => 'required'
        ]);
        $Exp = Skills::find($id);
        $Exp->skills_name = $request->get('skill_name');

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
