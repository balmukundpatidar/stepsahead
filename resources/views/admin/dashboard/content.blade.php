@extends('admin.layouts.admin')
@section('content')
    <div id="page-wrapper">
        <!-- BEGIN PAGE HEADING ROW -->
        <div class="row">
            <div class="col-lg-12">

                <div class="page-header title">
                    <!-- PAGE TITLE ROW -->
                    <h1>Dashboard <span class="sub-title">Content Overview</span></h1>
                </div>

            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron position-relative bordered white padding-2x">
                    <h3>Welcome to Admin Panel</h3>

                    {{--<p>This is a template for a simple marketing or informational website. It includes a large callout--}}
                        {{--called a jumbotron and three supporting pieces of content. Use it as a starting point to create--}}
                        {{--something more unique.</p>--}}
                </div>
                <!-- START YOUR CONTENT HERE -->
                <div class="row">
                    <div class="col-lg-9 col-sm-12">

                    </div>
                    <!-- //col-lg-9 -->

                    <div class="col-lg-3 col-sm-12">

                    </div>
                    <!-- //col-lg-3 -->
                </div>
                <!-- END YOUR CONTENT HERE -->

            </div>
            <div class="col-lg-9 col-sm-12">

                <div class="row">

                    <div class="col-lg-4 col-sm-4">
                        <a href="#" class="tile-button btn btn-primary">
                            <div class="tile-content-wrapper">
                                <i class="fa fa-users"></i>
                                <div class="tile-content">
                                    {{$user}}
                                </div>
                                <small>
                                    New Signup
                                </small>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-sm-4">
                        <a href="#" class="tile-button btn btn-inverse">
                            <div class="tile-content-wrapper">
                                <i class="glyphicon glyphicon-gift"></i>
                                <div class="tile-content">
                                    {{$jobs}}
                                </div>
                                <small>
                                    Jobs
                                </small>
                            </div>
                        </a>
                    </div>


                    <div class="col-lg-4 col-sm-4">
                        <a href="#" class="tile-button btn btn-white">
                            <div class="tile-content-wrapper">
                                <i class="fa fa-warning text-primary"></i>
                                <div class="tile-content text-primary">
                                    {{$Activejobs}}
                                </div>
                                <small>
                                    Active Jobs
                                </small>
                            </div>
                        </a>
                    </div>


                </div>
                <div class="portlet">
                    <div class="portlet-heading dark">
                        <div class="portlet-title">
                            <h4><i class="fa fa-comments"></i> Testimonial</h4>
                        </div>
                        <div class="portlet-widgets">
                            <span class="divider"></span>
                            <a data-toggle="collapse" data-parent="#accordion" href="#i-chat"><i class="fa fa-chevron-down"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="i-chat" class="panel-collapse collapse in">
                        <div class="portlet-body">
                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 195px;"><div class="in-chat" style="overflow: hidden; width: auto; height: 195px;">
                                    @foreach($testimonial as $testi)
                                    <div class="itemdiv dialogdiv">
                                        <div class="user">
                                            <img alt="" src="assets/images/user-profile-1.jpg">
                                        </div>

                                        <div class="body">
                                            {{--<div class="time">--}}
                                                {{--<i class="fa fa-clock-o"></i> 4 sec--}}
                                            {{--</div>--}}

                                            <div class="name">
                                                <a href="#">{{$testi->testi_title}}</a>
                                            </div>
                                            <div class="text">{{$testi->testi_desc}}</div>

                                            <div class="tools">
                                                <a href="#" class="btn btn-xs btn-primary">
                                                    <i class="icon-only fa fa-share"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                        @endforeach

                                </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 110.217px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-sm-12">
                <!-- Mini Calendar -->
                <div class="portlet hidden-widgets">
                    <div class="portlet-heading inverse">
                        <div class="portlet-title">
                            <h4><i class="fa fa-calendar"></i> Calendar</h4>
                        </div>
                        <div class="portlet-widgets">
                            <a data-toggle="collapse" data-parent="#accordion" href="#mini-calendar"><i class="fa fa-chevron-down"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="mini-calendar" class="panel-collapse collapse in">
                        <div class="portlet-body">
                            <div id="minicalendar"></div>

                            <div class="space-8"></div>

                        </div>
                    </div>
                </div>
                <!-- End Mini Calendar -->


            </div>
        </div>
        @push('scripts')
            {{--<link rel="stylesheet" href="{{url('')}}/assets/css/plugins/bootstrap-datepicker/datepicker.css">--}}
            <script src="{{url('')}}/assets/js/plugins/daterangepicker/daterangepicker.js"></script>
            <script src="{{url('')}}/assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
            <script>
            $('#minicalendar').datepicker();
        </script>

        @endpush
@endsection