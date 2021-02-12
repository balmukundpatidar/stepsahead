<?php

namespace App\Http\Controllers\Job\Training;

use App\Model\Training;
use App\Model\ContactInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TrainingController extends Controller
{
    public function index(){
        $trainingInfo = Training::where('id','1')->orderBy('id')->get();
        $contactInfo = ContactInfo::where('id','1')->orderBy('id')->get();
        $partners = DB::table('partners')->orderBy('partner_positions')->get();
        $gallery = DB::table('gallery')->orderBy('positions')->get();
        if(!empty($trainingInfo)) {
            $trainingInfo = $trainingInfo[0];
        } else {
            $trainingInfo = array();
        }
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        return view('job.training',['gallery'=>$gallery,'address'=> $address, 'setttings'=> $setttings,'trainingInfo'=>$trainingInfo, 'partners'=>$partners, 'contactInfo'=>$contactInfo]);
    }
}
