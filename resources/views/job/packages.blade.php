 @extends('job.layout.layout')
@if($packagesInfo)
@section('meta-title'){!! $packagesInfo->seo_keyword !!} @stop
@section('meta-description'){!! $packagesInfo->seo_description !!}  @stop
@endif
@section('content')
 <!-- main -->
    <main>
        <?php
         if($packagesInfo->banner_image != '') {
            $url = 'images/'.$packagesInfo->banner_image;
         } else {fdfdfd
            $url = 'img/package.png';
         }
         ?>
        <!-- hero banner -->
        <section class="agency" style="background-image: url('{{url('/')}}/jobs/{{$url}}');">
            <div class="container">
                <div class="heading-05 wow fadeIn">
                    <h1>{{$packagesInfo->title}}</h1>
                </div>
            </div>
        </section>

        <!-- about info -->
        <section class="sec-about-info bg-white">
            <div class="container  wow fadeInDown">
                <h4 class="heading-04 text-color-black">
                {!! $packagesInfo->description !!}fdfdfd
                </h4>
            </div>
        </section>
        <!-- Recruitment and Independence -->
        <section class="sec-recruitment  agency-main-sec">
            <div class="row no-gutters">
                <div class="col-md-6 wow fadeInLeft">
                    <div class="recruit-img">
                    <?php
                        if($packagesInfo->section_1_img != '') {
                            $img1 = 'images/'.$packagesInfo->section_1_img;
                        } else {
                            $img1 = 'img/package1.jpg/';
                        }
                    ?>
                        <img src="{{url('/')}}/jobs/{{$img1}}" alt="" />
                    </div>
                </div>
                <div class="col-md-6 wow fadeInRight">
                    <div class="recruit-text bg-green" id="support-plan">
                        <div class="heading-01">
                            <h2 class="text-color-white"> {!! $packagesInfo->section_1_heading !!}</h2>
                        </div>
                        {!! $packagesInfo->section_1_desc !!}
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6 wow fadeInRight">
                    <div class="recruit-img">
                    <?php
                        if($packagesInfo->section_2_img != '') {
                            $img2 = 'images/'.$packagesInfo->section_2_img;
                        } else {
                            $img2 = 'img/package2.jpg/';
                        }
                    ?>
                        <img src="{{url('/')}}/jobs/{{$img2}}" alt="" />
                    </div>
                </div>

                <div class="col-md-6 wow fadeInLeft">
                    <div class="recruit-text bg-white" id="bespoke-recruitment">
                        <div class="heading-01" >
                            <h2 class="text-color-green">{!! $packagesInfo->section_2_heading !!}</h2>
                        </div>
                        {!! $packagesInfo->section_2_desc !!}
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6 wow fadeInLeft">
                    <div class="recruit-img">
                    <?php
                        if($packagesInfo->section_3_img != '') {
                            $img3 = 'images/'.$packagesInfo->section_3_img;
                        } else {
                            $img3 = 'img/package3.jpg/';
                        }
                    ?>
                        <img src="{{url('/')}}/jobs/{{$img3}}" alt="" />
                    </div>
                </div>
                <div class="col-md-6  wow fadeInRight">
                    <div class="recruit-text bg-green" id="promoting-your-independence">
                        <div class="heading-01">
                            <h2 class="text-color-white">{!! $packagesInfo->section_3_heading !!}</h2>
                        </div>
                        {!! $packagesInfo->section_3_desc !!}
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6 wow fadeInRight">
                    <div class="recruit-img">
                    <?php
                        if($packagesInfo->section_4_img != '') {
                            $img4 = 'images/'.$packagesInfo->section_4_img;
                        } else {
                            $img4 = 'img/package4.jpg/';
                        }
                    ?>
                        <img src="{{url('/')}}/jobs/{{$img4}}" alt="" />
                    </div>
                </div>
                <div class="col-md-6 wow fadeInLeft">
                    <div class="recruit-text bg-white" id="designated-care-manager">
                        <div class="heading-01">
                            <h2 class="text-color-green">
                            {!! $packagesInfo->section_4_heading !!}</h2>
                        </div>
                        {!! $packagesInfo->section_4_desc !!}
                    </div>
                </div>

            </div>
        </section>
        <!-- Recruitment and Independence -->
        <!--[agency staff] -->
        <section class="sec-about-info bg-green">
            <div class="container">
            {!! $contactInfo[0]->description !!}
            </div>
        </section>
        
        
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
          <a href="/gallery" class="custom-btn">View More</a>
        </div>
      </div>
    </section>
    <!-- Support Plan -->
    
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
	@stop