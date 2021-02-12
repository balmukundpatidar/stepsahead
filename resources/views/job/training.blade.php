@extends('job.layout.layout')
@if($trainingInfo)
@section('meta-title'){!! $trainingInfo->seo_keyword !!} @stop
@section('meta-description'){!! $trainingInfo->seo_description !!}  @stop
@endif
@section('content')
    <!-- main -->
    <main>
        <!-- hero banner -->
        <?php
         if($trainingInfo->banner_image != '') {
            $url = 'images/'.$trainingInfo->banner_image;
         } else {
            $url = 'img/training-bg.jpg';
         }
         ?>
        <section class="agency" style="background-image: url('{{url('/')}}/jobs/{{$url}}');">
            <div class="container">
                <div class="heading-05 wow fadeIn">
                    <h1>{{$trainingInfo->title}}</h1>
                </div>
            </div>
        </section>

        <!-- about info -->
        <section class="sec-about-info bg-white">
            <div class="container wow fadeInDown">
                <h4 class="heading-04 text-color-black">
                {!! $trainingInfo->description !!}
                </h4>
            </div>
        </section>
        <!-- Recruitment and Independence -->
        <?php
         if($trainingInfo->section_1_img != '') {
            $img = 'images/'.$trainingInfo->section_1_img;
         } else {
            $img = 'img/training1.png';
         }
        ?>
        <section class="sec-recruitment  agency-main-sec">
            <div class="row no-gutters">
                <div class="col-md-6 wow fadeInLeft">
                    <div class="recruit-img">
                        <img src="{{url('/')}}/jobs/{{$img}}" alt="" />
                    </div>
                </div>
                <div class="col-md-6 wow fadeInRight">
                    <div class="recruit-text bg-white">
                        <div class="heading-01">
                            <h2 class="text-color-blue">{!! $trainingInfo->section_1_heading !!}</h2>
                        </div>
                        {!! $trainingInfo->section_1_desc !!}
                    </div>
                </div>
            </div>
            <?php
                if($trainingInfo->section_2_img != '') {
                    $img2 = 'images/'.$trainingInfo->section_2_img;
                } else {
                    $img2 = 'img/training2.png';
                }
            ?>
            <div class="row no-gutters">
                <div class="col-md-6 wow fadeInRight">
                    <div class="recruit-img">
                        <img src="{{url('/')}}/jobs/{{$img2}}" alt="" />
                    </div>
                </div>
                <div class="col-md-6 wow fadeInLeft">
                    <div class="recruit-text bg-blue">
                        <div class="heading-01">
                            <h2 class="text-color-white">{!! $trainingInfo->section_2_heading !!}</h2>
                        </div>
                        {!! $trainingInfo->section_2_desc !!}
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
            <?php
                if($trainingInfo->section_3_img != '') {
                    $img3 = 'images/'.$trainingInfo->section_3_img;
                } else {
                    $img3 = 'img/training3.png';
                }
            ?>
                <div class="col-md-6 wow fadeInLeft">
                    <div class="recruit-img">
                        <img src="{{url('/')}}/jobs/{{$img3}}" alt="" />
                    </div>
                </div>

                <div class="col-md-6 wow fadeInRight">
                    <div class="recruit-text bg-white">
                        <div class="heading-01">
                            <h2 class="text-color-blue">{!! $trainingInfo->section_3_heading !!}</h2>
                        </div>
                        {!! $trainingInfo->section_3_desc !!}
                    </div>
                </div>
            </div>
        </section>
        <!-- Recruitment and Independence -->
        <!--[agency staff] -->
        <section class="sec-about-info bg-blue">
            <h4 class="heading-04  wow fadeInUp">
                <div class="container">
                    <h4 class="heading-04 ">
                    {!! $contactInfo[0]->description !!}
                    </h4>
                </div>
        </section>
        <!--[Our Partner] -->
               <!-- Support Plan -->
    <section class="sec sec-support-and-plan sec-gallery">
      <div class="container">
        <div class="heading-01 wow fadeInDown">
          <h2>Our Gallery</h2>
        </div>
        <div class="steps-portfolio">
          <div class="grid auto-clear row wow zoomIn" id="gallery">
            <!-- <div class="isotope-sizer"></div> -->
          @if(!empty($gallery))
      @php $k=0; @endphp
      @foreach($gallery as $gl)
      @php $k++; @endphp
            <a href="{{url('/')}}/jobs/images/{{$gl->gallery_image}}" class="col-md-4 col-sm-6 portfolio-item {{$gl->gallery_category}}" data-sub-html=".plan-text">
              <div class="support-plan-main gallery-main">
                <div class="plan-icon">
                  <img src="{{url('/')}}/jobs/images/{{$gl->gallery_image}}" alt="" />
                </div>
                <div class="plan-text">
                  <h6>{{$gl->gallery_heading}}</h6>
                  <p>{{$gl->gallery_text}}</p>
                </div>
              </div>
            </a>
      @endforeach
    @endif
          </div>
        </div>
        <div class="text-center">
          <a href="/gallery" class="custom-btn text-white">View More</a>
        </div>
      </div>
    </section>
    <!-- Support Plan -->
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