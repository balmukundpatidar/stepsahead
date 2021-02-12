<?php

namespace App\Http\Controllers\Admin\Team;

use App\Model\Members;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Exception;

class MemberController extends Controller
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
        $data = Members::orderBy('member_positions')->get();
        return view('admin.members.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.members.add');
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
            'name' => 'bail|required',
            'position' => 'bail|required',
            'description' => 'bail|required',
            'image' => 'bail|required',
        ]);
        if ($request->hasFile('image')) {
            $file            = $request->file('image');
            $destinationPath = '/uploads/members/';
            $filename        = str_random(6) . '_' . $file->getClientOriginalName();
            $request->file('image')->move(public_path().$destinationPath, $filename);
        }
        $position = Members::count();
        if($request->get('visible'))
            $status = 'Active';
        else
            $status = 'InActive';
        $temp_slug = 1;
        $slug = str_replace(' ', '-',  $request->get('name'));
        $members = Members::where('member_name',$request->get('name'))->orderBy('id', 'desc')->get();
        if(count($members) > 0) {
            $temp_slug = $members[0]->slug_number;
            $temp_slug = $temp_slug + 1;
            $slug = $slug.'-'.$temp_slug;
        }

   
        Members::create([
            'member_name' => $request->get('name'),
            'member_position' => $request->get('position'),
            'member_desc' => $request->get('description'),
            'facebook_url' => $request->get('facebook_url') ? $request->get('facebook_url') : '',
            'linkedin_url' => $request->get('linkedin_url') ? $request->get('linkedin_url') : '',
            'twitter_url' => $request->get('twitter_url') ? $request->get('twitter_url') : '',
            'member_image' =>$filename,
            'slug'=>$slug,
            'member_status'=>$status,
            'slug_number'=>$temp_slug,
            'member_positions'=>$position + 1

        ]);

        Session::flash('message', "New team member created successfully");

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
            $Slider = Members::find($id);
            $Slider->delete();
            Session::flash('message', "One team member deleted");
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
            $Slider = Members::find($id);
            if($Slider) {

                $data = Members::orderBy('member_positions')->get();
                return view('admin.members.edit', ['info' => $Slider, 'data' => $data]);
            }
            else{
                return redirect(route('admin::members.index'));
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
            'name' => 'bail|required',
            'position' => 'bail|required',
            'description' => 'bail|required',

        ]);
        $slider = Members::find($id);
        if ($request->hasFile('image')) {
            $file            = $request->file('image');
            $destinationPath = '/uploads/members/';
            $filename        = str_random(6) . '_' . $file->getClientOriginalName();
            $request->file('image')->move(public_path().$destinationPath, $filename);
            $slider->member_image = $filename;
        }

        //unlink(public_path().'/uploads/slider/'.$slider->image);
        $slider->member_name = $request->get('name');
        $slider->member_position = $request->get('position');
        $slider->member_desc = $request->get('description');
        $slider->facebook_url = $request->get('facebook_url') ? $request->get('facebook_url') : '';
        $slider->linkedin_url = $request->get('linkedin_url') ? $request->get('linkedin_url') : '';
        $slider->twitter_url = $request->get('twitter_url') ? $request->get('twitter_url') : '';


        if($request->get('visible'))
            $status = 'Active';
        else
            $status = 'InActive';
        $slider->member_status = $status;

        $slider->save();

        Session::flash('message', "Team member edited successfully");

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
        $Slider = Members::find($id);
        $Slider->delete();
        Session::flash('message', "One member deleted");
        return redirect()->back();

    }
    public function memberActive($user_id,$status){
        //$count = Slider::where('slider_status', 'Active')->count();
        $slider = Members::find($user_id);
        $slider->member_status = $status;
        // $slider->slider_position = $count + 1;
        $slider->save();
        Session::flash('message', "Member Active");
        return redirect()->back();

    }
    public function updateOrderForMember(Request $request){
        $order_ids = $request->get('category_order');
        $space_separated = explode(",", $order_ids);
        //dd($space_separated);
        $i = 1;
        foreach ($space_separated as $order_id) {
            $slider = Members::find($order_id);
            $slider->member_positions = $i;
            $slider->save();
            $i++;
        }
        return redirect()->back();

    }

}
