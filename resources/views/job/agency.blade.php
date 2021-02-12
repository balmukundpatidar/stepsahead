 @extends('job.layout.layout')
@if($agencyInfo)
@section('meta-title'){!! $agencyInfo->seo_keyword !!} @stop
@section('meta-description'){!! $agencyInfo->seo_description !!}  @stop
@endif
@section('content')
    <!-- main -->
    <main class="orange-theme">
        <?php
            if($agencyInfo->banner_image != '') {
                $url = 'images/'.$agencyInfo->banner_image;
            } else {
                $url = 'img/agency-bg.png';
            }
        ?>
        <!-- hero banner -->
   <!--     <section class="agency" style="background-image: url('{{url('/')}}/jobs/{{$url}}');">
            <div class="container">
                <div class="heading-05 wow fadeIn">
                    <h1>{{$agencyInfo->title}}</h1>
                </div>
            </div>
        </section> -->

        <!-- about info -->
        <section class="sec-about-info bg-white ">
            <div class="container wow fadeInDown">
                <h4 class="heading-04 text-color-black">
                {!! $agencyInfo->description !!}
                </h4>
            </div>
        </section>
        <!-- Recruitment and Independence -->
        <section class="sec-recruitment  agency-main-sec">
            <div class="row no-gutters">
                <div class="col-md-6  wow fadeInLeft">
                    <div class="recruit-img">
                <?php
                    if($agencyInfo->section_1_img != '') {
                        $img1 = 'images/'.$agencyInfo->section_1_img;
                    } else {
                        $img1 = 'img/agency1.png';
                    }
                ?>
                        <img src="{{url('/')}}/jobs/{{$img1}}" alt="" />
                    </div>
                </div>
                <div class="col-md-6  wow fadeInRight">
                    <div class="recruit-text bg-white">
                        <div class="heading-01">
                            <h2 class="text-color-yellow">{!! $agencyInfo->section_1_heading !!}</h2>
                        </div>
                        {!! $agencyInfo->section_1_desc !!}
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6 wow fadeInRight">
                    <div class="recruit-img">
                <?php
                    if($agencyInfo->section_2_img != '') {
                        $img2 = 'images/'.$agencyInfo->section_2_img;
                    } else {
                        $img2 = 'img/agency2.png';
                    }
                ?>
                        <img src="{{url('/')}}/jobs/{{$img2}}" alt="" />
                    </div>
                </div>
                <div class="col-md-6  wow fadeInLeft">
                    <div class="recruit-text bg-yellow text-color-white">
                        <div class="heading-01">
                            <h2 class="text-color-white">{!! $agencyInfo->section_2_heading !!}</h2>
                        </div>
                        {!! $agencyInfo->section_2_desc !!}
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6  wow fadeInLeft">
                    <div class="recruit-img">
                    <?php
                        if($agencyInfo->section_3_img != '') {
                            $img3 = 'images/'.$agencyInfo->section_3_img;
                        } else {
                            $img3 = 'img/agency3.png';
                        }
                    ?>
                        <img src="{{url('/')}}/jobs/{{$img3}}" alt="" />
                    </div>
                </div>
                <div class="col-md-6  wow fadeInRight">
                    <div class="recruit-text bg-white">
                        <div class="heading-01">
                            <h2 class="text-color-yellow">{!! $agencyInfo->section_3_heading !!}</h2>
                        </div>
                        {!! $agencyInfo->section_3_desc !!}
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6  wow fadeInRight">
                    <div class="recruit-img">
                    <?php
                        if($agencyInfo->section_4_img != '') {
                            $img4 = 'images/'.$agencyInfo->section_4_img;
                        } else {
                            $img4 = 'img/agency4.png';
                        }
                    ?>
                        <img src="{{url('/')}}/jobs/{{$img4}}" alt="" />
                    </div>
                </div>
                <div class="col-md-6 wow fadeInLeft">
                    <div class="recruit-text bg-yellow ">
                        <div class="heading-01">
                            <h2 class="text-color-white"> {!! $agencyInfo->section_4_heading !!}</h2>
                        </div>
                        {!! $agencyInfo->section_4_desc !!}
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6  wow fadeInLeft">
                    <div class="recruit-img">
                    <?php
                        if($agencyInfo->section_5_img != '') {
                            $img5 = 'images/'.$agencyInfo->section_5_img;
                        } else {
                            $img5 = 'img/agency5.png';
                        }
                    ?>
                        <img src="{{url('/')}}/jobs/{{$img5}}" alt="" />
                    </div>
                </div>
                <div class="col-md-6  wow fadeInRight">
                    <div class="recruit-text bg-white">
                        <div class="heading-01">
                            <h2 class="text-color-yellow">{!! $agencyInfo->section_5_heading !!}</h2>
                        </div>
                        {!! $agencyInfo->section_5_desc !!}
                    </div>
                </div>
            </div>
        </section>
        <!-- Recruitment and Independence -->
        <!--[agency staff] -->
        <section class="sec-about-info bg-yellow">
            <div class="container  wow fadeInUp">
                <h4 class="heading-04">
                {!! $contactInfo[0]->description !!}
                </h4>
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
	@stop