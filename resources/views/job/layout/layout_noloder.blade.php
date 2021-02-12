<!doctype html>



<html lang="en">



<head>



    <!-- Basic -->



    <meta charset="utf-8">



    <meta http-equiv="X-UA-Compatible" content="IE=edge">



    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <title>creekrecruit - @yield('meta-title')</title>



    <meta name="keywords" content="@yield('meta-title')">



    <meta name="description" content="@yield('meta-description')">



    <meta name="author" content="">



    <link rel="shortcut icon" href="{{url('/')}}/jobs/images/favicon.ico" type="image/x-icon" />



    <link rel="apple-touch-icon" href="{{url('/')}}/jobs/images/apple-touch-icon.html">



    <link rel="stylesheet" href="{{url('/')}}/jobs/css/bootstrap.min.css">



    <link rel="stylesheet" href="{{url('/')}}/jobs/js/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">



    <link rel="stylesheet" href="{{url('/')}}/jobs/js/revolution/css/settings.css">



    <link rel="stylesheet" href="{{url('/')}}/jobs/js/revolution/css/layers.css">



    <link rel="stylesheet" href="{{url('/')}}/jobs/js/revolution/css/navigation.css">



    <link rel="stylesheet" href="{{url('/')}}/jobs/css/style.css">

    <link href="{{ url('jobs/css/datepicker.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="{{url('/')}}/jobs/css/responsive.css">



    <link rel="stylesheet" href="{{url('/')}}/jobs/step/css/jquery.steps.css">



    <script src="{{url('/')}}/jobs/js/modernizer.js"></script>



    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>







    <style>



        .dropbtn {



            color: white;



            border: none;



            background-color: transparent;



            cursor: pointer;



        }



        .slider-section .tp-bannertimer {



            display: none;



        }



        .dropdown {



            position: relative;



            display: inline-block;



        }



        .dropdown-content {



            display: none;



            position: absolute;



            background-color: #f1f1f1;



            min-width: 50px;



            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);



            z-index: 1;



            right: -15px



        }



        .dropdown-content a {



            color: #f15a23 !important;



            padding: 15px 14px 8px 6px;



            text-decoration: none;



            /*display: block;*/



            width: 100%;



            /*float: left;*/



            text-align: center;



        }



        .dropdown-content a:hover {



            background-color: #ddd;



        }



        .dropdown:hover .dropdown-content {



            display: inline-flex;



        }



        .dropdown:hover .dropdown-content .zmdi {



            color: #f15a23;



            font-size: 23px;



        }



        /*.active{*/



            /*color: #f15a23 !important;*/



        /*}*/



        .btn, button {



            color: #fff;



            background-color: #f15a23;



            border-color: #f15a23 !important;



        }



    </style>



</head>



<body>



<div class="top-bar d-none d-md-block">
    <center>
        <div id="image_loader" style="display:none;">
            <img src="{{ url('images/200_d.gif') }}">
        </div>
    </center>


    <div class="container">



        <div class="row">



            <div class="col-lg-8 col-md-8 col-sm-8">



                <div class="top-box-icon clearfix">



                    <ul>



                        <li><i class="zmdi zmdi-email-open"></i> <a href="mailto:info@creekrecruit.com">info@creekrecruit.com</a></li>



                        <li><i class="zmdi zmdi-phone-in-talk"></i> <a href="#">0333 222 4027</a></li>



                        <!--<li><i class="zmdi zmdi-google-maps"></i><p>Room 1, Juniper Suite, Kebbel House,Carpenders Park,Watford.</p></li>-->



                    </ul>



                </div>



            </div>



            <div class="col-lg-4 col-md-4 col-sm-4">



                <div class="permanentDetails">



                    <div class="with_fa follow_link ">



                        <div class="dropdown">



                            <button class="dropbtn">Follow</button>



                            <div class="dropdown-content">



                                <a target="_blank" href="https://www.facebook.com/pg/creekrecruit11/notes/"><i class="zmdi zmdi-facebook-box"></i></a>



                                <a target="_blank" href="https://www.instagram.com/creekrecruit/"><i class="zmdi zmdi-instagram"></i></a>



                                <a target="_blank" href="https://www.linkedin.com/company/creekrecruit/"><i class="zmdi zmdi-linkedin"></i></a>



                            </div>



                        </div>



                        <!--<a>Follow<i class="fa fa-caret-down" aria-hidden="true"></i></a>-->



                        <!--<div class="follow_links_box_wap">



                            <section class="follow_links_box">



                                <div class="social_icons">



                                    <a href="/action-for-business/news/"><i class="fa fa-rss" aria-hidden="true"></i></a>



                                    <a href="https://www.facebook.com/dev0nchamber/" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>



                                    <a href="https://twitter.com/Chamber_Devon" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>



                                    <a href="https://www.linkedin.com/groups/3336510/profile" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>



                                </div>



                            </section>



                        </div>-->



                    </div>



                </div>



                <!--<div class="top-box-icon social">



                    <a href="#"><i class="zmdi zmdi-facebook"></i></a>



                    <a href="#"><i class="zmdi zmdi-twitter"></i></a>



                    <a href="#"><i class="zmdi zmdi-google-plus"></i></a>



                    <a href="#"><i class="zmdi zmdi-pinterest"></i></a>



                    <a href="#"><i class="zmdi zmdi-skype"></i></a>



                </div>-->



            </div>



        </div>



    </div>



