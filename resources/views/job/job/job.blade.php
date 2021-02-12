@extends('job.layout.layout_noloder')

@if($page)

@section('meta-title'){!! $page->seo_keyword !!} @stop



@section('meta-description'){!! $page->seo_description !!}  @stop

@endif

@section('content')

    @inject('cn','App\Common\Helper')

    <link rel="stylesheet" href="{{url('/')}}\jobs\font-awesome\css\font-awesome.css">

    <style>

        /* Style the tab */

        .tab {

            /*float: left;

            border: 1px solid #E5E5E5;

            background-color: #f9f9f7;

            width: 100%;

            height: 300px;*/

        }



        /* Style the buttons inside the tab */

        .tab button {

            display: block;

            background-color: inherit;

            color: black;

            padding: 12px 16px;

            width: 100%;

            /*border: none;*/

            outline: none;

            text-align: left;

            cursor: pointer;

            transition: 0.3s;

            font-size: 17px;

        }



        /* Change background color of buttons on hover */

        .tab button:hover {

            background-color: #f15a23;
			color: #fff;

        }



        /* Create an active/current "tab button" class */

        .tab button.active {

            background-color: #ccc;

        }



        /* Style the tab content */

        .tabcontent {

            /*float: left;*/

            padding: 0px 12px;

            border: 1px solid #ccc;

            width: 70%;

            border-left: none;

            height: 300px;

        }

        .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {

            z-index: 3;

            color: #fff;

            cursor: default;

            background-color: #f15a23;

            border-color: #f15a23;

        }

        .pagination>li>a, .pagination>li>span {

            position: relative;

            float: left;

            padding: 6px 12px;

            margin-left: -1px;

            line-height: 1.42857143;

            color: #f15a23;

            text-decoration: none;

            background-color: #fff;

            border: 1px solid #ddd;

        }

        .btn-label {position: relative;left: -12px;display: inline-block;padding: 6px 12px;background: rgba(0,0,0,0.15);border-radius: 3px 0 0 3px;}

        .btn-labeled {padding-top: 0;padding-bottom: 0;}

        .btn { margin-bottom:10px; }

    </style>



    </div>

    <!--

    <!-- Start About Us -->

    <br>



    {{--<div class="container">--}}



    {{--<div>--}}

    {{--<a href="{{route('job_search_result',['id'=>1])}}" type="button" class="btn btn-labeled btn-warning pull-right" style="background-color:#F15A23;color:white;border:solid 1px #F15A23;; ">--}}

    {{--<span class="btn-label"><i class="fa fa-user" style="color:white;"></i></span>--}}

    {{--Join our team</a>--}}

    {{--</div>--}}





    {{--</div>--}}

    {{--<br><br>--}}

    <div class="container">

        <div class="row">

            <div class="col-md-3" style="padding-top: 50px">

                <div class="tab">

                    <a href="/careers"> <button class="tablinks">All Jobs</button></a>

                    <a href="{{route('job_search_result',['id'=>1])}}"> <button class="tablinks">Care & Support Jobs</button></a>

                    <a href="{{route('job_search_result',['id'=>2])}}"><button class="tablinks">Office & Other Vacancies</button></a>

                </div>

            </div>

            <div class="col-md-9" style="padding-top: 50px">



                <div class="container">

                    @if(count($jobs)>0)

                        <div class="col-md-12">

                            @foreach($jobs as $job)

                                <a href="{{route('job_details',['id'=>$job->id])}}"> <h1>{{$job->job_title}}-<b>{{$cn->country_name($job->job_location)}}</b></h1></a>

                                <p>{{ substr(strip_tags(html_entity_decode($job->job_description)),0,200) }}</p>



                                <a href="{{route('job_details',['id'=>$job->slug])}}" class="btn">Read More</a>



                                <div>

                                    {{--<span class="badge">Posted 2012-08-02 20:47:04</span>--}}

                                    {{--<div class="pull-right">--}}

                                    {{--<span class="label label-default">alice</span> --}}

                                    {{--<span class="label label-primary">story</span> --}}

                                    {{--<span class="label label-success">blog</span> --}}

                                    {{--<span class="label label-info">personal</span> --}}

                                    {{--<span class="label label-warning">Warning</span>--}}

                                    {{--<span class="label label-danger">Danger</span>--}}

                                    {{--</div>--}}

                                </div>

                                <hr>

                            @endforeach

                            <div>

                            </div>

                            {{--<hr>--}}

                        </div>

                        <div>

                            {{ $jobs->links() }}

                        </div>

                    @else

                        There are currently no vacancies listed, please check again soon for any new vacancies that arise.

                    @endif

                </div>

            </div>

        </div>



    </div>



    <br>



@stop