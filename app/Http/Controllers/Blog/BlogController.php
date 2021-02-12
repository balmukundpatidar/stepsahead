<?php

namespace App\Http\Controllers\Blog;

use App\Model\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index(){
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        $blogs =Blog::where("blog_status",'Active')->orderBy('created_at','desc')->paginate('12');
        return view('blog.index',['address'=> $address, 'setttings'=> $setttings,'blogs'=>$blogs]);
    }
    public function blogDetails($id){
        $blogs =Blog::where('id',$id)->first();
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        $feature_blog = Blog::where('blog_status','Active')->orderBy('created_at','desc')->limit(5)->get();
        return view('blog.details',['address'=> $address, 'setttings'=> $setttings,'blog'=>$blogs,'feature_blogs'=>$feature_blog]);

    }
}
