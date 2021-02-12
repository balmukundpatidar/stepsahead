<?php

namespace App\Http\Controllers\Admin\Service;

use App\Model\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
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
        $data = Service::all();
        return view('admin.services.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.add');
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
            'image' => 'bail|required',
        ]);
        if ($request->hasFile('image')) {
            $file            = $request->file('image');
            $destinationPath = '/uploads/services/';
            $filename        = str_random(6) . '_' . $file->getClientOriginalName();
            $request->file('image')->move(public_path().$destinationPath, $filename);
        }
        //$position = Slider::count();
        Service::create([
            'service_title' => $request->get('title'),
            'service_desc' => $request->get('description'),
            'service_image' =>$filename,
            'service_status'=>'Active',

        ]);

        Session::flash('message', "New service created successfully");

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
        $Slider = Service::find($id);
        $Slider->delete();
        Session::flash('message', "One service deleted");
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Slider = Service::find($id);
        return view('admin.services.edit',['info'=> $Slider]);
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
        ]);
        $slider = Service::find($id);
        if ($request->hasFile('image')) {
            $file            = $request->file('image');
            $destinationPath = '/uploads/services/';
            $filename        = str_random(6) . '_' . $file->getClientOriginalName();
            $request->file('image')->move(public_path().$destinationPath, $filename);
            $slider->service_image = $filename;
        }

        //unlink(public_path().'/uploads/slider/'.$slider->image);
        $slider->service_title = $request->get('title');
        $slider->service_desc = $request->get('description');


        $slider->save();

        Session::flash('message', "services edited successfully");

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
        $Slider = Service::find($id);
        $Slider->delete();
        Session::flash('message', "One service deleted");
        return redirect()->back();

    }
    public function serviceActive($user_id,$status){
        //$count = Slider::where('slider_status', 'Active')->count();
        $slider = Service::find($user_id);
        $slider->service_status = $status;
       // $slider->slider_position = $count + 1;
        $slider->save();
        Session::flash('message', "Service Active");
        return redirect()->back();

    }
}
