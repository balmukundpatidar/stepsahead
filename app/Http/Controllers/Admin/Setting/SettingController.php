<?php

namespace App\Http\Controllers\Admin\Setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    public function about_index(){
        $title =  DB::table('posts')
            ->where('post_key','about_title')->value('post_value');
        $desc =  DB::table('posts')
            ->where('post_key','about_desc')->value('post_value');
        $image =  DB::table('posts')
            ->where('post_key','about_image')->value('post_value');
        return view('admin.posts.about',['title'=>$title,'desc'=>$desc,'image'=>$image]);
    }

    public function about_store(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $file            = $request->file('image');
            $destinationPath = '/uploads/posts/';
            $filename        = str_random(6) . '_' . $file->getClientOriginalName();
            $request->file('image')->move(public_path().$destinationPath, $filename);
            DB::table('posts')
                ->where('post_key','about_image')
                ->update(['post_value' => $filename]);
        }
        DB::table('posts')
            ->where('post_key','about_title')
            ->update(['post_value' => $request->get('title')]);
        DB::table('posts')
            ->where('post_key','about_desc')
            ->update(['post_value' => $request->get('description')]);
        Session::flash('message', "Edited successfully");

        return redirect()->back();
    }
}
