<?php

namespace App\Http\Controllers\Admin\Menus;

use App\Model\Menus;
use App\Model\Pages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class MenuController extends Controller
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
    public function index($sub_categories=0)
    {
        $data = Menus::get();
        $parent_menu=Menus::where('parent_id',0)->where('id','<>','1')->orderBy('menu_position')->get();

        $menu=Menus::where('parent_id',$sub_categories)->where('id','<>','1')->orderBy('menu_position')->get();
        $pages = Pages::where('id','<>','1')->get();
        return view('admin.menu.index',['parent_menus'=>$parent_menu,'pages'=>$pages,'menu'=>$menu,'parent_id'=>$sub_categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent_menu=Menus::where('parent_id',0)->get();
        return view('admin.menu.add',['parent_menus'=>$parent_menu]);
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
            'page' => 'bail|required',
        ]);
        
        $url = '';
        
        $pages = Pages::where('id','=',$request->get('page'))->first();
        if(!empty($pages)) {
           $url =  $pages->page_url;
        }
        $position = Menus::count();
        //echo $request->get('is_collection'); exit;
        Menus::create([
            'menu_name' => $request->get('title'),
            'page_id' => $request->get('page'),
            'parent_id' => $request->get('parent_id'),
            'collection_page' => $request->get('is_collection'),
            'menu_status'=>$request->get('visible') ? $request->get('visible') : "InActive",
            'page_url'=> $url,
            'menu_position'=>$position + 1

        ]);

        Session::flash('message', "New Menu created successfully");

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
        $Slider = Menus::find($id);
        $Slider->delete();
        Session::flash('message', "One Menu deleted");
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$sub_categories)
    {
        $data = Menus::get();
        $parent_menu=Menus::where('parent_id',0)->where('id','<>','1')->orderBy('menu_position')->get();
        $menu=Menus::where('parent_id',$sub_categories)->where('id','<>','1')->orderBy('menu_position')->get();
        $pages = Pages::where('id','<>','1')->get();
        $Slider = Menus::find($id);
        return view('admin.menu.edit',['info'=> $Slider,'data'=>$data,'parent_menus'=>$parent_menu,'pages'=>$pages,'menu'=>$menu]);

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
            'page' => 'bail|required',
        ]);
/* 		echo "<pre>";
		print_r($request->get('collection_page'));
		print_r($request->get('title'));
		print_r($request->get('visible'));
		echo "</pre>";
		die(); */
        $slider = Menus::find($id);
        $slider->menu_name = $request->get('title');
        $slider->page_id = $request->get('page');
        $slider->parent_id = $request->get('parent_id');
        $slider->collection_page = $request->get('collection_page');
        $slider->menu_status = $request->get('visible') ? $request->get('visible') : "InActive";

        $slider->save();

        Session::flash('message', "Menu edited successfully");

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
    public function updateOrderForMenu(Request $request){
        $order_ids = $request->get('category_order');
        $space_separated = explode(",", $order_ids);
        //dd($space_separated);
        $i = 1;
        foreach ($space_separated as $order_id) {
            $slider = Menus::find($order_id);
            $slider->menu_position = $i;
            $slider->save();
            $i++;
        }
        return redirect()->back();

    }
    public function menuPage($page_id){
        $count = Pages::find($page_id);
        if($count)
    return redirect(route('admin::pages.edit',$page_id));
        else
          echo "No Page Found";
    }
    Public function subCategories($parent_id){
            $parent_menu=Menus::where('parent_id',0)->where('id','<>','1')->orderBy('menu_position')->get();
            $menu=Menus::where('parent_id',$parent_id)->where('id','<>','1')->orderBy('menu_position')->get();
            $pages = Pages::where('id','<>','1')->get();
            return view('admin.menu.index',['parent_menus'=>$parent_menu,'pages'=>$pages,'menu'=>$menu,'parent_id'=>$parent_id]);

    }
}
