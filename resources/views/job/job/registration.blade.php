@extends('job.layout.layout')

@section('content')
    <!--[Pre-Assessment Application] -->
    <section class="assessment-application">
        <div class="container">
            <h1>Register to continue</h1>
            <p>Now that you've successfully completed the pre-qualification section, set up a free account to
                continue.
                This is so you can save your progress and log back in at any time.</p>
        </div>
    </section>
    <!--[Pre-Assessment Application] -->
   <!--[Register] -->
   <section class="sec register-form">
            <div class="container">
                <div class="form-main">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif

                @if (Session::has('message'))
                   <div class="alert alert-success">{{ Session::get('message') }}</div>
                @endif

                    <form action="{{route('registration_store',['id'=>$job_id])}}" method="post">
                    {{csrf_field()}}
                    <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="email" id="username" tabindex="1" class="form-control" placeholder="Email*">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password*">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="password" name="confirm_password" id="password" tabindex="2" class="form-control" placeholder="Confirm Password*">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-btn text-center">
                                    <button type="submit" name="login-submit" id="login-submit" tabindex="4" class="custom-btn">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--[Register] -->
        <!--[call section close here] -->
        <section class="cal-section sec-testimonial">
            <div class="container">
                <div class="row align-items-center wow fadeInUp">
                    <div class="col-lg-6 col-sm-7">
                        <div class="want-tlk">
                            <img src="{{url('/')}}/jobs/img/celular.svg" alt="call-icon" />
                            <h2>Want to talk more?</h2>
                            <p>
                                For further information about our services or to talk about
                                how we can help you, please contact us.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-5">
                        <div class="call-us text-right">
                            <a href="{{route('contactus')}}" class="custom-btn">call us now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--[call section close here] -->
@stop