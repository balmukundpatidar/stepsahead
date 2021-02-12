<?php

namespace App\Http\Controllers\Job\Packages;

use App\Model\Packages;
use App\Model\ContactInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PackagesController extends Controller
{
    public function index(){
        $packagesInfo = Packages::where('id','1')->orderBy('id')->get();
        $contactInfo = ContactInfo::where('id','1')->orderBy('id')->get();
        $partners = DB::table('partners')->orderBy('partner_positions')->get();
        $gallery = DB::table('gallery')->orderBy('positions')->get();
        if(!empty($packagesInfo)) {
            $packagesInfo = $packagesInfo[0];
        } else {
            $packagesInfo = array();
        }
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        return view('job.packages',['gallery'=>$gallery,'address'=> $address, 'setttings'=> $setttings,'packagesInfo'=>$packagesInfo, 'partners'=>$partners, 'contactInfo'=>$contactInfo]);
    }
}
