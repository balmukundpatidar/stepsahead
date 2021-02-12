<?php

namespace App\Http\Controllers\Job\Gallery;
use App\Model\Gallery;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function index($page = 1){
        if($page > 0){
          $offset = (($page + 1) - 1) * 1000;
        } else {
          $offset = 1000;
        }
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        $count = count(DB::table('gallery')->get());
        $gallery = Gallery::orderBy('positions')->paginate($offset);
        $url='gallery';
        $categories = DB::table('gallary_category')->get();
        return view('job.gallery',['address'=> $address, 'setttings'=> $setttings,'gallery'=>$gallery, 'count'=>$count, 'offset'=>$offset, 'page' => $page, 'categories' => $categories]);
    }
    
}
