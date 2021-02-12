<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Model\Pages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use DB;
class PagesController extends Controller
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
        $data = Pages::where('id','<>','1')->where('status','=','1')->paginate(10);
        return view('admin.pages.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.add');
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
            'content' => 'bail|required',
            'url'=>'required',
//            'page_description'=>'required',
//            'page_keywords'=>'required',
            // 'image' => 'bail|required',
        ]);
        
        
        $page = DB::table('pages')->where('page_url','=',$request->get('url'))->first();
        if(empty($page)) {
            $filename = '';
            if ($request->hasFile('image')) {
                $file            = $request->file('image');
                $destinationPath = '/uploads/pages/';
                $filename        = str_random(6) . '_' . $file->getClientOriginalName();
                $request->file('image')->move(public_path().$destinationPath, $filename);
            }
            //$position = Slider::count();
            $user_id=Auth::user()->id;
            Pages::create([
                'page_title' => $request->get('title'),
                'page_desc' => $request->get('content'),
                'page_img' =>$filename,
                'page_url'=>$request->get('url'),
                'author'=>$user_id,
                'seo_keyword'=>$request->get('page_keywords'),
                'seo_description'=>$request->get('page_description')
    //            'news_status'=>'Active',
    
            ]);
    
            Session::flash('message', "New Page created successfully");
    
            return redirect()->back();  
        } else {
             Session::flash('error', "This page url already exits!");
    
            return redirect()->back();  
        }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Slider = Pages::find($id);
        $Slider->delete();
        Session::flash('message', "One Page deleted");
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
        $Slider = Pages::find($id);
        return view('admin.pages.edit',['info'=> $Slider]);
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
            'content' => 'bail|required',
            'url'=>'required',
//            'page_description'=>'required',
//            'page_keywords'=>'required',
        ]);
        $page = DB::table('pages')->where('id','!=',$id)->where('page_url','=',$request->get('url'))->first();
        if(empty($page)) {
            
            $slider = Pages::find($id);
            if ($request->hasFile('image')) {
                $file            = $request->file('image');
                $destinationPath = '/uploads/pages/';
                $filename        = str_random(6) . '_' . $file->getClientOriginalName();
                $request->file('image')->move(public_path().$destinationPath, $filename);
                $slider->page_img = $filename;
            }
    
            //unlink(public_path().'/uploads/slider/'.$slider->image);
            $user_id=Auth::user()->id;
            $slider->page_title = $request->get('title');
            $slider->page_desc = $request->get('content');
            $slider->page_url = $request->get('url');
            $slider->seo_keyword = $request->get('page_keywords');
            $slider->seo_description = $request->get('page_description');
            $slider->save();
    
            Session::flash('message', "Page edited successfully");
    
            return redirect()->back();
        } else {
             Session::flash('error', "This page url already exits!");
    
            return redirect()->back();  
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Slider = News::find($id);
        $Slider->delete();
        Session::flash('message', "One Page deleted");
        return redirect()->back();

    }
}
