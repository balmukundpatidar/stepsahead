<?php

namespace App\Http\Controllers\Admin\Slider;

use App\Model\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class SliderController extends Controller
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
        $data = Slider::all();
        return view('admin.slider.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.add');
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
            $destinationPath = '/uploads/slider/';
            $filename        = str_random(6) . '_' . $file->getClientOriginalName();
            $request->file('image')->move(public_path().$destinationPath, $filename);
        }
        $position = Slider::count();
        Slider::create([
            'slider_title' => $request->get('title'),
            'slider_desc' => $request->get('description'),
            'slider_image' =>$filename,
            'slider_status'=>'Active',
            'slider_position'=>$position + 1,

        ]);

        Session::flash('message', "New slider created successfully");

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
        $Slider = Slider::find($id);
        $Slider->delete();
        Session::flash('message', "One slider deleted");
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
        $Slider = Slider::find($id);
        return view('admin.slider.edit',['info'=> $Slider]);
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
        $slider = Slider::find($id);
        if ($request->hasFile('image')) {
            $file            = $request->file('image');
            $destinationPath = '/uploads/slider/';
            $filename        = str_random(6) . '_' . $file->getClientOriginalName();
            $request->file('image')->move(public_path().$destinationPath, $filename);
            $slider->slider_image = $filename;
        }

        //unlink(public_path().'/uploads/slider/'.$slider->image);
        $slider->slider_title = $request->get('title');
        $slider->slider_desc = $request->get('description');


        $slider->save();

        Session::flash('message', "slider edited successfully");

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
        $Slider = Slider::find($id);
        $Slider->delete();
        Session::flash('message', "One slider deleted");
        return redirect()->back();

    }

    public function bulkDelete(Request $request)
    {
        $ids = $request->get('key');
        Slider::destroy($ids);
        echo 'Delete';
    }

    public function DataTables(Request $request){
        $table = 'slider';
        $primaryKey = 'id';
        $columns = [
            ['db' => 'id', 'dt' => 0 ],
            ['db' => 'title', 'dt' => 1],
            ['db' =>'description','dt' => 2],
            ['db' => 'image', 'dt' => 3,'formatter' => function( $d, $row) {
                $image = '<img src="'.url('/').'/uploads/slider/'.$d.'" style="height:24px;width:24px;"/>';
                return $image;
            }],
            ['db' => 'id',   'dt' => 4, 'formatter' => function( $d, $row ) {
                $edit = "<a class='btn btn-xs fancybox fancybox.iframe' href='".route('cpanel.slider.edit', ['country' => $d])."' title='Edit'>
               <i class='fa fa-edit icon-only'></i> Edit</a>";
                return $edit;
            }],
        ];

        echo json_encode(
            Datatable::simple( $request->all(), $table, $primaryKey, $columns)
        );
    }

    public function updateOrderForSlider(Request $request)
    {
        $order_ids = $request->get('DATA');
        $i = 1;
        foreach ($order_ids as $order_id) {
            $slider = Slider::find($order_id['id']);
            $slider->slider_position = $i;
            $slider->save();
            $i++;
        }


    }

    public function orderForSlider(Request $request)
    {
        $data = Slider::where('slider_status', 'Active')->orderBy('slider_position')->get();
        return view('admin.slider.ordering', ['data' => $data]);

    }
    public function sliderActive($user_id,$status){
        $count = Slider::where('slider_status', 'Active')->count();
        $slider = Slider::find($user_id);
        $slider->slider_status = $status;
        $slider->slider_position = $count + 1;
        $slider->save();
        Session::flash('message', "Slider Active");
        return redirect()->back();

    }
}
