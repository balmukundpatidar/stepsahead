<?php

namespace App\Http\Controllers\Job\About;

use App\Model\About;
use App\Model\ContactInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function index(){
        $aboutInfo = About::where('id','1')->orderBy('id')->get();
        $contactInfo = ContactInfo::where('id','1')->orderBy('id')->get();
        $partners = DB::table('partners')->orderBy('partner_positions')->get();
        if(!empty($aboutInfo)) {
            $aboutInfo = $aboutInfo[0];
        } else {
            $aboutInfo = array();
        }
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        return view('job.about',['address'=> $address, 'setttings'=> $setttings,'aboutInfo'=>$aboutInfo, 'partners'=>$partners, 'contactInfo'=>$contactInfo]);
    }
}
