@extends('job.layout.layout')

@if($page)

@section('meta-title'){!! $page->seo_keyword !!} @stop



@section('meta-description'){!! $page->seo_description !!}  @stop

@endif

@section('content')





    <!-- End All Pages Title -->



    </div>



    <!-- End Header -->
        <section class="agency" style="background-image: url('{{url('/')}}/uploads/pages/CdgXMX_1606316279_imgpsh_fullsize_anim.jpg');">
            <div class="container">
                <div class="heading-05 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <h1>News</h1>
                </div>
            </div>
        </section>
    <!-- Start Blog Grid 2 -->
<section class="sec sec-news-diff">
    <div class="blog-main">

        <div class="container">

            <div class="row">

                @foreach($news as $new)

                <div class="col-lg-4 col-md-6 col-12">

                    <div class="news-box">

                        <div class="news-img">

                            <img src="{{url('/')}}/uploads/news/{{$new->news_image}}" alt="" />

                            <div class="date-blog-up">

                                <?php

                                $timestamp = strtotime($new->created_at);

                                $newDate = date('d', $timestamp);

                                echo $newDate;

                                ?></b>

                                <?php

                                $timestamp = strtotime($new->created_at);

                                $newDate = date('F', $timestamp);

                                echo $newDate;

                                ?>

                            </div>

                            <div class="opacity blog-2d"><span><a href="{{route('news_details',['id'=>$new->slug])}}"><i>+</i></a></span></div>

                        </div>

                        <div class="news-text">

                            <h3>
                    <a href="">
                            {{$new->news_title}}

                  </a></h3>
        <div class="news-btn">
            <a href="{{route('news_details',['id'=>$new->slug])}}" class="custom-btn">read more</a>
        </div>
                             
                        </div>

                    </div>

                </div>

                @endforeach

                <div class="col-lg-12" style="text-align: center">



                    {{--<div class="pagination-box">--}}

                        {{--<div class="pagination-wrap">--}}

                            {{$news->render()}}

                        {{--</div>--}}

                    {{--</div>--}}

                </div>

            </div>

        </div>

    </div>
</section>
    <!-- End Blog Grid 2 -->

    @stop