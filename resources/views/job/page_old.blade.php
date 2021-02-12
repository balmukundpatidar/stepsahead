@extends('job.layout.layout')

@if($page)

@section('meta-title'){!! $page->seo_keyword !!} @stop



@section('meta-description'){!! $page->seo_description !!}  @stop

@endif

@section('content')



    <!-- Start All Pages Title -->



    <div class="page-title-main about-us">



        <div class="container">



            <div class="clearfix">



                <div class="title-all text-center">



                    <h2>About Us</h2>



                </div>



            </div>



        </div>



    </div>



    <!-- End All Pages Title -->



    </div>



    <!-- End Header -->



    <!-- Start About Us -->



    <div class="inner-page-about about">

        @if($page)

        <div class="container">



            <div class="row vertical-centre">



                <div class="col-lg-6 col-md-6 col-sm-12">



                    <div class="left-about">



                     {!! $page->page_desc !!}



                        <div class="clearfix">



                        </div>



                    </div>



                </div>



                <div class="col-lg-6 col-md-6 col-sm-12">



                    <div class="right-about vertical-centre">



                        <img src="{{url('/')}}/uploads/pages/{{$page->page_img}}" alt=""/>



                    </div>



                </div>



            </div>



        </div>



        @endif

        <div class="grey-bg about">



            <div class="container">



                <div class="row vertical-centre">



                    <div class="col-lg-6 col-md-6 col-sm-12">



                        <div class="right-about vertical-centre">



                            <img src="{{url('/')}}/jobs/images/nurs.jpg" class="img-responsive"  alt="" />



                        </div>



                    </div>



                    <div class="col-lg-6 col-md-6 col-sm-12">



                        <div class="left-about">



                            <h5>Why work with Creek Recruit?</h5>



                            <p>At Creek Recruit, we thrive on the success of our candidates. As the lifeblood of our business, we place a meticulous focus on our candidate service delivery and aim to develop lasting relationships which help us to prove our worth as a lucrative career partner.</p>



                            <p>Whether you are an experienced carer/support RGN  worker or you are looking for a new career, Creek Recruit are looking for high calibre personnel to join our agency.</p>



                            <div class="clearfix">



                            </div>



                        </div>



                    </div>



                </div>



            </div>



        </div>



    </div>



    <!-- End About Us -->







    @stop