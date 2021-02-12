<?php

namespace App\Http\Controllers\Employee\Blog;

use App\Model\Blog;
use App\Model\EmployeeDetails;
use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
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
        $user=User::select('user_name','email')->where('id',$user_id)->first();
        $profile_info = EmployeeDetails::where('user_id',$user_id)->first();
        $blog = Blog::where('user_id',$user_id)->orderBy('created_at','desc')->get();
        return view('job.employee.blog.blog',['blogs'=>$blog,
            'user_id'=>$user_id,
            'profile_info'=>$profile_info,
            'user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('job.employee.blog.add');
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
            'description'=>'required',
            'image' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $file            = $request->file('image');
            $destinationPath = '/uploads/blog/';
            $filename        = str_random(6) . '_' . $file->getClientOriginalName();
            $request->file('image')->move(public_path().$destinationPath, $filename);
        }else{
            $filename='';
        }
        Blog::create([
            'user_id'=>Auth::user()->id,
            'blog_title' => $request->get('title'),
            'blog_description' => $request->get('description'),
            'blog_image'=>$filename,
            'blog_status'=>'InActive'
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
        $exp = Blog::find($id);
        return view('job.employee.blog.edit',['info'=> $exp]);
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
            'title' => 'required',
            'description' => 'required',
        ]);
        $Exp = Blog::find($id);
        $Exp->blog_title = $request->get('title');
        $Exp->blog_description = $request->get('description');
        if ($request->hasFile('image')) {
            $file            = $request->file('image');
            $destinationPath = '/uploads/blog/';
            $filename        = str_random(6) . '_' . $file->getClientOriginalName();
            $request->file('image')->move(public_path().$destinationPath, $filename);
            $Exp->blog_image = $filename;
        }

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
