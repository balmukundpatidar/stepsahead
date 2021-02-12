<?php

namespace App\Http\Controllers\Job\Service;

use App\Model\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function index(){
        $url='services';
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        $services = Service::where('service_status','Active')->get();
        if(DB::table('pages')->where('page_url',$url)->count()>0)
            $page = DB::table('pages')->where('page_url',$url)->first();
        else
            $page=false;
        return view('job.services.service',['address'=> $address, 'setttings'=> $setttings,'services'=>$services,'page'=>$page]);
    }
}
