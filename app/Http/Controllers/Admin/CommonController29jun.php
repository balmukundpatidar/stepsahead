<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use DB;
class CommonController extends Controller
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
        //$data = Slider::all();
        //return view('admin.slider.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homebanner()
    {
		$datas = DB::table('banner')->where('id', 1)->first();
        return view('admin.banner.index',compact('datas'));
    }
    public function editbanner()
    {
		$info = DB::table('banner')->where('id', 1)->first();
        return view('admin.banner.edit',compact('info'));
    }
	public function updatebanner(Request $request)
    {
        $this->validate($request,[
            'banner_text1' => 'bail|required',
            'banner_text2' => 'bail|required',
            'down_text' => 'required'
        ]);
		$update_array=array();
		$update_array['banner_text1']=$request->get('banner_text1');
		$update_array['banner_text2']=$request->get('banner_text2');
		$update_array['down_text']=$request->get('down_text');
        if ($request->hasFile('image')) {
            $file            = $request->file('image');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('image')->move(public_path().$destinationPath, $filename);
            $update_array['banner_image'] = $filename;
        }
        $affected = DB::table('banner')->where('id', 1)->update($update_array);
        Session::flash('message', "Banner edited successfully");
        return redirect()->back();
    }
	//********************************//
	//**********CARE-SUPPORT********//
	//********************************//
    public function caresupport()
    {
		$data = DB::table('care_support')->get();
        return view('admin.banner.view',compact('data'));
    }
    public function addcaresupport()
    {
        return view('admin.banner.add_caresupport');
    }
    public function editcaresupport($cs_id)
    {
		
		$info = DB::table('care_support')->where('id', $cs_id)->first();
        return view('admin.banner.edit_caresupport',compact('info'));
    }
	public function insertcaresupport(Request $request)
    {
        $this->validate($request,[
            'care_heading' => 'bail|required',
            'care_text' => 'bail|required',
            'care_url' => 'bail|required',
        ]);
		$update_array=array();
		$update_array['care_heading']=$request->get('care_heading');
		$update_array['care_text']=$request->get('care_text');
		$update_array['care_url']=$request->get('care_url');
		
        if ($request->hasFile('image')) {
            $file            = $request->file('image');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('image')->move(public_path().$destinationPath, $filename);
            $update_array['care_image'] = $filename;
        }else{
		$update_array['care_image']="";
		}
        $affected = DB::table('care_support')->insert($update_array);
        Session::flash('message', "Care Support edited successfully");
       return redirect()->back();
    }
	public function updatecaresupport(Request $request)
    {
        $this->validate($request,[
            'care_heading' => 'bail|required',
            'care_text' => 'bail|required',
            'care_url' => 'bail|required',
            'care_id' => 'required'
        ]);
		$update_array=array();
		$update_array['care_heading']=$request->get('care_heading');
		$update_array['care_text']=$request->get('care_text');
		$update_array['care_url']=$request->get('care_url');
		$care_id=$request->get('care_id');
        if ($request->hasFile('image')) {
            $file            = $request->file('image');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('image')->move(public_path().$destinationPath, $filename);
            $update_array['care_image'] = $filename;
        }
        $affected = DB::table('care_support')->where('id', $care_id)->update($update_array);
        Session::flash('message', "Care Support added successfully");
        return redirect()->back();
    }
		/**************************************/
	/**************-ABOUT-****************/
	/**************************************/
    public function aboutus()
    {
		$info  = DB::table('aboutus')->where('id', 1)->first();
        return view('admin.pages.about',compact('info'));
    }

	public function updateabout(Request $request)
    {
        $this->validate($request,[
            'title' => 'bail|required',
            'description' => 'bail|required',
            'care_url' => 'bail|required',
            'care_id' => 'required'
        ]);
		$update_array=array();
		$update_array['care_heading']=$request->get('care_heading');
		$update_array['care_text']=$request->get('care_text');
		$update_array['care_url']=$request->get('care_url');
		$care_id=$request->get('care_id');
        if ($request->hasFile('image')) {
            $file            = $request->file('image');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('image')->move(public_path().$destinationPath, $filename);
            $update_array['care_image'] = $filename;
        }
        $affected = DB::table('care_support')->where('id', $care_id)->update($update_array);
        Session::flash('message', "Care Support added successfully");
        return redirect()->back();
    }
	/**************************************/
	/**************************************/
	/**************************************/
	//********************************//
	//**********SUPPORT-PLAN********//
	//********************************//
    public function viewplans()
    {
		$data = DB::table('support_plan')->get();
        return view('admin.banner.plan_view',compact('data'));
    }
    public function addplans()
    {
        return view('admin.banner.plan_add');
    }
    public function editplans($cs_id)
    {
		
		$info = DB::table('support_plan')->where('id', $cs_id)->first();
        return view('admin.banner.plan_edit',compact('info'));
    }
	public function insertplans(Request $request)
    {
        $this->validate($request,[
            'support_heading' => 'bail|required',
            'support_text' => 'bail|required',
            'support_url' => 'bail|required'
        ]);
		$update_array=array();
		$update_array['support_heading']=$request->get('support_heading');
		$update_array['support_text']=$request->get('support_text');
		$update_array['support_url']=$request->get('support_url');
        if ($request->hasFile('image')) {
            $file            = $request->file('image');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('image')->move(public_path().$destinationPath, $filename);
            $update_array['support_image'] = $filename;
        }else{
		$update_array['support_image']="";
		}
		if ($request->hasFile('hoverimage')) {
            $file            = $request->file('hoverimage');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('hoverimage')->move(public_path().$destinationPath, $filename);
            $update_array['hover_image'] = $filename;
        }else{
		$update_array['hover_image']="";
		}
        $affected = DB::table('support_plan')->insert($update_array);
        Session::flash('message', "Support plan added successfully");
       return redirect()->back();
    }
	public function updateplans(Request $request)
    {
        $this->validate($request,[
            'support_heading' => 'bail|required',
            'support_text' => 'bail|required',
            'support_url' => 'bail|required',
            'care_id' => 'required'
        ]);
		$update_array=array();
		$update_array['support_heading']=$request->get('support_heading');
		$update_array['support_text']=$request->get('support_text');
		$update_array['support_url']=$request->get('support_url');
		$care_id=$request->get('care_id');
        if ($request->hasFile('image')) {
            $file            = $request->file('image');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('image')->move(public_path().$destinationPath, $filename);
            $update_array['care_image'] = $filename;
        }
		if ($request->hasFile('hoverimage')) {
            $file            = $request->file('hoverimage');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('hoverimage')->move(public_path().$destinationPath, $filename);
            $update_array['hover_image'] = $filename;
        }
        $affected = DB::table('support_plan')->where('id', $care_id)->update($update_array);
        Session::flash('message', "Support plan updated successfully");
        return redirect()->back();
    }
	//********************************//
	//**********GALLERY********//
	//********************************//
    public function gallery()
    {
		$data = DB::table('gallery')->get();
        return view('admin.banner.gallery_view',compact('data'));
    }
    public function addgallery()
    {
        return view('admin.banner.gallery_add');
    }
    public function editgallery($cs_id)
    {
		$info = DB::table('gallery')->where('id', $cs_id)->first();
        return view('admin.banner.gallery_edit',compact('info'));
    }
	public function insertgallery(Request $request)
    {
        $this->validate($request,[
            'gallery_category' => 'bail|required',
            'gallery_heading' => 'bail|required',
            'gallery_text' => 'bail|required',
        ]);
		$update_array=array();
		$update_array['gallery_category']=$request->get('gallery_category');
		$update_array['gallery_heading']=$request->get('gallery_heading');
		$update_array['gallery_text']=$request->get('gallery_text');
        if ($request->hasFile('image')) {
            $file            = $request->file('image');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('image')->move(public_path().$destinationPath, $filename);
            $update_array['gallery_image'] = $filename;
        }else{
		$update_array['gallery_image']="";
		}
		
        $affected = DB::table('gallery')->insert($update_array);
        Session::flash('message', "Gallery added successfully");
       return redirect()->back();
    }
	public function updategallery(Request $request)
    {
        $this->validate($request,[
            'gallery_category' => 'bail|required',
            'gallery_heading' => 'bail|required',
            'gallery_text' => 'bail|required',
            'care_id' => 'required'
        ]);
		$update_array=array();
		$update_array['gallery_category']=$request->get('gallery_category');
		$update_array['gallery_heading']=$request->get('gallery_heading');
		$update_array['gallery_text']=$request->get('gallery_text');
		$care_id=$request->get('care_id');
        if ($request->hasFile('image')) {
            $file            = $request->file('image');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('image')->move(public_path().$destinationPath, $filename);
            $update_array['gallery_image'] = $filename;
        }
        $affected = DB::table('gallery')->where('id', $care_id)->update($update_array);
        Session::flash('message', "Gallery updated successfully");
        return redirect()->back();
    }
	//********************************//
	//**********PARTNERS********//
	//********************************//
    public function partners()
    {
		$data = DB::table('partners')->get();
        return view('admin.banner.partners',compact('data'));
    }
    public function addpartner()
    {
        return view('admin.banner.addpartner');
    }
    public function editpartner($cs_id)
    {
		$info = DB::table('partners')->where('id', $cs_id)->first();
        return view('admin.banner.editpartner',compact('info'));
    }
	public function insertpartner(Request $request)
    {
        $this->validate($request,[
            'partner_url' => 'bail|required',
        ]);
		$update_array=array();
		$update_array['partner_url']=$request->get('partner_url');
        if ($request->hasFile('image')) {
            $file            = $request->file('image');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('image')->move(public_path().$destinationPath, $filename);
            $update_array['partner_image'] = $filename;
        }else{
		$update_array['partner_image']="";
		}
		
        $affected = DB::table('partners')->insert($update_array);
        Session::flash('message', "Partner added successfully");
       return redirect()->back();
    }
	public function updatepartner(Request $request)
    {
        $this->validate($request,[
            'gallery_category' => 'bail|required',
            'care_id' => 'required'
        ]);
		$update_array=array();
		$update_array['partner_url']=$request->get('partner_url');
		$care_id=$request->get('care_id');
        if ($request->hasFile('image')) {
            $file            = $request->file('image');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('image')->move(public_path().$destinationPath, $filename);
            $update_array['partner_image'] = $filename;
        }
        $affected = DB::table('partners')->where('id', $care_id)->update($update_array);
        Session::flash('message', "Partner updated successfully");
        return redirect()->back();
    }
	//********************************//
	//**********KNOWLEDGE-CENTER********//
	//********************************//
    public function knowledge_center()
    {
		$data = DB::table('knowledge_center')->get();
        return view('admin.banner.knowledge_center',compact('data'));
    }
    public function addknowledge_center()
    {
        return view('admin.banner.knowledge_center_add');
    }
    public function editknowledge_center($cs_id)
    {
		$info = DB::table('knowledge_center')->where('id', $cs_id)->first();
        return view('admin.banner.knowledge_center_edit',compact('info'));
    }
	public function insertknowledge_center(Request $request)
    {
        $this->validate($request,[
            'heading' => 'bail|required',
            'text' => 'bail|required'
        ]);
		$update_array=array();
		$update_array['heading']=$request->get('heading');
		$update_array['text']=$request->get('text');
		$update_array['url_1']=$request->get('url_1');
		$update_array['url_2']=$request->get('url_1');
        
		
        $affected = DB::table('knowledge_center')->insert($update_array);
        Session::flash('message', "Knowledge center added successfully");
       return redirect()->back();
    }
	public function updateknowledge_center(Request $request)
    {
        $this->validate($request,[
            'heading' => 'bail|required',
            'text' => 'bail|required',
            'care_id' => 'required'
        ]);
		$update_array=array();
		$update_array['heading']=$request->get('heading');
		$update_array['text']=$request->get('text');
		$update_array['url_1']=$request->get('url_1');
		$update_array['url_2']=$request->get('url_1');
		$care_id=$request->get('care_id');
       
        $affected = DB::table('knowledge_center')->where('id', $care_id)->update($update_array);
        Session::flash('message', "Knowledge center updated successfully");
        return redirect()->back();
    }
	//********************************//
	//**********PROCESS********//
	//********************************//
    public function process()
    {
		$data = DB::table('process')->get();
        return view('admin.banner.process',compact('data'));
    }
    public function addprocess()
    {
        return view('admin.banner.addprocess');
    }
    public function editprocess($cs_id)
    {
		$info = DB::table('gallery')->where('id', $cs_id)->first();
        return view('admin.banner.editprocess',compact('info'));
    }
	public function insertprocess(Request $request)
    {
        $this->validate($request,[
            'heading' => 'bail|required',
            'text' => 'bail|required',
        ]);
		$update_array=array();
		$update_array['heading']=$request->get('heading');
		$update_array['text']=$request->get('text');
        if ($request->hasFile('image')) {
            $file            = $request->file('image');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('image')->move(public_path().$destinationPath, $filename);
            $update_array['image'] = $filename;
        }else{
		$update_array['image']="";
		}
		
        $affected = DB::table('process')->insert($update_array);
        Session::flash('message', "Process added successfully");
       return redirect()->back();
    }
	public function updateprocess(Request $request)
    {
        $this->validate($request,[
            'heading' => 'bail|required',
            'text' => 'bail|required',
            'care_id' => 'required'
        ]);
		$update_array=array();
		$update_array['heading']=$request->get('heading');
		$update_array['text']=$request->get('text');
		$care_id=$request->get('care_id');
        if ($request->hasFile('image')) {
            $file            = $request->file('image');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('image')->move(public_path().$destinationPath, $filename);
            $update_array['image'] = $filename;
        }
        $affected = DB::table('process')->where('id', $care_id)->update($update_array);
        Session::flash('message', "Process updated successfully");
        return redirect()->back();
    }
	//********************************//
	//**********SIMPLE-PROCESS********//
	//********************************//
    public function simpleprocess()
    {
		$data = DB::table('simpleprocess')->get();
        return view('admin.banner.simpleprocess',compact('data'));
    }
    public function addsimpleprocess()
    {
        return view('admin.banner.simpleprocess_add');
    }
    public function editsimpleprocess($cs_id)
    {
		$info = DB::table('simpleprocess')->where('id', $cs_id)->first();
        return view('admin.banner.simpleprocess_edit',compact('info'));
    }
	public function insertsimpleprocess(Request $request)
    {
        $this->validate($request,[
            'heading' => 'bail|required',
            'sub_heading' => 'bail|required',
            'text' => 'bail|required',
        ]);
		$update_array=array();
		$update_array['heading']=$request->get('heading');
		$update_array['sub_heading']=$request->get('sub_heading');
		$update_array['text']=$request->get('text');
        if ($request->hasFile('image')) {
            $file            = $request->file('image');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('image')->move(public_path().$destinationPath, $filename);
            $update_array['image'] = $filename;
        }else{
		$update_array['image']="";
		}
		
        $affected = DB::table('simpleprocess')->insert($update_array);
        Session::flash('message', "Simple Process added successfully");
       return redirect()->back();
    }
	public function updatesimpleprocess(Request $request)
    {
        $this->validate($request,[
            'heading' => 'bail|required',
            'sub_heading' => 'bail|required',
            'text' => 'bail|required',
            'care_id' => 'required'
        ]);
		$update_array=array();
		$update_array['heading']=$request->get('heading');
		$update_array['sub_heading']=$request->get('sub_heading');
		$update_array['text']=$request->get('text');
		$care_id=$request->get('care_id');
        if ($request->hasFile('image')) {
            $file            = $request->file('image');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('image')->move(public_path().$destinationPath, $filename);
            $update_array['image'] = $filename;
        }
        $affected = DB::table('simpleprocess')->where('id', $care_id)->update($update_array);
        Session::flash('message', "Simple Process updated successfully");
        return redirect()->back();
    }
/**************************************/
/**************************************/
/**************************************/
}
