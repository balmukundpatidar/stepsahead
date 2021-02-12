@extends('job.layout.layout')



@section('content')

    <!-- Start All Pages Title -->



    <div class="page-title-main services">



        <div class="container">



            <div class="clearfix">



                <div class="title-all text-center">



                   <!--  <h2>News Details</h2> -->



                </div>



            </div>



        </div>



    </div>



    <!-- End All Pages Title -->



    </div>



    <!-- End Header -->

<section class="agency" style="background-image: url('https://dev.stepsaheadsupport.co.uk/jobs/images/1593536023_agency-bg.png');">
            <div class="container">
                <div class="heading-05 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <h1>News</h1>
                </div>
            </div>
        </section>
    <!-- Start Blog Details -->

    <div class="sec blog-details-main">

        <div class="container">

            <div class="row">
                <div class="col-xl-8 col-lg-8 col-12 col-md-12">

                    <div class="blog-inner-details-page">

                        <div class="blog-inner-box">

                            <div class="side-blog-img">

                                <img src="{{url('/')}}/uploads/news/{{$data->news_image}}" alt="" />

                                <div class="date-blog-up">

                                    <?php

                                    $timestamp = strtotime($data->created_at);

                                    $newDate = date('d', $timestamp);

                                    echo $newDate;

                                    ?></b>

                                    <?php

                                    $timestamp = strtotime($data->created_at);

                                    $newDate = date('F', $timestamp);

                                    echo $newDate;

                                    ?>

                                </div>

                            </div>

                            <div class="inner-blog-detail details-page">

                                <h3>{{$data->news_title}}</h3>

                                {{--<ul>--}}

                                    {{--<li><i class="zmdi zmdi-account"></i>Posted By : <span>Rubel Ahmed</span></li>--}}

                                    {{--<li>|</li>--}}

                                    {{--<li><i class="zmdi zmdi-time"></i>Time : <span>11.30 am</span></li>--}}

                                {{--</ul>--}}

                              {!! $data->news_desc !!}

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-12 blog-sidebar">

                    <div class="right-side-blog">

                        <h3>Recent Post</h3>

                        <div class="post-box-blog">

                            <div class="recent-post-box">
                                @foreach($newss as $news)

                                   

                                <div class="recent-box-blog">
 <a href="{{route('news_details',['id'=>$news->slug])}}">
                                    <div class="recent-img">

                                        <img src="{{url('/')}}/uploads/news/{{$news->news_image}}" alt="" height="80"/>

                                    </div>
</a>
                                    <div class="recent-info">
 <a href="{{route('news_details',['id'=>$news->slug])}}">
                                        <h3>{{$news->news_title}}</h3>
</a>
                                        <p>{{substr(strip_tags($news->news_desc),0,50) }}</p>

                                    </div>

                                </div>

                            

                                    @endforeach

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- End Blog Details -->



@stop