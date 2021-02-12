@extends('job.layout.layout')

@section('content')

    <link rel="stylesheet" href="http://localhost:85/project/Jobcare/public/jobs/js/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">



    <link rel="stylesheet" href="{{url('/')}}\jobs\font-awesome\css\font-awesome.css">

  
    
    <!-- End All Pages Title -->

    </div>

    <!-- End Header -->

    <br><br>
    <section class="assessment-application">
   <div class="container">
      <h1>Reset Password</h1>
      <p>Please enter your email and password to reset password.</p>
   </div>
</section>
    <div class="container">

        <div class="clearfix">

            <!-- <div class="all-title text-center">

                <h1 style="color: #000;"><b></b></h1>

                <p style="color: #000;">
                    {{-- CHM-WAL --}}
                    Please enter your email and password to reset password.
                </p>

            </div> -->

        </div>

    </div>

    <br><br>
<section class="sec reset-pass">
    <div class="container">

        <div class="row">

            <div class="col-sm-6 col-sm-offset-3" style="margin: 0 auto;">

                <div class="panel panel-login">

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

                    <div class="panel-heading">
                    <div class="form-main">
                        <form method="POST" id="register-form" action="{{ url('user_reset_password') }}">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-12 col-xs-6 col-sm-6">
                                   
                                    <div class="form-group">
                                        <input type="email" name="reset_email" class="form-control" placeholder="Email*">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-xs-6 col-sm-6">
                                    
                                    <div class="form-group">
                                        <input type="password" name="reset_password" class="form-control" placeholder="Reset Password*">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-xs-12 col-sm-6">
                                   
                                    <div class="form-group">
                                        <input type="password" name="reset_confirm_password" class="form-control" placeholder="Confirm Reset Password*">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-xs-6 col-sm-6">
                                <div class="form-btn text-center">
                                    <input type="submit" name="login-submit" tabindex="4" class="custom-btn" value="Reset Password">
                                    </div>
                                </div>
                            </div>
                        </form>
</div>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>
@stop