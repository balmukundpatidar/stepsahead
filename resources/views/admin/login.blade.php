<!DOCTYPE html>

<html>

<head>

    <!-- Meta-Information -->

    <title>Login</title>

    <meta charset="utf-8">

    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Vendor: Bootstrap Stylesheets http://getbootstrap.com -->

    <link rel="stylesheet" href="{{url('/')}}/assest/css/bootstrap.min.css">

    <!-- Our Website CSS Styles -->

    <link rel="stylesheet" href="{{url('/')}}/assest/css/icons.css">

    <link rel="stylesheet" href="{{url('/')}}/assest/css/main.css">

    <link rel="stylesheet" href="{{url('/')}}/assest/css/responsive.css">



</head>

<body>

<style>

    img.top_logo {

        display: block;

        margin: 0 auto;

        max-width: 222px;

        width: 100%;

        margin-bottom: 20px;

    }

    .widget-title {

        float: left;

        margin-bottom: 5px;

        width: 100%;

        text-align: center;

    }

    h4 {

        margin-bottom: 0;

    }

    .account-form {

        float: left;

        width: 100%;

    }

    p.message {

        text-align: center;

        margin-bottom: 20px;

    }
    .account-user-sec {
    background-color: #fff;
}
.widget-title {
    margin-bottom: 30px;
}
    .contact-sec {
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.07);
}
.text-center {
    max-width: 200px;
    margin: 10px auto 0;
}
.custom-btn{
    border-radius: 50px;
    padding: 11px 38px !important;
    color: #41c796;
    background:transparent; 
    border: 2px solid #41c796;
    -webkit-transition: all .5s ease;
    -o-transition: all .5s ease;
    transition: all .5s ease;
    font-weight: 600;
    font-size: 16px;
    display: inline-block;
    text-transform: capitalize;
}
.custom-btn:hover {
    color: #fff !important;
    background: #41c796;
}

</style>

<div class="main-content">



    <div class="account-user-sec">

        <div class="account-sec">

            <div class="acount-sec">

                <div class="container">

                    <div class="row">

                        <div class="col-md-6 col-md-push-3">

                            <div class="contact-sec">
                                        <a class="home" href="/">

                                            <img class="top_logo" src="{{url('/')}}/assest/logo.png">

                                        </a>
                                <div class="row">

                                    <div class="col-md-12">

                                        <div class="widget-title">

                                            <h4>Admin Panel Login</h4>

                                            <span>Fill your detail to get in</span>

                                        </div><!-- Widget title -->

                                        <div class="account-form">

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

                                            <form class="login_form" method="POST" action="{{ route('login_validate') }}">

                                               {{csrf_field()}}

                                                <div class="row">

                                                    <div class="feild col-md-12">

                                                        <input type="text" placeholder="Username" name="user" required/>

                                                    </div>

                                                    <div class="feild col-md-12">

                                                        <input type="password" placeholder="Password" name="pwd" required/>

                                                    </div>

                                                    <div class="feild col-md-12">

                                                        <div class="text-center">
                                                            <input type="submit" value="Login" class="custom-btn"/>
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

                </div>

            </div>



        </div><!-- Account Sec -->

    </div>



</div><!-- Main Content -->



<!-- Vendor: Javascripts -->

<script src="{{url('/')}}/assest/js/jquery-2.1.3.js"></script>

<script src="{{url('/')}}/assest/js/bootstrap.min.js"></script>



<!-- Our Website Javascripts -->

</body>

</html>