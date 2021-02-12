<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use DB;
use App\Model\GallaryCategory;

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
// 		 print_r($request->file('image'));
// 		exit;
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
		$data = DB::table('care_support')->orderBy('care_positions')->get();
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
        $position = 0;
        $data = DB::table('care_support')->get();
        if(count($data) > 0) {
            $position = count($data);
        }
		$update_array=array();
		$update_array['care_heading']=$request->get('care_heading');
		$update_array['care_text']=$request->get('care_text');
		$update_array['care_url']=$request->get('care_url');
		$update_array['care_positions'] = $position + 1;
		
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
    
     public function updateOrderForCareSupport(Request $request){
        $order_ids = $request->get('category_order');
        $space_separated = explode(",", $order_ids);
        $i = 1;
        foreach ($space_separated as $order_id) {
            $update_array=array();
            $update_array['care_positions'] = $i;
            DB::table('care_support')->where('id', $order_id)->update($update_array);
            $i++;
        }
        return redirect()->back();

    }
    
    public function deleteCareSupport($id)
    {
        DB::table('care_support')->where('id', $id)->delete();
        Session::flash('message', "One Care & Support deleted");
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
            //'care_url' => 'bail|required',
            'id' => 'required'
        ]);
		$update_array=array();
		$update_array['title']=$request->get('title');
        $update_array['description']=$request->get('description');
        $update_array['text_1']=$request->get('text_1');
        $update_array['text_2']=$request->get('text_2');
        $update_array['pdf_1_title']=$request->get('pdf_1_title');
        $update_array['pdf_2_title']=$request->get('pdf_2_title');
        $update_array['pdf_3_title']=$request->get('pdf_3_title');
        $update_array['pdf_4_title']=$request->get('pdf_4_title');
        $update_array['pdf_5_title']=$request->get('pdf_5_title');
        $update_array['pdf_6_title']=$request->get('pdf_6_title');
        $update_array['seo_keyword']=$request->get('seo_keyword');
        $update_array['seo_description']=$request->get('seo_description');

        

		//$update_array['care_url']=$request->get('care_url');
		$aboutId=$request->get('id');
        if ($request->hasFile('banner_image')) {
            $file            = $request->file('banner_image');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('banner_image')->move(public_path().$destinationPath, $filename);
            $update_array['banner_image'] = $filename;
        }

        if ($request->hasFile('image_1')) {
            $file            = $request->file('image_1');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('image_1')->move(public_path().$destinationPath, $filename);
            $update_array['image_1'] = $filename;
        }

        if ($request->hasFile('image_2')) {
            $file            = $request->file('image_2');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('image_2')->move(public_path().$destinationPath, $filename);
            $update_array['image_2'] = $filename;
        }
        if ($request->hasFile('pdf_1_url')) {
            $file            = $request->file('pdf_1_url');
            $destinationPath = '/jobs/documents/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('pdf_1_url')->move(public_path().$destinationPath, $filename);
            $update_array['pdf_1_url'] = $filename;
        }

        if ($request->hasFile('pdf_2_url')) {
            $file            = $request->file('pdf_2_url');
            $destinationPath = '/jobs/documents/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('pdf_2_url')->move(public_path().$destinationPath, $filename);
            $update_array['pdf_2_url'] = $filename;
        }

        if ($request->hasFile('pdf_3_url')) {
            $file            = $request->file('pdf_3_url');
            $destinationPath = '/jobs/documents/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('pdf_3_url')->move(public_path().$destinationPath, $filename);
            $update_array['pdf_3_url'] = $filename;
        }

        if ($request->hasFile('pdf_4_url')) {
            $file            = $request->file('pdf_4_url');
            $destinationPath = '/jobs/documents/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('pdf_4_url')->move(public_path().$destinationPath, $filename);
            $update_array['pdf_4_url'] = $filename;
        }

        if ($request->hasFile('pdf_5_url')) {
            $file            = $request->file('pdf_5_url');
            $destinationPath = '/jobs/documents/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('pdf_5_url')->move(public_path().$destinationPath, $filename);
            $update_array['pdf_5_url'] = $filename;
        }

        if ($request->hasFile('pdf_6_url')) {
            $file            = $request->file('pdf_6_url');
            $destinationPath = '/jobs/documents/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('pdf_6_url')->move(public_path().$destinationPath, $filename);
            $update_array['pdf_6_url'] = $filename;
        }
        $affected = DB::table('aboutus')->where('id', $aboutId)->update($update_array);
        Session::flash('message', "About updated successfully");
        return redirect()->back();
    }


    /**************************************/
	/**************-Contact Info-****************/
	/**************************************/
    public function contactinfo()
    {
        $info  = DB::table('contactinfo')->where('id', 1)->first();
        return view('admin.pages.contactinfo',compact('info'));
    }

	public function updateinfo(Request $request)
    {
        $this->validate($request,[
            'description' => 'bail|required',
            'id' => 'required'
        ]);
		$update_array=array();
        $update_array['description']=$request->get('description');
        $contactId=$request->get('id');
        
        $affected = DB::table('contactinfo')->where('id', $contactId)->update($update_array);
        Session::flash('message', "Contact Info updated successfully");
        return redirect()->back();
    }

     /**************************************/
	/**************-Packages-****************/
	/**************************************/

    public function packages()
    {
        $info  = DB::table('packages')->where('id', 1)->first();
        return view('admin.pages.packages',compact('info'));
    }

	public function updatePackages(Request $request)
    {
        $this->validate($request,[
            'title' => 'bail|required',
            'description' => 'bail|required',
            'id' => 'required'
        ]);
		$update_array=array();
		$update_array['title']=$request->get('title');
        $update_array['description']=$request->get('description');
        $update_array['section_1_heading']=$request->get('section_1_heading');
        $update_array['section_2_heading']=$request->get('section_2_heading');
        $update_array['section_3_heading']=$request->get('section_3_heading');
        $update_array['section_4_heading']=$request->get('section_4_heading');
        $update_array['section_1_desc']=$request->get('section_1_desc');
        $update_array['section_2_desc']=$request->get('section_2_desc');
        $update_array['section_3_desc']=$request->get('section_3_desc');
        $update_array['section_4_desc']=$request->get('section_4_desc');
        $update_array['seo_keyword']=$request->get('seo_keyword');
        $update_array['seo_description']=$request->get('seo_description');

        $packageId=$request->get('id');
        if ($request->hasFile('banner_image')) {
            $file            = $request->file('banner_image');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('banner_image')->move(public_path().$destinationPath, $filename);
            $update_array['banner_image'] = $filename;
        }

        if ($request->hasFile('section_1_img')) {
            $file            = $request->file('section_1_img');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('section_1_img')->move(public_path().$destinationPath, $filename);
            $update_array['section_1_img'] = $filename;
        }

        if ($request->hasFile('section_2_img')) {
            $file            = $request->file('section_2_img');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('section_2_img')->move(public_path().$destinationPath, $filename);
            $update_array['section_2_img'] = $filename;
        }


        if ($request->hasFile('section_3_img')) {
            $file            = $request->file('section_3_img');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('section_3_img')->move(public_path().$destinationPath, $filename);
            $update_array['section_3_img'] = $filename;
        }

        if ($request->hasFile('section_4_img')) {
            $file            = $request->file('section_4_img');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('section_4_img')->move(public_path().$destinationPath, $filename);
            $update_array['section_4_img'] = $filename;
        }

        $affected = DB::table('packages')->where('id', $packageId)->update($update_array);
        Session::flash('message', "Packages updated successfully");
        return redirect()->back();
    }
    

      /**************************************/
	/**************-Agency-****************/
	/**************************************/

    public function agency()
    {
        $info  = DB::table('agency')->where('id', 1)->first();
        return view('admin.pages.agency',compact('info'));
    }

	public function updateAgency(Request $request)
    {
        $this->validate($request,[
            'title' => 'bail|required',
            'description' => 'bail|required',
            'id' => 'required'
        ]);
		$update_array=array();
		$update_array['title']=$request->get('title');
        $update_array['description']=$request->get('description');
        $update_array['section_1_heading']=$request->get('section_1_heading');
        $update_array['section_2_heading']=$request->get('section_2_heading');
        $update_array['section_3_heading']=$request->get('section_3_heading');
        $update_array['section_4_heading']=$request->get('section_4_heading');
        $update_array['section_5_heading']=$request->get('section_5_heading');
        $update_array['section_1_desc']=$request->get('section_1_desc');
        $update_array['section_2_desc']=$request->get('section_2_desc');
        $update_array['section_3_desc']=$request->get('section_3_desc');
        $update_array['section_4_desc']=$request->get('section_4_desc');
        $update_array['section_5_desc']=$request->get('section_5_desc');
        $update_array['seo_keyword']=$request->get('seo_keyword');
        $update_array['seo_description']=$request->get('seo_description');

        $agencyId=$request->get('id');
        if ($request->hasFile('banner_image')) {
            $file            = $request->file('banner_image');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('banner_image')->move(public_path().$destinationPath, $filename);
            $update_array['banner_image'] = $filename;
        }

        if ($request->hasFile('section_1_img')) {
            $file            = $request->file('section_1_img');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('section_1_img')->move(public_path().$destinationPath, $filename);
            $update_array['section_1_img'] = $filename;
        }

        if ($request->hasFile('section_2_img')) {
            $file            = $request->file('section_2_img');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('section_2_img')->move(public_path().$destinationPath, $filename);
            $update_array['section_2_img'] = $filename;
        }


        if ($request->hasFile('section_3_img')) {
            $file            = $request->file('section_3_img');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('section_3_img')->move(public_path().$destinationPath, $filename);
            $update_array['section_3_img'] = $filename;
        }

        if ($request->hasFile('section_4_img')) {
            $file            = $request->file('section_4_img');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('section_4_img')->move(public_path().$destinationPath, $filename);
            $update_array['section_4_img'] = $filename;
        }

        if ($request->hasFile('section_5_img')) {
            $file            = $request->file('section_5_img');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('section_5_img')->move(public_path().$destinationPath, $filename);
            $update_array['section_5_img'] = $filename;
        }

        $affected = DB::table('agency')->where('id', $agencyId)->update($update_array);
        Session::flash('message', "Agency updated successfully");
        return redirect()->back();
    }


    /**************************************/
	/**************-Training-****************/
	/**************************************/

    public function training()
    {
        $info  = DB::table('training')->where('id', 1)->first();
        return view('admin.pages.training',compact('info'));
    }

	public function updateTraining(Request $request)
    {
        $this->validate($request,[
            'title' => 'bail|required',
            'description' => 'bail|required',
            'id' => 'required'
        ]);
		$update_array=array();
		$update_array['title']=$request->get('title');
        $update_array['description']=$request->get('description');
        $update_array['section_1_heading']=$request->get('section_1_heading');
        $update_array['section_2_heading']=$request->get('section_2_heading');
        $update_array['section_3_heading']=$request->get('section_3_heading');
        $update_array['section_1_desc']=$request->get('section_1_desc');
        $update_array['section_2_desc']=$request->get('section_2_desc');
        $update_array['section_3_desc']=$request->get('section_3_desc');
        $update_array['seo_keyword']=$request->get('seo_keyword');
        $update_array['seo_description']=$request->get('seo_description');

        $trainingId=$request->get('id');
        if ($request->hasFile('banner_image')) {
            $file            = $request->file('banner_image');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('banner_image')->move(public_path().$destinationPath, $filename);
            $update_array['banner_image'] = $filename;
        }

        if ($request->hasFile('section_1_img')) {
            $file            = $request->file('section_1_img');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('section_1_img')->move(public_path().$destinationPath, $filename);
            $update_array['section_1_img'] = $filename;
        }

        if ($request->hasFile('section_2_img')) {
            $file            = $request->file('section_2_img');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('section_2_img')->move(public_path().$destinationPath, $filename);
            $update_array['section_2_img'] = $filename;
        }


        if ($request->hasFile('section_3_img')) {
            $file            = $request->file('section_3_img');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('section_3_img')->move(public_path().$destinationPath, $filename);
            $update_array['section_3_img'] = $filename;
        }

        $affected = DB::table('training')->where('id', $trainingId)->update($update_array);
        Session::flash('message', "Training updated successfully");
        return redirect()->back();
    }


    /**************************************/
    /**************-Site Setting-****************/
    /**************************************/

    public function siteSetting()
    {
        $info  = DB::table('site_setttings')->where('id', 1)->first();
        return view('admin.pages.sitesettings',compact('info'));
    }

	public function updatesiteSetting(Request $request)
    {
        $this->validate($request,[
            'phone_number_1' => 'bail|required',
            'phone_number_2' => 'bail|required',
           // 'adress' => 'bail|required',
            'email_1' => 'bail|required',
            'email_2' => 'bail|required',
            'facebook_url' => 'bail|required',
            'twitter_url' => 'bail|required',
            'instagram_url' => 'bail|required',
            'copyright' => 'bail|required',
            'id' => 'required'
            
        ]);
        $update_array=array();
        $update_array['tweets_feeds']=$request->get('tweets_feeds') ? $request->get('tweets_feeds') : '';

        $update_array['copyright']=$request->get('copyright');
		$update_array['adress']=$request->get('adress');
        $update_array['phone_number_1']=$request->get('phone_number_1');
        $update_array['phone_number_2']=$request->get('phone_number_2');
        $update_array['email_1']=$request->get('email_1');
        $update_array['email_2']=$request->get('email_2');
        $update_array['facebook_url']=$request->get('facebook_url');
        $update_array['twitter_url']=$request->get('twitter_url');
        $update_array['instagram_url']=$request->get('instagram_url');
        $sitesetttingsId=$request->get('id');
        if ($request->hasFile('header_logo')) {
            $file            = $request->file('header_logo');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('header_logo')->move(public_path().$destinationPath, $filename);
            $update_array['header_logo'] = $filename;
        }

        if ($request->hasFile('footer_logo')) {
            $file            = $request->file('footer_logo');
            $destinationPath = '/jobs/images/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $request->file('footer_logo')->move(public_path().$destinationPath, $filename);
            $update_array['footer_logo'] = $filename;
        }

        $affected = DB::table('site_setttings')->where('id', $sitesetttingsId)->update($update_array);
        Session::flash('message', "Site Settings updated successfully");
        return redirect()->back();
    }

    /**************************************/
    /**************-Address-****************/
    /**************************************/

    public function viewaddress()
    {
		$data = DB::table('address')->get();
        return view('admin.address.address_view',compact('data'));
    }
    public function addaddress()
    {
        return view('admin.address.address_add');
    }
    public function editaddress($cs_id)
    {
		
		$info = DB::table('address')->where('id', $cs_id)->first();
        return view('admin.address.address_edit',compact('info'));
    }
	public function insertaddress(Request $request)
    {
        $this->validate($request,[
            'address' => 'bail|required',
            'lat' => 'bail|required',
            'long' => 'bail|required',
            'address_type' => 'bail|required'
        ]);
		$update_array=array();
		$update_array['address']=$request->get('address');
		$update_array['lat']=$request->get('lat');
        $update_array['long']=$request->get('long');
        $update_array['address_type']=$request->get('address_type');

        $affected = DB::table('address')->insert($update_array);
        Session::flash('message', "Address added successfully");
       return redirect()->back();
    }

	public function updateaddress(Request $request)
    {
        $this->validate($request,[
            'address' => 'bail|required',
            'lat' => 'bail|required',
            'long' => 'bail|required',
            'address_type' => 'bail|required',
            'care_id' => 'required'
        ]);
		$update_array=array();
		$update_array['address']=$request->get('address');
		$update_array['lat']=$request->get('lat');
        $update_array['long']=$request->get('long');
        $update_array['address_type']=$request->get('address_type');
		$care_id=$request->get('care_id');
        $affected = DB::table('address')->where('id', $care_id)->update($update_array);
        Session::flash('message', "Address updated successfully");
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
		$data = DB::table('support_plan')->orderBy('plan_positions')->get();
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
        $position = 0;
        $data = DB::table('support_plan')->get();
        if(count($data) > 0) {
            $position = count($data);
        }
		$update_array=array();
		$update_array['support_heading']=$request->get('support_heading');
		$update_array['support_text']=$request->get('support_text');
		$update_array['support_url']=$request->get('support_url');
		$update_array['plan_positions'] = $position + 1;
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
            $update_array['support_image'] = $filename;
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
    
    public function updateOrderForPlans(Request $request){
        $order_ids = $request->get('category_order');
        $space_separated = explode(",", $order_ids);
        $i = 1;
        foreach ($space_separated as $order_id) {
            $update_array=array();
            $update_array['plan_positions'] = $i;
            DB::table('support_plan')->where('id', $order_id)->update($update_array);
            $i++;
        }
        return redirect()->back();

    }
    
    public function deletePlans($id)
    {
        DB::table('support_plan')->where('id', $id)->delete();
        Session::flash('message', "One plan deleted");
        return redirect()->back();

    }
    
    
	//********************************//
	//**********GALLERY********//
	//********************************//
    public function gallery()
    {
		$data = DB::table('gallery')->orderBy('positions')->get();
        return view('admin.banner.gallery_view',compact('data'));
    }
    // gallary categories
    public function gallaryCategories() {
        $categories = GallaryCategory::all();
        return view('admin.banner.gallery_categories', compact('categories'));
    }
    public function gallaryAddCategory() {
        return view('admin.banner.gallery_add_categories');
    }
    public function gallaryEditCategory($cs_id) {
        $category = GallaryCategory::find($cs_id);
        return view('admin.banner.gallery_edit_categories', compact('category'));
    }
    public function insertgalleryCategory(Request $request) {
        // insert logic
        $this->validate($request,[
            'title' => 'required',
            'slug' => 'required',
        ]);
        $category = new GallaryCategory;
        $category->title = $request->title;
        $category->slug = $request->slug;
        $category->save();
        Session::flash('message', "Gallary added successfully");
        return redirect()->back();
    }
    public function updategalleryCategory(Request $request) {
        // $this->validate($request,[
        //     'id', 'required',
        //     'title' => 'required',
        //     'slug' => 'required',
        // ]);
        // $category = GallaryCategory::where('id', '=', $request->id)->first();

        $updt = array();
                
        $fields = $fields = array('title', 'slug');
        foreach($fields as $field){
            $updt[$field] = $request->$field;
        }
        // echo $request->id; die;
        DB::table('gallary_category')->where('id',$request->id)->update($updt);
        Session::flash('message', "Gallery updated successfully");
        return redirect()->back();
    }
    // gallary categories
    public function addgallery()
    {
        $categories = GallaryCategory::all();
        return view('admin.banner.gallery_add', compact('categories'));
    }
    public function editgallery($cs_id)
    {
        $categories = GallaryCategory::all();
		$info = DB::table('gallery')->where('id', $cs_id)->first();
        return view('admin.banner.gallery_edit',compact('info', 'categories'));
    }
	public function insertgallery(Request $request)
    {
        $this->validate($request,[
            'gallery_category' => 'bail|required',
            'gallery_heading' => 'bail|required',
            'gallery_text' => 'bail|required',
        ]);
        $position = 0;
        $data = DB::table('partners')->get();
        if(count($data) > 0) {
            $position = count($data);
        }
		$update_array=array();
		$update_array['gallery_category']=$request->get('gallery_category');
		$update_array['gallery_heading']=$request->get('gallery_heading');
		$update_array['gallery_text']=$request->get('gallery_text');
		$update_array['positions'] = $position + 1;
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
    
    public function updateOrderForGallery(Request $request){
        $order_ids = $request->get('category_order');
        $space_separated = explode(",", $order_ids);
        $i = 1;
        foreach ($space_separated as $order_id) {
            $update_array=array();
            $update_array['positions'] = $i;
            DB::table('gallery')->where('id', $order_id)->update($update_array);
            $i++;
        }
        return redirect()->back();

    }
    
    public function deletegallery($id)
    {
        DB::table('gallery')->where('id', $id)->delete();
        Session::flash('message', "One gallery deleted");
        return redirect()->back();

    }
    
	//********************************//
	//**********PARTNERS********//
	//********************************//
    public function partners()
    {
		$data = DB::table('partners')->orderBy('partner_positions')->get();
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
        $position = 0;
        $data = DB::table('partners')->get();
        if(count($data) > 0) {
            $position = count($data);
        }
		$update_array=array();
		$update_array['partner_url']=$request->get('partner_url');
		$update_array['partner_positions'] = $position + 1;
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
    
     public function updateOrderForPartners(Request $request){
        $order_ids = $request->get('category_order');
        $space_separated = explode(",", $order_ids);
        $i = 1;
        foreach ($space_separated as $order_id) {
            $update_array=array();
            $update_array['partner_positions'] = $i;
            DB::table('partners')->where('id', $order_id)->update($update_array);
            $i++;
        }
        return redirect()->back();

    }
    
    public function deletePartners($id)
    {
        DB::table('partners')->where('id', $id)->delete();
        Session::flash('message', "One partner deleted");
        return redirect()->back();

    }
    
	//********************************//
	//**********KNOWLEDGE-CENTER********//
	//********************************//
    public function knowledge_center()
    {
		$data = DB::table('knowledge_center')->orderBy('positions')->get();
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
        $position = 0;
        $data = DB::table('knowledge_center')->get();
        if(count($data) > 0) {
            $position = count($data);
        }
		$update_array=array();
		$update_array['positions'] = $position + 1;
		$update_array['heading']=$request->get('heading');
		$update_array['text']=$request->get('text');
		$update_array['url_1']=$request->get('url_1');
		$update_array['button_title']=$request->get('button_title');
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
		$update_array['button_title']=$request->get('button_title');
		$care_id=$request->get('care_id');
       
        $affected = DB::table('knowledge_center')->where('id', $care_id)->update($update_array);
        Session::flash('message', "Knowledge center updated successfully");
        return redirect()->back();
    }
    
     public function updateOrderForKnowledges(Request $request){
        $order_ids = $request->get('category_order');
        $space_separated = explode(",", $order_ids);
        $i = 1;
        foreach ($space_separated as $order_id) {
            $update_array=array();
            $update_array['positions'] = $i;
            DB::table('knowledge_center')->where('id', $order_id)->update($update_array);
            $i++;
        }
        return redirect()->back();

    }
    
    public function deleteKnowledge($id)
    {
        DB::table('knowledge_center')->where('id', $id)->delete();
        Session::flash('message', "One knowledge center deleted");
        return redirect()->back();

    }
    
	//********************************//
	//**********PROCESS********//
	//********************************//
    public function process()
    {
		$data = DB::table('process')->orderBy('process_positions')->get();
        return view('admin.banner.process',compact('data'));
    }
    public function addprocess()
    {
        return view('admin.banner.addprocess');
    }
    public function editprocess($cs_id)
    {
		$info = DB::table('process')->where('id', $cs_id)->first();
        return view('admin.banner.editprocess',compact('info'));
    }
	public function insertprocess(Request $request)
    {
        $this->validate($request,[
            'heading' => 'bail|required',
            'text' => 'bail|required',
        ]);
        $position = 0;
        $data = DB::table('process')->get();
        if(count($data) > 0) {
            $position = count($data);
        }
        
		$update_array=array();
		$update_array['heading']=$request->get('heading');
		$update_array['text']=$request->get('text');
		$update_array['process_positions'] = $position + 1;
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
    
     public function updateOrderForProcess(Request $request){
        $order_ids = $request->get('category_order');
        $space_separated = explode(",", $order_ids);
        $i = 1;
        foreach ($space_separated as $order_id) {
            $update_array=array();
            $update_array['process_positions'] = $i;
            DB::table('process')->where('id', $order_id)->update($update_array);
            $i++;
        }
        return redirect()->back();

    }
    
    public function destroy($id)
    {
        DB::table('process')->where('id', $id)->delete();
        Session::flash('message', "One process deleted");
        return redirect()->back();

    }
    
	//********************************//
	//**********SIMPLE-PROCESS********//
	//********************************//
    public function simpleprocess()
    {
		$data = DB::table('simpleprocess')->orderBy('process_positions')->get();
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
         $position = 0;
        $data = DB::table('simpleprocess')->get();
        if(count($data) > 0) {
            $position = count($data);
        }
		$update_array=array();
		$update_array['heading']=$request->get('heading');
		$update_array['sub_heading']=$request->get('sub_heading');
		$update_array['text']=$request->get('text');
		$update_array['process_positions'] = $position + 1;
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
    
     public function updateOrderForSimpleProcess(Request $request){
        $order_ids = $request->get('category_order');
        $space_separated = explode(",", $order_ids);
        $i = 1;
        foreach ($space_separated as $order_id) {
            $update_array=array();
            $update_array['process_positions'] = $i;
            DB::table('simpleprocess')->where('id', $order_id)->update($update_array);
            $i++;
        }
        return redirect()->back();

    }
    
    public function deleteSimpleProcess($id)
    {
        DB::table('simpleprocess')->where('id', $id)->delete();
        Session::flash('message', "One simple process deleted");
        return redirect()->back();

    }
/**************************************/
/**************************************/
/**************************************/
}
