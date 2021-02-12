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
    <link rel="stylesheet" href="{{url('/')}}/jobs/font-awesome/css/font-awesome.css" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{url('/')}}/jobs/images/favicon.ico" type="image/x-icon" />

    <link rel="apple-touch-icon" href="{{url('/')}}/jobs/images/apple-touch-icon.html">

    <link rel="stylesheet" href="{{url('/')}}/jobs/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{url('/')}}/jobs/js/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">

    <link rel="stylesheet" href="{{url('/')}}/jobs/js/revolution/css/settings.css">

    <link rel="stylesheet" href="{{url('/')}}/jobs/js/revolution/css/layers.css">

    <link rel="stylesheet" href="{{url('/')}}/jobs/js/revolution/css/navigation.css">

    <link rel="stylesheet" href="{{url('/')}}/jobs/css/style.css">

    <link rel="stylesheet" href="{{url('/')}}/jobs/css/responsive.css">

    <link rel="stylesheet" href="{{url('/')}}/jobs/step/css/jquery.steps.css">

    <script src="{{url('/')}}/jobs/js/modernizer.js"></script>

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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119901905-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119901905-1');
</script>
</head>

<body>

<!-- Start Preloader  -->

<div id="preloader">

    <div id="loader">

        <div id="shadow"></div>

        <div id="box"></div>

    </div>

</div>

<!-- Start Preloader  -->

<!-- Start Top Bar -->

<div class="top-bar d-none d-md-block">

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

                            <button class="dropbtn">Follow Us <i class="fa fa-sort-down"></i></button>

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

                        {{--<nav>--}}

                            {{--<div class="menu-toggle">--}}

                                {{--<h3>Menu</h3>--}}

                                {{--<button class="" type="button" id="menu-btn">--}}

                                    {{--<span class="icon-bar"></span>--}}

                                    {{--<span class="icon-bar"></span>--}}

                                    {{--<span class="icon-bar"></span>--}}

                                {{--</button>--}}

                            {{--</div>--}}

                            {{--<ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">--}}

                                {{--<li><a href="{{url('/')}}" class="{{ Request::is('/') ? 'active' : '' }}"><span class="title">Home</span></a></li>--}}

                                {{--<li><a href="{{url('about')}}" class="{{ Request::is('about') ? 'active' : '' }}"><span class="title">About Us</span></a></li>--}}

                                {{--<li><a href="{{url('services')}}" class="{{ Request::is('services') ? 'active' : '' }}"><span class="title">Our Services</span></a></li>--}}

                                {{--<li><a href="{{url('careers')}}" class="{{ Request::is('careers') ? 'active' : '' }}"><span class="title">Careers</span></a></li>--}}

                                {{--<li class="last"><a href="{{url('contact')}}" class="{{ Request::is('contact') ? 'active' : '' }}"><span class="title">Contact Us</span></a></li>--}}

                                {{--<li><a href="#."><span class="title">Download</span></a></li>--}}

                                {{--@if(Auth::check())--}}

                                    {{--@if(Auth::user()->user_type!='Admin')--}}

                                        {{--<li><a href="{{url('employee/dashboard')}}" class="{{ Request::is('employee/dashboard') ? 'active' : '' }}"><span class="title">Profile</span></a></li>--}}

                                    {{--@endif--}}

                                    {{--<li><a href="{{url('logout')}}"><span class="title">Sign Out</span></a></li>--}}

                                {{--@else--}}

                                    {{--<li><a href="{{url('my-application')}}"><span class="title">Sign In</span></a></li>--}}


                                {{--@endif--}}


                            {{--</ul>--}}

                        {{--</nav>--}}
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
                                        @if (count($data_sub_menu))
                                            <a> <span class="title">{{$menu->menu_name}}</span></a>
                                        @else
                                            <a href="{{route('pages',['id'=>$page_url])}}"><span class="title">{{$menu->menu_name}}</span></a>
                                        @endif
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

    @include('job.layout.footer')

   

    <!-- All Js Files -->

    <script src="{{url('/')}}/jobs/js/all.js"></script>





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



    <script>



        $(function () {



            $("#wizard").steps({



                headerTag: "h2",



                bodyTag: "section",



                transitionEffect: "slideLeft"



            });



        });



    </script>



    <!-- End Revolution Slider Extensions -->

    <!-- All Plugins -->

    <script src="{{url('/')}}/jobs/js/custom.js"></script>

</body>

</html>

