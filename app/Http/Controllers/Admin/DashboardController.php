<?php

namespace App\Http\Controllers\Admin;

use App\Model\Job;
use App\Model\Testimonial;
use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');

    }

    public function index(){
        $jobs = Job::count();
        $Activejobs = Job::where('job_status','Active')->count();
        $user=User::where('user_type','Employee')->count();
        $testimonial = Testimonial::where('testi_status','Active')->get();
        return view('admin.dashboard.content',['Activejobs'=>$Activejobs,'jobs'=>$jobs,'user'=>$user,'testimonial'=>$testimonial]);
    }
    public function logout(){
        Auth::logout();
        return redirect(url('/'));
    }
}
