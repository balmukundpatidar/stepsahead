<?php

namespace App\Http\Controllers\Admin\News;

use App\Model\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class NewsController extends Controller
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
        $data = News::orderBy('created_at', 'desc')->get();
        return view('admin.news.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.add');
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
            $destinationPath = '/uploads/news/';
            $filename        = str_random(6) . '_' . $file->getClientOriginalName();
            $request->file('image')->move(public_path().$destinationPath, $filename);
        }
        
        $temp_slug = 1;
        $slug = str_replace(' ', '-',  $request->get('title'));
        $news = News::where('news_title',$request->get('title'))->orderBy('id', 'desc')->get();
        if(count($news) > 0) {
         $temp_slug = $news[0]->slug_number;
         $temp_slug = $temp_slug + 1;
         $slug = $slug.'-'.$temp_slug;
        }
        News::create([
            'news_title' => $request->get('title'),
            'news_desc' => $request->get('description'),
            'news_image' =>$filename,
            'news_status'=>'Active',
            'slug_number'=>$temp_slug,
            'slug'=>$slug,

        ]);

        Session::flash('message', "New news created successfully");

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
        $Slider = News::find($id);
        $Slider->delete();
        Session::flash('message', "One news deleted");
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
        $Slider = News::find($id);
        return view('admin.news.edit',['info'=> $Slider]);
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
        $slider = News::find($id);
        if ($request->hasFile('image')) {
            $file            = $request->file('image');
            $destinationPath = '/uploads/news/';
            $filename        = str_random(6) . '_' . $file->getClientOriginalName();
            $request->file('image')->move(public_path().$destinationPath, $filename);
            $slider->news_image = $filename;
        }

        //unlink(public_path().'/uploads/slider/'.$slider->image);
        $slider->news_title = $request->get('title');
        $slider->news_desc = $request->get('description');

        // $temp_slug = 1;
        // $slug = str_replace(' ', '-',  $request->get('title'));
        // $news = News::where('id', '!=' , $id)->where('news_title',$request->get('title'))->orderBy('id', 'desc')->get();
        // if(count($news) > 0) {
        // $temp_slug = $news[0]->slug_number;
        // $temp_slug = $temp_slug + 1;
        // $slug = $slug.'-'.$temp_slug;
        // }
        

        $slider->save();

        Session::flash('message', "news edited successfully");

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
        $Slider = News::find($id);
        $Slider->delete();
        Session::flash('message', "One news deleted");
        return redirect()->back();

    }
    public function newsActive($user_id,$status){
        //$count = Slider::where('slider_status', 'Active')->count();
        $slider = News::find($user_id);
        $slider->news_status = $status;
        // $slider->slider_position = $count + 1;
        $slider->save();
        Session::flash('message', "News Active");
        return redirect()->back();

    }
}
