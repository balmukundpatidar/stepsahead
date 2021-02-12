<?php

namespace App\Http\Controllers\Admin\Category;

use App\Model\Category;
use App\Model\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
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
        $data = Category::all();
        return view('admin.category.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.add');
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


        $data=Category::create([
            'cat_title' => $request->get('title'),
            'cat_status' => 'Active',

        ]);
        Session::flash('message', "New category created successfully");
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
        $count = Job::where('job_category',$id)->count();
        if($count){
            echo "cannot detete this Category,because this Category is already used.";
        }else{
            $Slider = Category::find($id);
            $Slider->delete();
            Session::flash('message', "One Category deleted");
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
        $category = Category::find($id);
        return view('admin.category.edit',['info'=> $category]);
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
        $category = Category::find($id);

        $category->cat_title = $request->get('title');
        $category->save();
        Session::flash('message', "category edited successfully");
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
        $category = Category::find($id);
        $category->delete();
        Session::flash('message', "One category deleted");
        return redirect()->back();

    }
    public function categoryActive($id,$status){
       // $count = Category::where('cat_status', 'Active')->count();
        $slider = Category::find($id);
        $slider->cat_status = $status;
       // $slider->slider_position = $count + 1;
        $slider->save();
        Session::flash('message', "Category Active");
        return redirect()->back();

    }
}
