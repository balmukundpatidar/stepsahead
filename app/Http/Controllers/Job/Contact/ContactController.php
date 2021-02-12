<?php

namespace App\Http\Controllers\Job\Contact;

use App\Mail\MailContact;
use App\Model\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index(){
        $url='contact';
        if(DB::table('pages')->where('page_url',$url)->count()>0)
            $page = DB::table('pages')->where('page_url',$url)->first();
        else
            $page=false;
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();    
        return view('job.contact',['address'=> $address, 'setttings'=> $setttings,'page'=>$page]);
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'bail|required',
            'first_name' => 'bail|required',
            'last_name' => 'bail|required',
            'email' => 'bail|required',
            'number' => 'bail|required',
            'comment' => 'bail|required',
        ]);
        Contact::create([
            'title' => $request->get('title'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'organisation' => $request->get('company'),
            'email' => $request->get('email'),
            'mobile' =>$request->get('number'),
            'message'=>$request->get('comment'),
        ]);

        Mail::to('sunil.srajput90@gmail.com')->send(new MailContact($request));
        Mail::to('jskreation@gmail.com')->send(new MailContact($request));
        Mail::to('belal.almassri@gmail.com')->send(new MailContact($request));
		
		
//        Session::flash('message', "Your Message Sent successfully");

        return json_encode('success');
    }
    public function store_contact(Request $request)
    {
        $this->validate($request,[
            'first_name' => 'bail|required',
            'email' => 'bail|required',
            'number' => 'bail|required',
            //'comment' => 'bail|required',
			//'enquiry' => 'bail|required',
        ]);
		
        Contact::create([
            'first_name' => $request->get('first_name'),
            'email' => $request->get('email'),
            'mobile' =>$request->get('number'),
			'enquiry' => $request->get('enquiry'),
            'message'=>$request->get('comment'),
        ]);


        Mail::to('sunil.srajput90@gmail.com')->send(new MailContact($request));
        Mail::to('jskreation@gmail.com')->send(new MailContact($request));
        Mail::to('belal@codeadigital.co.uk')->send(new MailContact($request));
       // Mail::to('sunil.srajput90@gmail.com')->send(new MailContact($request));

        Session::flash('message', "Your Message Sent successfully");

        return redirect()->back();
    }
}
