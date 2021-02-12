<?php

namespace App\Http\Controllers\Employee;

use App\Model\Acheivement;
use App\Model\UserTraining;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AcheivementController extends Controller
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
        $data = UserTraining::where('user_id',$user_id)->get();
        //return view('admin.slider.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('job.employee.acheivements.add');
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
             'training_name'=>'required',
              'training_date'=>'required'
        ]);
        $user_id = Auth::user()->id;
        UserTraining::create([
            'user_id' => $user_id,
            'tra_name' => $request->get('training_name'),
            'tra_taken' => $request->get('training_date'),
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
        $exp = UserTraining::find($id);
        return view('job.employee.acheivements.edit',['info'=> $exp]);
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
            'training_name'=>'required',
            'training_date'=>'required'
        ]);
        $Ach= UserTraining::find($id);
        $Ach->tra_name = $request->get('training_name');
        $Ach->tra_taken = $request->get('training_date');

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