</div>



<!-- End Top Bar -->



<!-- Start Header -->



<div class="header top-head">



    <!-- Start Header Area -->



    <div id="nav-bar" class="header-area">



        <div class="container">



            <div class="head-nav-bar vertical-centre clearfix">



                <div class="float-left">



                    <div class="logo">



                        <a href="/"><img src="{{url('/')}}/jobs/images/logo.png" alt="" /></a>



                    </div>



                </div>



                <div class="float-right full-width">



                    <div class="nav-box-right">



                        <nav>



                            <div class="menu-toggle">



                                <h3>Menu</h3>



                                <button class="" type="button" id="menu-btn">



                                    <span class="icon-bar"></span>



                                    <span class="icon-bar"></span>



                                    <span class="icon-bar"></span>



                                </button>



                            </div>



                            <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">



                                {{--<li>--}}



                                {{--<a href="index-2.html"><span class="title">Home</span></a>--}}



                                {{--<ul>--}}



                                {{--<li><a href="index-2.html">Home 1</a></li>--}}



                                {{--<li><a href="index-3.html">Home 2</a></li>--}}



                                {{--<li><a href="index-4.html">Home 3</a></li>--}}



                                {{--</ul>--}}



                                {{--</li>--}}



                                <?php



                                use Illuminate\Support\Facades\DB;



                                $data = DB::table('menu')->where('parent_id',0)->orderBy('menu_position')->get();



                                ?>



                                @foreach($data as $menu)



                                    <?php



                                    $page_url = DB::table('pages')->where('id',$menu->page_id)->value('page_url');



                                    $COUNT = DB::table('menu')->where('parent_id',$menu->id)->count();



                                    if($COUNT>0){



                                    $data_sub_menu = DB::table('menu')->where('parent_id',$menu->id)->orderBy('menu_position')->get();



                                    ?>



                                    <li class="{{ Request::is($page_url) ? 'active' : '' }}">



                                        <a href="{{route('pages',['id'=>$page_url])}}"><span class="title">{{$menu->menu_name}}</span></a>



                                        <ul>



                                            @foreach($data_sub_menu as $sub_menu)



                                                <?php



                                                $page_url_sub_menu = DB::table('pages')->where('id',$sub_menu->page_id)->value('page_url');



                                                ?>



                                                <li><a href="{{route('pages',['id'=>$page_url_sub_menu])}}">{{$sub_menu->menu_name}}</a></li>



                                            @endforeach



                                        </ul>



                                    </li>







                                    <?php



                                    }



                                    else{



                                    $page_url = DB::table('pages')->where('id',$menu->page_id)->value('page_url');







                                    ?>



                                    <li class="{{ Request::is($page_url) ? 'active' : '' }}"><a href="{{route('pages',['id'=>$page_url])}}"><span class="title">{{$menu->menu_name}}</span></a></li>







                                    <?php



                                    }



                                    ?>



                                @endforeach











                                @if(Auth::check())



                                    @if(Auth::user()->user_type!='Admin')



                                        <li><a href="{{url('employee/dashboard')}}" class="{{ Request::is('employee/dashboard') ? 'active' : '' }}"><span class="title">Profile</span></a></li>



                                    @endif



                                    <li><a href="{{url('logout')}}"><span class="title">Sign Out</span></a></li>



                                @else







                                    <li><a href="{{url('my-application')}}"><span class="title">Sign In</span></a></li>







                                @endif



                            </ul>



                        </nav>



                    </div>



                </div>



            </div>



        </div>



    </div>



    <!-- End Header Area -->



    @yield('content')



