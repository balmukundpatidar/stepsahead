<?php

namespace App\Http\Controllers\Job\Agency;

use App\Model\Agency;
use App\Model\ContactInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AgencyController extends Controller
{
    public function index(){
        $agencyInfo = Agency::where('id','1')->orderBy('id')->get();
        $contactInfo = ContactInfo::where('id','1')->orderBy('id')->get();
        $partners = DB::table('partners')->orderBy('partner_positions')->get();
        if(!empty($agencyInfo)) {
            $agencyInfo = $agencyInfo[0];
        } else {
            $agencyInfo = array();
        }
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        return view('job.agency',['address'=> $address, 'setttings'=> $setttings,'agencyInfo'=>$agencyInfo, 'partners'=>$partners, 'contactInfo'=>$contactInfo]);
    }
    
       public function meettheteam(){
            $agencyInfo = Agency::where('id','1')->orderBy('id')->get();
        $contactInfo = ContactInfo::where('id','1')->orderBy('id')->get();
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        
        return view('job.meettheteam',['address'=> $address, 'setttings'=> $setttings]);
    }
    
}
