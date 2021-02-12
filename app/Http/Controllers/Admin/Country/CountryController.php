<?php

namespace App\Http\Controllers\Admin\Country;

use App\Model\Country;
use App\Model\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CountryController extends Controller
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
        $data = Country::all();
        return view('admin.country.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.country.add');
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
            'title' => 'required',
        ]);


        $data=Country::create([
            'country_title' => $request->get('title'),
            'country_status' => 'Active',

        ]);
        Session::flash('message', "New country created successfully");
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
        $count = Job::where('job_location',$id)->count();
        if($count){
            echo "cannot detete this location,because this location is already userd is another place.";
        }else{
            $Slider = Country::find($id);
            $Slider->delete();
            Session::flash('message', "One Country deleted");
            return redirect()->back();
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Country::find($id);
        return view('admin.country.edit',['info'=> $category]);
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
            'title' => 'required'
        ]);
        $category = Country::find($id);

        $category->country_title = $request->get('title');
        $category->save();
        Session::flash('message', "country edited successfully");
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
        $category = Country::find($id);
        $category->delete();
        Session::flash('message', "One country deleted");
        return redirect()->back();

    }
    public function countryActive($id,$status){
        // $count = Category::where('cat_status', 'Active')->count();
        $slider = Country::find($id);
        $slider->country_status = $status;
        // $slider->slider_position = $count + 1;
        $slider->save();
        Session::flash('message', "country Active");
        return redirect()->back();

    }
}
