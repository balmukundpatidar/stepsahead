<?php

namespace App\Http\Controllers\Job\Career;

use App\Model\Category;
use App\Model\Country;
use App\Model\Job;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CareerController extends Controller
{
    public function index(){
        $url='careers';
        $cat = Category::where('cat_status','Active')->get();
        $country = Country::where('country_status','Active')->get();
        if(DB::table('pages')->where('page_url',$url)->count()>0)
            $page = DB::table('pages')->where('page_url',$url)->first();
        else
            $page=false;
                $job = Job::where('job_status','Active')
            ->orderBy('created_at','desc')->paginate('12');
            $address = DB::table('address')->get();
            $setttings = DB::table('site_setttings')->where('id', 1)->first();
        return view('job.job.job',['address'=> $address, 'setttings'=> $setttings,'jobs'=>$job,'cats'=>$cat,'countries'=>$country,'page'=>$page]);
    }
}
