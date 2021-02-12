<?php

namespace App\Http\Controllers\Admin\Tesimonial;

use App\Model\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class TestimonialController extends Controller
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

        $data = Testimonial::orderBy('testi_position')->get();
        return view('admin.testimonial.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.add');
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
//            'image' => 'bail|required',
        ]);
        if ($request->hasFile('image')) {
            $file            = $request->file('image');
            $destinationPath = '/uploads/testimonial/';
            $filename        = str_random(6) . '_' . $file->getClientOriginalName();
            $request->file('image')->move(public_path().$destinationPath, $filename);
        }else{
            $filename='no';
        }
        $position = Testimonial::count();
        if($request->get('visible'))
            $status = 'Active';
        else
            $status = 'InActive';

        Testimonial::create([
            'testi_title' => $request->get('title'),
            'testi_desc' => $request->get('description'),
            'testi_image' =>$filename,
            'testi_status'=>$status,
            'testi_position'=>$position + 1,

        ]);

        Session::flash('message', "New Testimonial created successfully");

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
        $Slider = Testimonial::find($id);
        $Slider->delete();
        Session::flash('message', "One Testimonial deleted");
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
        $Slider = Testimonial::find($id);
        if($Slider) {
            $data = Testimonial::orderBy('testi_position')->get();
            return view('admin.testimonial.edit', ['info' => $Slider, 'data' => $data]);
        }
        else{
            return redirect(route('admin::testimonial.index'));

        }
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
            'description' => 'bail|required'
        ]);
        $slider = Testimonial::find($id);

        if ($request->hasFile('image')) {
            $file            = $request->file('image');
            $destinationPath = '/uploads/testimonial/';
            $filename        = str_random(6) . '_' . $file->getClientOriginalName();
            $request->file('image')->move(public_path().$destinationPath, $filename);
            $slider->testi_image = $filename;
        }

        $slider->testi_title = $request->get('title');
        $slider->testi_desc = $request->get('description');

        if($request->get('visible'))
            $status = 'Active';
        else
            $status = 'InActive';
        $slider->testi_status = $status;
        $slider->save();

        Session::flash('message', "Testimonial edited successfully");

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
        $Slider = Testimonial::find($id);
        $Slider->delete();
        Session::flash('message', "One Testimonial deleted");
        return redirect()->back();

    }

//    public function updateOrderForTestimonial(Request $request)
//    {
//        $order_ids = $request->get('DATA');
//        $i = 1;
//        foreach ($order_ids as $order_id) {
//            $slider = Testimonial::find($order_id['id']);
//            $slider->testi_position = $i;
//            $slider->save();
//            $i++;
//        }
//
//
//    }

    public function orderForTestimonial(Request $request)
    {
        $data = Testimonial::where('testi_status', 'Active')->orderBy('testi_position')->get();
        return view('admin.testimonial.ordering', ['data' => $data]);

    }
    public function TestimonialActive($user_id,$status){
        $count = Testimonial::where('testi_status', 'Active')->count();
        $slider = Testimonial::find($user_id);
        $slider->testi_status = $status;
        $slider->testi_position = $count + 1;
        $slider->save();
        Session::flash('message', "Testimonial Active");
        return redirect()->back();

    }
    public function updateOrderForTestimonial(Request $request){
        $order_ids = $request->get('category_order');
        $space_separated = explode(",", $order_ids);
        //dd($space_separated);
        $i = 1;
        foreach ($space_separated as $order_id) {
            $slider = Testimonial::find($order_id);
            $slider->testi_position = $i;
            $slider->save();
            $i++;
        }
        return redirect()->back();

    }

}
