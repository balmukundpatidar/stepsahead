@extends('job.layout.layout')
@section('content')
<!--[My Application] -->
<section class="assessment-application">
   <div class="container">
      <h1>My Application</h1>
      <p>Please Log in or Register.If you have already registered, please log in and edit your profile.</p>
   </div>
</section>
<!--[My Application] -->

  <!-- Knowledge center -->
  <section class="knowledge-center login-form-sec bg-light">
          <div class="row">
            <div class="col-md-12">
              
              <div id="tabsContent" class="tab-content wow fadeInDown">
                <ul id="tabs" class="nav nav-tabs">
                <li class="nav-item">
                  <a href="" data-target="#Login" data-toggle="tab" class="nav-link active">Login</a>
                </li> 
                <li class="nav-item">
                  <a href="" data-target="#Register" data-toggle="tab" class="nav-link">Register</a>
                </li> 
              </ul>
              <br />
                <div id="Login" class="tab-pane active show fade">
                    <div class="form-main">
                    @if (count($errors) > 0)
            <div class="alert alert-danger">
               <ul>
                  @foreach ($errors->all() as $error)
                  <div>{{ $error }}</div>
                  @endforeach
               </ul>
            </div>
            @endif
            @if (Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif
            @if (Session::has('message1'))
            <div class="alert alert-success">{{ Session::get('message1') }}</div>
            @endif
                        <form action="{{route('employee_login_validate',['id'=>$job_id])}}" method="post" role="form">
                        {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="Email" tabindex="1"  name="Email" id="username" required class="form-control" placeholder="Email*">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input  type="password" name="password" tabindex="2" id="password" required class="form-control" placeholder="Password*">
                                    </div>
                                </div>
                               
                                <div class="col-md-12">
                                    <div class="form-btn text-center">
                                    <input type="submit" name="login-submit"  tabindex="4" class="custom-btn" value="Log In">
                                    </div>
                                    <div class="text-center mt-2">
                                        <a href="{{ url('user_reset_password')}}" tabindex="5" class="forgot-password">Reset Password?</a>
                                   </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="Register" class="tab-pane">
                    <div class="form-main text-center">
                    <a href="{{route('application',['id'=>$job_id])}}" class="custom-btn mb-4">Start Application</a>
                    <p>To begin your career as a care/support worker or RGN, register today and apply for available posts.</p>
                    </div>
                    </div>
                </div>      
              </div>
            </div>
          </div>
    </section>
    <!-- Knowledge center -->
@stop