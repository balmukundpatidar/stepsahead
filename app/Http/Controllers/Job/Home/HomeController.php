<?php

namespace App\Http\Controllers\Job\Home;

use App\Model\Members;
use App\Model\News;
use App\Model\Job;
use App\Model\Service;
use App\Model\Slider;
use App\Model\Testimonial;
use App\Model\Menus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function __construct() {
       $menus = Menus::where("menu_status", "=", "Active")->orderBy('menu_position', 'asc')->get();
    }
    
    public function index(){
        $testimonial = Testimonial::where('testi_status','Active')->orderBy('testi_position')->get();
        $slider = Slider::where('slider_status','Active')->get();
        $services = Service::where('service_status','Active')->get();
        $member = Members::where('member_status','Active')->orderBy('member_positions')->get();
        $news = News::where('news_status','Active')->orderBy('created_at', 'desc')->paginate(6);
        $jobs = Job::where('job_status','Active')->orderBy('created_at', 'desc')->paginate(3);
        $url='/';
        if(DB::table('pages')->where('page_url',$url)->count()>0)
            $page = DB::table('pages')->where('page_url',$url)->first();
        else
            $page=false;
		$banner = DB::table('banner')->where('id', 1)->first();
		$care_support = DB::table('care_support')->orderBy('care_positions')->get();
		$support_plan = DB::table('support_plan')->orderBy('plan_positions')->get();
		$gallery = DB::table('gallery')->orderBy('positions')->get();
		$categories = DB::table('gallary_category')->get();
		$partners = DB::table('partners')->orderBy('partner_positions')->get();
		$process = DB::table('process')->orderBy('process_positions')->get();
		$knowledge_center = DB::table('knowledge_center')->orderBy('positions')->get();
        $simpleprocess = DB::table('simpleprocess')->orderBy('process_positions')->get();
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        return view('job.home',['address'=> $address, 'setttings'=> $setttings,'testimonials'=>$testimonial,
                            'sliders'=>$slider,'services'=>$services,'members'=>$member,'lnews'=>$news,'page'=>$page,'jobs'=>$jobs,'banner'=>$banner,'care_support'=>$care_support,'support_plan'=>$support_plan,'gallery'=>$gallery,'partners'=>$partners,'process'=>$process,'simpleprocess'=>$simpleprocess,'knowledge_center'=>$knowledge_center, 'categories' => $categories]);
    }
    public function newsDetails($slug){
        $data=News::where('slug', $slug)->get();
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        $id = '';
        $dataInfo = array();
        if(count($data) > 0) {
            $id = $data[0]->id;
            $dataInfo = $data[0];
        }
 
        $news = News::where('news_status','Active')->orderBy('created_at')->where('id','<>',$id)->get();
        return view('job.news_details',['address'=> $address, 'setttings'=> $setttings,'data'=>$dataInfo,'newss'=>$news]);

    }
	
}
