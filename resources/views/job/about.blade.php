@extends('job.layout.layout')
@if($aboutInfo)
@section('meta-title'){!! $aboutInfo->seo_keyword !!} @stop
@section('meta-description'){!! $aboutInfo->seo_description !!}  @stop
@endif
@section('content')
   <!-- main -->
    <main>
        <!-- hero banner -->
        <?php
         if($aboutInfo->banner_image != '') {
            $url = 'images/'.$aboutInfo->banner_image;
         } else {
            $url = 'img/about-bg.jpg';
         }
         ?>
        <section class="agency" style="background-image: url('{{url('/')}}/jobs/{{$url}}');">
            <div class="container">
                <div class="heading-05 wow fadeIn">
                    <h1>{{$aboutInfo->title}}</h1>
                </div>
            </div>
        </section>

        <!-- about info -->
        <section class="sec-about-info bg-white">
            <div class="container wow fadeInDown">
                <h4 class="heading-04 text-color-black">
                {!! $aboutInfo->description !!}
                </h4>
            </div>
        </section>
        <!-- Recruitment and Independence -->
        <section class="sec-recruitment  agency-main-sec">
            <div class="row no-gutters">
                <div class="col-md-6  wow fadeInLeft">
                    <div class="recruit-text bg-pink text-color-white">
                    {!! $aboutInfo->text_1 !!}
                    </div>
                </div>
                <div class="col-md-6  wow fadeInRight">
                    <div class="recruit-img care-quality">
                    <?php
                        if($aboutInfo->image_1 != '') {
                            $img1 = 'images/'.$aboutInfo->image_1;
                        } else {
                            $img1 = 'img/add.jpg/';
                        }
                    ?>
                        <img src="{{url('/')}}/jobs/{{$img1}}" alt="" />
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6  wow fadeInRight">
                    <div class="recruit-text bg-white">
                        <div class="heading-01">
                        </div>
                        {!! $aboutInfo->text_2 !!}
                    </div>
                </div>
                <div class="col-md-6  wow fadeInLeft">
                    <div class="recruit-img">
                    <?php
                        if($aboutInfo->image_2 != '') {
                            $img2 = 'images/'.$aboutInfo->image_2;
                        } else {
                            $img2 = 'img/add.jpg/';
                        }
                    ?>
                        <img src="{{url('/')}}/jobs/{{$img2}}" alt="" />                    </div>
                </div>
            </div>
        </section>
        <!-- Recruitment and Independence -->
        <!--[agency staff] -->
        <!--[User-Guide] -->
        <section class="sec user-guide">
            <div class="container">
                <div class="row  wow fadeInUp">
                    <div class="col-md-4">
                        <div class="document-wrapper">
                            <div class="file-icon">
                                <img src="{{url('/')}}/jobs/img/document.svg" alt="" />
                            </div>
                            <h5>{{$aboutInfo->pdf_1_title}}</h5>
                            <div class="news-btn">
                               @if($aboutInfo->pdf_1_url != '')
                                <a download href="{{url('/')}}/jobs/documents/{{$aboutInfo->pdf_1_url}}" class="custom-btn">Download</a>
                                @else
                                <a href="{{url('/')}}/jobs/img/document.svg" class="custom-btn">Download</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="document-wrapper">
                            <div class="file-icon">
                                <img src="{{url('/')}}/jobs/img/document.svg" alt="" />
                            </div>
                            <h5>{{$aboutInfo->pdf_2_title}}</h5>
                            <div class="news-btn">
                            @if($aboutInfo->pdf_2_url != '')
                                <a download href="{{url('/')}}/jobs/documents/{{$aboutInfo->pdf_2_url}}" class="custom-btn">Download</a>
                                @else
                                <a href="{{url('/')}}/jobs/img/document.svg" class="custom-btn">Download</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="document-wrapper">
                            <div class="file-icon">
                                <img src="{{url('/')}}/jobs/img/document.svg" alt="" />
                            </div>
                            <h5>{{$aboutInfo->pdf_3_title}}</h5>
                            <div class="news-btn">
                            @if($aboutInfo->pdf_3_url != '')
                                <a download href="{{url('/')}}/jobs/documents/{{$aboutInfo->pdf_3_url}}" class="custom-btn">Download</a>
                                @else
                                <a href="{{url('/')}}/jobs/img/document.svg" class="custom-btn">Download</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="document-wrapper">
                            <div class="file-icon">
                                <img src="{{url('/')}}/jobs/img/document.svg" alt="" />
                            </div>
                            <h5>{{$aboutInfo->pdf_4_title}}</h5>
                            <div class="news-btn">
                               @if($aboutInfo->pdf_4_url != '')
                                <a download href="{{url('/')}}/jobs/documents/{{$aboutInfo->pdf_4_url}}" class="custom-btn">Download</a>
                                @else
                                <a href="{{url('/')}}/jobs/img/document.svg" class="custom-btn">Download</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="document-wrapper">
                            <div class="file-icon">
                                <img src="{{url('/')}}/jobs/img/document.svg" alt="" />
                            </div>
                            <h5>{{$aboutInfo->pdf_5_title}}</h5>
                            <div class="news-btn">
                              @if($aboutInfo->pdf_5_url != '')
                                <a download href="{{url('/')}}/jobs/documents/{{$aboutInfo->pdf_5_url}}" class="custom-btn">Download</a>
                                @else
                                <a href="{{url('/')}}/jobs/img/document.svg" class="custom-btn">Download</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="document-wrapper">
                            <div class="file-icon">
                                <img src="{{url('/')}}/jobs/img/document.svg" alt="" />
                            </div>
                            <h5>{{$aboutInfo->pdf_6_title}}</h5>
                            <div class="news-btn">
                               @if($aboutInfo->pdf_6_url != '')
                                <a download href="{{url('/')}}/jobs/documents/{{$aboutInfo->pdf_6_url}}" class="custom-btn">Download</a>
                                @else
                                <a href="{{url('/')}}/jobs/img/document.svg" class="custom-btn">Download</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--[User-Guide] -->
        <section class="sec-about-info bg-pink">
            <div class="container  wow fadeInUp">
                {!! $contactInfo[0]->description !!}
            </div>
        </section>
        <!--[Our Partner] -->
        <section class="sec sec-our-partner">
            <div class="container">
                <div class="heading-01 wow fadeInDown">
                    <h2><span>Our </span>Partners</h2>
                </div>
                <div class="partner-main">
                    <div class="owl-carousel owl-theme wow fadeInDown" id="our-partner">
                    @if(!empty($partners))
		  @foreach($partners as $partner)
            <div class="item">
              <a  target="_blank">
                <div class="our-partner-img">
                  <img src="{{url('/')}}/jobs/images/{{$partner->partner_image}}" alt="" />
                </div>
              </a>
            </div>
			@endforeach
			@endif
                    </div>
                </div>
            </div>
        </section>
        <!--[Our Partner] -->

    </main>
    <!--[main] -->
    @stop