<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Model\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
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
        $user_id = Auth::user()->id;
        $data = Blog::all();
        return view('admin.blog.index',['data'=>$data]);
    }

    public function blogActive($user_id,$status){
        $slider = Blog::find($user_id);
        $slider->blog_status = $status;
        $slider->save();
        Session::flash('message', "Blog Active");
        return redirect()->back();

    }
}