<!-- Start Time -->



    <div class="top-box-time">



        <i class="zmdi zmdi-time"></i><p>Office Hours Mon - Fri 9.00 - 17.00</p>



    </div>



    <!-- End Our Partner -->



    <div class="our-partner-mains">



        <div class="container">



            <div class="clearfix">



            </div>



            <div class="row">



                <div class="col-lg-12">



                    <div class="box-contact-right-form">



                        <h3 style="color:#fff;">GET IN TOUCH WITH US</h3>



                        <div id="msg"></div>



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



                        <form id="contact-form" class="contact-right-form" method="post" action="{{route('store_contact')}}">



                           {{csrf_field()}}



                            <div class="row clearfix">



                                <div class="form-group col-md-4">



                                    <input name="title"  placeholder="Title" required>



                                </div>



                                <div class="form-group col-md-4">



                                    <input name="first_name" placeholder="First Name" required>



                                </div>



                                <div class="form-group col-md-4">



                                    <input name="last_name" placeholder="Last Name" required>



                                </div>



                                <div class="form-group col-md-12">



                                    <input name="company"  placeholder="Organisation Or Business" required>



                                </div>



                                <div class="form-group col-md-6">



                                    <input name="number"  placeholder="Contact Number" required>



                                </div>



                                <div class="form-group col-md-6">



                                    <input name="email" placeholder="Email" required>



                                </div>



                                <div class="form-group col-md-12">



                                    <textarea name="comment"  placeholder="Message"></textarea>



                                </div>



                                <div class="form-group col-md-5">



                                </div>



                                <div class="form-group col-md-5">



                                    <button id="submit_contact" type="submit" class="theme-btn btn-style-one button-wayra-a">Submit</button>



                                </div>



                            </div>



                        </form>



                    </div>



                </div>



            </div>



        </div>



    </div>



    <!-- Start Time -->



    <div class="footer-main">



        <div class="container">



            <div class="row">



                <div class="col-lg-3 col-sm-6">



                    <div class="widget-footer">



<div class="footer-description">

                            <h3 class="footer-header">Head Office</h3>

                            <p>Creek Recruit,<br>

                                Room 1, Juniper Suite, Kebbel House,<br>

                                Carpenders Park, Watford<br>

                                WD19 5EF</p><br>

                            <p>Tel: 0333 222 4027<br>

                                Email: info@creekrecruit.com</p>

                        </div>


                    </div>



                </div>



                <div class="col-lg-3 col-sm-6">



                    <div class="widget-footer">



<div class="footer-description">

                            <h3 class="footer-header">Southwest Office</h3>

                            <p>Creek Recruit,<br>

                                Unit 37,<br>
                                City Business Park.<br>

                                Somerset Place, Plymouth<br>

                                PL3 4BB</p><br>

                            <p>Tel: 0333 222 4027<br>

                                Email: info@creekrecruit.com</p>

                        </div>


                    </div>



                </div>



                <div class="col-lg-3 col-sm-6">



                    <div class="widget-footer-nav">



                        <h3 class="footer-header">Website</h3>



                        <ul>



                            <p class="foots"><a href="{{url('/')}}">Home</a></p>



                            <p class="foots"><a href="{{url('services')}}">Services</a></p>



                            <p class="foots"><a href="{{url('careers')}}">Careers</a></p>



                            <p class="foots"><a href="{{url('about')}}">About</a></p>



                            <p class="foots"><a href="{{url('contact')}}">Contact</a></p>



                        </ul>



                        <p class="foots"><a href="{{route('pages',['id'=>'privacy-policy'])}}">Privacy Policy</a></p>



                    </div>



                </div>



                <div class="col-lg-3 col-sm-6">



                    <div class="">



                        <div class="footer-logo">



                            <img src="images/footer-logo.png" alt="" />



                        </div>



