<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{
    public function login_view(){
        $address = DB::table('address')->get();
        $setttings = DB::table('site_setttings')->where('id', 1)->first();
        return view('admin.login',['address'=> $address, 'setttings'=> $setttings]);
    }

    public function login_validate(Request $request)
    {
        $email = $request->get('user');
        $password = $request->get('pwd');

        $validator = Validator::make($request->all(), [
            'user' => 'required|email',
            'pwd' => 'required',
        ]);

        if ($validator->fails()) {
            $error = $validator->errors();
           // Response::Error(Response::ValidationFormater($error->toArray()), "Validation errors found");
        }

        if (Auth::guard('web')->attempt(['email' => $email,'password' => $password,'user_type'=>'Admin','status'=>'Active'])) {
            return redirect(url('admin/job'));
        } elseif(Auth::guard('web')->attempt(['email' => $email,'password' => $password,'user_type'=>'Employer','status'=>'Active'])){
            return redirect(url('employer/job/create'));
        }
        else {
            Session::flash('message', "No User Found");
            return redirect()->back();
        }



    }

    public function logout(){
        Auth::logout();
        return redirect(url('/my-application'));
    }
}
