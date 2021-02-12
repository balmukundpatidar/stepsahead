@extends('job.layout.layout')
@if($page)
@section('meta-title'){!! $page->seo_keyword !!} @stop

@section('meta-description'){!! $page->seo_description !!}  @stop
@endif
@section('content')
    <style>
        .pagination {

            padding: 30px !important;
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
    </style>

<!-- Start Banner Slider -->
<div class="banner-slider">
    <div class="slider-section">
        <div id="owl-example" class="owl-carousel">
        @foreach($sliders as $slider)
            <div class="owl-slide vertical-centre" style='background-image:url("{{url('')}}/uploads/slider/{{$slider->slider_image}}")'>
                <div class="home-top-full-overlay"></div>
                <div class="container">
                    <div class="slider-item-text">
                        <div class="smooth-textbox">
                            <h1>{{$slider->slider_title}}</h1>
                        </div>
                        <div class="smooth-textbox">
                            <p>{!! $slider->slider_desc !!}</p>
                        </div>
                    </div>
               </div>
            </div>
            @endforeach 
          </div>
    </div>
</div>

<!-- End Revolution Slider -->

</div>
</div>

<!-- End Banner Slider -->

</div>

<!-- End Header --> 

<!-- Start Welcome Strip -->

<div class="wel-main">
    <div class="container">
        <div class="clearfix">
            <div class="wel-info-box">
                <h2>How can we help</h2>
                <a class="button-wayra" href="/contact">Contact Us</a> </div>
        </div>
    </div>
</div>

<!-- End Welcome Strip --> 

<!-- Start How Help -->

<div class="how-help-main">
    <div class="container">
        <div class="clearfix">
            <div class="all-title text-center">
                <h2 style="color: #000;">How I Can Help</h2>
                <p style="color: #000;">We specialise in providing staff in the Health and Social Care sector nationwide. We specialise in providing staff in Extra care units, Nursing Homes, NHS and any other health setting that have a need for our staff.
                    
                    Every client individual needs are considered when we are placing staff. We work very closely to ensure that our client's needs are met to ensure people that need these services aren't left vulnerable.
                    
                    We are passionate and work to the best interest of our client's needs 24/7, help is at hand.</p>
            </div>
        </div>
        <div class="row flex-wrap"> @foreach($services as $service)
            <div class="col-lg-3 col-md-6 col-sm-12 item">
                <div class="helpbox aos-item" data-aos="fade-up" data-aos-duration="1000">
                    <div class="icon-help"> <img class="hover-icon" src="{{url('/')}}/uploads/services/{{$service->service_image}}" alt="" /> <img class="hover-icon-h" src="{{url('/')}}/uploads/services/{{$service->service_image}}" alt="" /> </div>
                    <div class="helpdit">
                        <h3>{{$service->service_title}}</h3>
                        <p> {{ substr(strip_tags($service->service_desc),0,50) }}... <a href="/services">Read More</a></p>
                    </div>
                </div>
            </div>
            @endforeach </div>
    </div>
</div>

<!-- End How Help --> 

<!-- Start About Us -->

<div class="about-main left-color-a">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="left-about-b center-all">
                    <div class="all-title">
                        <h2>WELCOME TO CREEK RECRUIT</h2>
                    </div>
                    <p>Creek Recruit is an employment and recruitment agency dedicated to placing experienced/qualified health care professionals in permanent, contract and temporary positions across the UK.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End About Us --> 

<!-- Start Our Team -->

<div class="our-team-main">
    <div class="container">
        <div class="clearfix">
            <div class="all-title text-center">
                <h2 style="color: #000;">Meet Our Team</h2>
                <p style="color: #000;">A small team with a mighty impact.</p>
            </div>
        </div>
        <div class="row">
            <?php $i= 0; ?>
            @foreach($members as $member)
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="our-team-box aos-item" data-aos="fade-up" data-aos-duration="1000">
                    <div class="team-img"> <a href="#team-{{$i}}" class="membername"> <img src="{{url('/')}}/uploads/members/{{$member->member_image}}" alt=""/>
                        <div class="filter-title">
                            <h3>{{$member->member_name}}</h3>
                            <p>{{$member->member_position}}</p>
                        </div>
                        </a> </div>
                </div>
            </div>
            {{--<div style="display:none">--}}
                {{--<div class="teamdetail" id="team-{{$i}}">--}}
                    {{--<div class="innerImg" style="background-image:url('{{url('/')}}/uploads/members/{{$member->member_image}}')"></div>--}}
                    {{--<div class="innertext ">--}}
                        {{--<h3>{{$member->member_name}}</h3>--}}
                        {{--<p class="subtitle">{{$member->member_position}}</p>--}}
                        {{--<p class="desc">{{$member->member_desc}}</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
                    <div class="card" style="display:none">
                        <div class="row" id="team-{{$i}}" style="margin-right: 0px;margin-left: 0px">
                            <div class="col-md-3">
                                <img class="m-1 w-100 img-fluid" style="" src="{{url('/')}}/uploads/members/{{$member->member_image}}" alt="">
                            </div>
                            <div class="card-body text-left col-md-9">
                                <h5 class="card-title rtl"><a href=""></a>{{$member->member_name}} </h5>
                                <p class="subtitle">{{$member->member_position}}</p>
                            </div>
                            <div class="col-md-12">
                                <p class="desc">{!! $member->member_desc !!}</p>
                            </div>

                        </div><!--.row-->
                    </div>

                <?php $i++; ?>
            @endforeach
        </div>
    </div>
</div>

<!-- End Our Team --> 

<!-- Start Testimonials -->

<div class="testimonials-main">
    <div class="container">
        <div class="clearfix">
            <div class="all-title text-center">
                <h2>Our Testimonials</h2>
            </div>
        </div>
        <div class="row">
            <div class="slider-testimonial">
                <div id="testimonial-slider" class="owl-carousel">
                	@foreach($testimonials as $testimonial)
                        <div class="testimonial">
                            <div class="description"> {!! $testimonial->testi_desc !!} </div>
                            <h3 class="testimonial-title">{{$testimonial->testi_title}}</h3>
                        </div>
                    @endforeach
                    </div>
            </div>
        </div>
    </div>
</div>

<!-- End Testimonials -->
    
<!-- Start latest news -->

<div class="latest-news-main">
    <div class="container">
        <div class="clearfix">
            <div class="all-title text-center">
                <h2 style="color:#000;">Latest News</h2>
                <p style="color:#000;">Creek recruit blogs and bulletins feed conversations on important subjects in our industry.</p>
            </div>
        </div>
        <div class="row">
                @foreach($lnews as $news)
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <article class="post aos-item" data-aos="fade-up" data-aos-duration="1000">
                        <a href="{{route('news_details',['id'=>$news->id])}}">
                            <div class="post-thumb">
                            <img src="{{url('/')}}/uploads/news/{{$news->news_image}}" alt="" />
                            <div class="date-box">
                                <b><?php
                                    $timestamp = strtotime($news->created_at);
                                    $newDate = date('d', $timestamp);
                                    echo $newDate;
                                    ?></b>
                                <?php
                                $timestamp = strtotime($news->created_at);
                                $newDate = date('F', $timestamp);
                                echo $newDate;
                                ?>

                            </div>
                        </div>
                        </a>
                        <div class="post-description">
                            <h4>{{$news->news_title}}</h4>
                            <ul>
                                <li>Post by Admin</li>
                                <li>|</li>
                                <li>
                                    <?php
                                    $timestamp = strtotime($news->created_at);
                                    $newDate = date('d F Y', $timestamp);
                                    echo $newDate;
                                    ?>
                                </li>
                            </ul>
                            <p>{{substr(strip_tags($news->news_desc),0,250) }}</p>
                            <a href="{{route('news_details',['id'=>$news->id])}}">
                               <h4 style="text-align: center;color:#f15a23;border-left: hidden">Read More</h4>
                            </a>
                        </div>

                    </article>
                </div>
                @endforeach

        </div>
        {{--<div style="text-align: center">--}}
        {{--{{$lnews->render()}}--}}
        {{--</div>--}}
    </div>
</div>

<!-- End latest news -->

<section class="developemts-map"> 
    <!-- Map Section -->
    <div class="map-container">
        <div id="map"></div>
    </div>
    
    <!-- Map Section End -->
    
    <style>

            #map {

                width: 100%;

                height: 30rem;

            }

            .map_wrap {

                float: left;

                background-color: #fff;

                padding: 0px;

                width: 100%;

                color:#000;

            }

        </style>
    <script>

            function initMap() {

                var mapDiv = document.getElementById('map');



                var latlng = new google.maps.LatLngBounds();



                var style = [

                    { "featureType": "road",

                        "elementType":

                            "labels.icon",

                        "stylers": [

                            { "saturation": 1 },

                            { "gamma": 1 },

                            { "visibility": "off" },

                            { "hue": "#004459" }

                        ]

                    },

                    { "elementType": "geometry", "stylers": [

                            { "saturation": -90 }

                        ]

                    }

                ];

                var mapLocationsx = [[51.628928,-0.385004],[50.381378,-4.161552]];

                var mapInfoContent = [
                    '<strong>Creek Recruit,</strong><br>Room 1, Juniper Suite, Kebbel House,<br>Carpenders Park, Watford.<br>WD19 5EF.<br>0333 222 4027<br>info@creekrecruit.com',
                    '<strong>Creek Recruit,</strong><br>Unit 37, City Business Park.<br>Somerset Place, Plymouth.<br>PL3 4BB<br>0333 222 4027<br>info@creekrecruit.com',];

                var mapZoomLevel =  7;
                var mapZoomMseWheel = false;
                var mapTypeCtrl = false;
                var mapPanCtrl = false;

                var mapZoomCtrl = true;

                var mapScaleCtrl = true;

                var mapStreetViewCtrl = false;

                var mapGrayScale = true;

// Check grayscale option

                var grayscale = mapGrayScale ? -100 : 0;



                // Map options

                var mapOptions = {

                    zoom: mapZoomLevel,

                    center: new google.maps.LatLng( mapLocationsx[0][0], mapLocationsx[0][1] ),

                    mapTypeControl: mapTypeCtrl,

                    mapTypeControlOptions: {

                        style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,

                        position: google.maps.ControlPosition.TOP_RIGHT

                    },

                    panControl: mapPanCtrl,

                    panControlOptions: {

                        position: google.maps.ControlPosition.TOP_LEFT

                    },

                    zoomControl: mapZoomCtrl,

                    zoomControlOptions: {

                        style: google.maps.ZoomControlStyle.SMALL,

                        position: google.maps.ControlPosition.LEFT_TOP

                    },

                    scrollwheel: mapZoomMseWheel,

                    scaleControl: mapScaleCtrl,

                    streetViewControl: mapStreetViewCtrl,

                    streetViewControlOptions: {

                        position: google.maps.ControlPosition.LEFT_TOP

                    },

                    // Add styles as necessary

                    styles:[ { stylers:[ { saturation: grayscale } ] } ]

                };



                var map = new google.maps.Map(mapDiv, mapOptions);



                // SET THE MAP TYPE

                var mapType = new google.maps.StyledMapType(style, {name:"Grayscale"});

                map.mapTypes.set('grey', mapType);

                map.setMapTypeId('grey');

                var mapIcon = ['{{url('/')}}/jobs/images/template/map-marker.png','{{url('/')}}/jobs/images/template/map-marker.png'];

                var mapIconW = 51; // Half of actual width

                var mapIconH = 83; // Half of actual height



                // Google Map





                // Add markers

                var locationMarker;

                var infowindow;

                var iconNum = 0;

                for ( var i = 0; i < mapLocationsx.length; i++ ) {

                    locationMarker = new google.maps.Marker({

                        position: new google.maps.LatLng(mapLocationsx[i][0], mapLocationsx[i][1]),

                        map: map,

                        icon: new google.maps.MarkerImage( mapIcon[ iconNum ], null, null, null, new google.maps.Size( mapIconW, mapIconH ) )

                    });



                    // Create info window

                    infowindow = new google.maps.InfoWindow({

                        content: mapInfoContent[ i ]

                    });



                    // Add click event for markers

                    google.maps.event.addListener( locationMarker, 'click', ( function( locationMarker, i ) {

                        return function() {

                            infowindow.setContent( mapInfoContent[ i ] );

                            infowindow.open( map, locationMarker );

                        };

                    })( locationMarker, i ));



                    // count

                    iconNum++;

                }

                map.setCenter(51.037320, -1.667421);

                // On resize event center map

                google.maps.event.addDomListener( window, 'resize', function() {

                    var mapCenter = map.getCenter();

                    google.maps.event.trigger( map, 'resize' );

                    map.setCenter(51.037320, -1.667421);

                });



            }

        </script> 
    <script async defer

                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzfouctAfuBNIu1uwImynzT91I7fR748o&callback=initMap">

        </script> 
</section>
@stop