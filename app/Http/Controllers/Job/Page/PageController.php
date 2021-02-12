<?php
namespace App\Http\Controllers\Job\Page;
use App\Model\Job;
use App\Model\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model\ContactInfo;
class PageController extends Controller
{
    public function index(){
        $url='about';
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        $desc =  DB::table('posts')->where('post_key','about_desc')->value('post_value');
        $image =  DB::table('posts') ->where('post_key','about_image')->value('post_value');
		
        if(DB::table('pages')->where('page_url',$url)->count()>0){
            $page = DB::table('pages')->where('page_url',$url)->first();
        }else{
            $page=false;
		}
        return view('job.page',['address'=> $address, 'setttings'=> $setttings, 'desc'=>$desc,'image'=>$image,'page'=>$page]);
    }
	
    public function page($url){
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
		$contactInfo = ContactInfo::where('id','1')->orderBy('id')->first();
		$partners = DB::table('partners')->orderBy('partner_positions')->get();
		
        if(DB::table('pages')->where('page_url',$url)->where('status',1)->count()>0){
            $page = DB::table('pages')->where('page_url',$url)->first();
			$pageid=$page->id;
			$main_collection=DB::table('menu')->where('page_id',$pageid)->first();
			$main_collection_id=$main_collection->id;
			$allcollectionpages = DB::table('menu')->where('collection_page',1)->where('parent_id',$main_collection_id)->orderBy('menu.menu_position','ASC')->get();
			$cldata=array();
			if(!empty($allcollectionpages)){ 
			foreach($allcollectionpages as $cp){
				$cldata[]=$cp->page_id;
			}
			}
			//$cldata1 = DB::table('menu')->select(DB::raw("GROUP_CONCAT(page_id SEPARATOR ',') as `collectionpages`"))->where('collection_page',1)->where('parent_id',$main_collection_id)->orderBy('menu_position')->first();
			//$cldata=explode(',',$cldata1->collectionpages);
			if(!empty($cldata)){
				$ids_ordered = implode(',', $cldata);
	        $collectiondata=DB::table('pages')->whereIn('id',$cldata)->orderByRaw("FIELD(id, $ids_ordered)")->get();
			}else{
			$collectiondata=array();	
			}
			
            return view('job.pages',['address'=> $address, 'setttings'=> $setttings,'page'=>$page,'collectiondata'=>$collectiondata,'partners'=>$partners,'contactInfo'=>$contactInfo]);
        }else{
            echo "Page Not Found";
        }
    }
    public function news(){
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        $url='news';
        $news = News::where('news_status','Active')->orderBy('created_at','desc')->paginate(6);
        if(DB::table('pages')->where('page_url',$url)->count()>0)
            $page = DB::table('pages')->where('page_url',$url)->first();
        else
            $page=false;
        return view('job.news',['address'=> $address, 'setttings'=> $setttings, 'news'=>$news,'page'=>$page]);
    }
    public function packages(){
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        $url='packages';
        $news = News::where('news_status','Active')->orderBy('created_at','desc')->paginate(6);
        $gallery = DB::table('gallery')->orderBy('positions')->get();
        if(DB::table('pages')->where('page_url',$url)->count()>0)
            $page = DB::table('pages')->where('page_url',$url)->first();
        else
            $page=false;
        return view('job.packages',['gallery'=>$gallery,'address'=> $address, 'setttings'=> $setttings, 'news'=>$news,'page'=>$page]);
    }

    public function agency(){
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        $url='agency';
        $news = News::where('news_status','Active')->orderBy('created_at','desc')->paginate(6);
        if(DB::table('pages')->where('page_url',$url)->count()>0)
            $page = DB::table('pages')->where('page_url',$url)->first();
        else
            $page=false;
        return view('job.agency',['address'=> $address, 'setttings'=> $setttings, 'news'=>$news,'page'=>$page]);
    }
	public function training(){
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        $url='training';
        $news = News::where('news_status','Active')->orderBy('created_at','desc')->paginate(6);
        $gallery = DB::table('gallery')->orderBy('positions')->get();
        if(DB::table('pages')->where('page_url',$url)->count()>0)
            $page = DB::table('pages')->where('page_url',$url)->first();
        else
            $page=false;
        return view('job.training',['gallery'=>$gallery,'address'=> $address, 'setttings'=> $setttings, 'news'=>$news,'page'=>$page]);
    }
	public function vacancies(){
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        $url='vacancies';
        $news = News::where('news_status','Active')->orderBy('created_at','desc')->paginate(6);
		 $job = Job::where('job_status','Active')->orderBy('created_at','desc')->paginate('10');
        if(DB::table('pages')->where('page_url',$url)->count()>0)
            $page = DB::table('pages')->where('page_url',$url)->first();
        else
            $page=false;
        return view('job.vacancies',['address'=> $address, 'setttings'=> $setttings, 'news'=>$news,'page'=>$page,'jobs'=>$job]);
    }
	public function contactus(){
        $url='contactus';
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        $news = News::where('news_status','Active')->orderBy('created_at','desc')->paginate(6);
        if(DB::table('pages')->where('page_url',$url)->count()>0)
            $page = DB::table('pages')->where('page_url',$url)->first();
        else
            $page=false;
        return view('job.contactus',['news'=>$news,'setttings'=>$setttings,'page'=>$page,'address'=>$address]);
    }
    
    public function respite(){
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        $gallery = DB::table('gallery')->orderBy('positions')->get();
        $url='training';

        return view('job.respite',['gallery'=>$gallery,'address'=> $address, 'setttings'=> $setttings]);
    }
    public function cqc(){
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        $url='training';

        return view('job.cqc',['address'=> $address, 'setttings'=> $setttings]);
    }

}