<div class="footer-socials">

                            <ul>

                                <li><a target="_blank" href="https://www.facebook.com/pg/creekrecruit11/notes/"><i class="zmdi zmdi-facebook"></i></a></li>

                                <li><a href="https://www.instagram.com/creekrecruit/" target="_blank"><i class="zmdi zmdi-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/creekrecruit/" target="_blank"><i class="zmdi zmdi-linkedin"></i></a></li>

                                <!--<li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>

                                <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>

                                <li><a href="#"><i class="zmdi zmdi-skype"></i></a></li>-->

                            </ul>

                        </div>






                    </div>



                </div>

                <p style="color:#fff; text-align:center; margin: 0 auto;">&copy; Copyright <?php echo date('Y'); ?> Creek Investments Ltd. Registration: 8053966. Vat No. 244137131 </p>



            </div>



        </div>



        <!--<div class="copyright-main">



            <div class="container">



                <div class="copyright">



                    <p><a href="http://xtoreapp.com/" target="_blank" rel="noopener noreferrer">Developed & Maintain by </a> Xtoreapp.com</p>



                </div>



            </div>



        </div>-->



    </div>



    <!-- End Footer -->



    <a href="#" id="scroll-to-top" title="Scroll to top"><i class="zmdi zmdi-chevron-up"></i></a>



    <!-- All Js Files -->



    {{--<script src="{{url('/')}}/jobs/js/all.js"></script>--}}







@stack('script_top')



    {{--<link href="{{url('/')}}/jobs/css/ace-responsive-menu.css" rel="stylesheet">--}}







    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



    <script src="{{url('/')}}/jobs/js/ace-responsive-menu.js"></script>



    <!-- Revolution Js Files -->



    <script src="{{url('/')}}/jobs/js/revolution/js/jquery.themepunch.tools.min.js"></script>



    <script src="{{url('/')}}/jobs/js/revolution/js/jquery.themepunch.revolution.min.js"></script>



    <script src="{{url('/')}}/jobs/js/slider-setting.js"></script>



    <!-- Slider Revolution 5.0 Extensions -->



    <script src="{{url('/')}}/jobs/js/revolution/js/extensions/revolution.extension.actions.min.js"></script>



    <script src="{{url('/')}}/jobs/js/revolution/js/extensions/revolution.extension.carousel.min.js"></script>



    <script src="{{url('/')}}/jobs/js/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>



    <script src="{{url('/')}}/jobs/js/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>



    <script src="{{url('/')}}/jobs/js/revolution/js/extensions/revolution.extension.migration.min.js"></script>



    <script src="{{url('/')}}/jobs/js/revolution/js/extensions/revolution.extension.navigation.min.js"></script>



    <script src="{{url('/')}}/jobs/js/revolution/js/extensions/revolution.extension.parallax.min.js"></script>



    <script src="{{url('/')}}/jobs/js/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>



    <script src="{{url('/')}}/jobs/js/revolution/js/extensions/revolution.extension.video.min.js"></script>



    <script src="{{url('/')}}/jobs/step/lib/jquery.steps.js"></script>


    <script src="{{ url('js/library/bootstrap-datepicker.js') }}"></script>
    <script src="{{ url('js/library/jquery.validate.js') }}"></script>
    <script src="{{ url('js/library/jquery.validate.additional.methods.js') }}"></script>
    <script src="{{ url('js/registration.js') }}"></script>



<script type="text/javascript">



    /* =========/=========/=========/=========/=========/=========/=========



			Responsive Menu



		=========/=========/=========/=========/=========/=========/========= */







    $(document).ready(function () {



        $("#respMenu").aceResponsiveMenu({



            resizeWidth: '768',



            animationSpeed: 'fast',



            accoridonExpAll: false



        });



    });







    /* =========/=========/=========/=========/=========/=========/=========



        AddClass (current)



    =========/=========/=========/=========/=========/=========/========= */







    $('.menu-toggle button').on('click',function(){



        if ( $(this).hasClass('current') ) {



            $(this).removeClass('current');



        } else {



            $('button.current').removeClass('current');



            $(this).addClass('current');



        }



    });



</script>







    <!-- End Revolution Slider Extensions -->



    <!-- All Plugins -->



    {{--<script src="{{url('/')}}/jobs/js/custom1.js"></script>--}}







@stack('scripts')



</body>



</html>



