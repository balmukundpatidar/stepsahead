<?php

namespace App\Http\Controllers\Job\Team;

use App\Model\Members;
use App\Model\ContactInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    public function index($page = 1){
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        $url='Team';
		$team = Members::where('member_status','Active')->orderBy('member_positions','asc')->paginate('1000');
        if(DB::table('pages')->where('page_url',$url)->count()>0)
            $page = DB::table('pages')->where('page_url',$url)->first();
        else
            $page=false;
        return view('job.meettheteam',['address'=> $address, 'setttings'=> $setttings, 'page'=>$page,'team'=>$team]);
    }
    
    public function singleTeam($slug){
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        $url='Team';
        
		$team = Members::where('slug',$slug)->get();
        return view('job.single-team',['address'=> $address, 'setttings'=> $setttings,'team'=>$team]);
    }
}
