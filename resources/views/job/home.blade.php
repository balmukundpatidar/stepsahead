@extends('job.layout.layout')
@if($page)
@section('meta-title'){!! $page->seo_keyword !!} @stop
@section('meta-description'){!! $page->seo_description !!}  @stop
@endif
@section('content')
  <!-- main -->
  <main>
    <!-- hero banner -->
    <section class="sec sec-hero-banner" id="particle" style="background-image: url('{{url('/')}}/jobs/images/{{$banner->banner_image}}');">
      <canvas id="particle-canvas"></canvas>
      <div class="sec-hero-text container wow zoomIn">
        <h1>{{$banner->banner_text1}}</h1>
        <h2>{{$banner->banner_text2}}</h2>
      </div>
    </section>

    <!-- about info -->
    <section class="sec-about-info">
      <div class="container">
        <h4 class="heading-04 wow fadeIn">
          <!-- {{strip_tags($banner->down_text)}} -->
			Steps Ahead Care &amp; Support specialise in providing support and rehabilitation to those with an acquired brain injury, spinal injuries, challenging behaviour and mental health.
        </h4>
      </div>
    </section>

    <!-- Care & Support -->
    <section class="sec sec-care-and-support">
      <div class="container">
        <div class="heading-01 wow fadeInDown">
          <h2><span>Steps Ahead</span> Care & Support</h2>
        </div>
        <div class="row">
    @if(!empty($care_support))
      @php $i=0.4; @endphp
      @foreach($care_support as $cs)
        @php $i=$i+0.1; @endphp
          <div class="col-md-6 col-lg-3 wow fadeInDown" data-wow-delay="{{$i}}s">
            <div class="care-main">
              <div class="care-image">
      <img src="{{url('/')}}/jobs/images/{{$cs->care_image}}" alt="" />
              </div>
              <h3>{{$cs->care_heading}}</h3>

              <div class="care-hover">
                <a href="{{url('/') . $cs->care_url}}">
                  <h6>{{$cs->care_heading}}</h6>
                  <p>
                    {!!$cs->care_text!!}
                  </p>
                  <h5>read more</h5>
                </a>
              </div>
            </div>
          </div>
      @endforeach
    @endif  
         
        </div>
      </div>
    </section>
    <!-- Care & Support -->

	  

	  

		
    <!--Stay Strong  -->
    <section class="sec sec-stay-strong">
      <div class="container">
        <div class="heading-01 wow fadeInDown">
          <h2><span>The process </span>of developing your bespoke support</h2>
        </div>
        <div class="row wow fadeInDown">
    @if(!empty($process))
      @foreach($process as $proc)
          <div class="col-md-6 col-lg-3">
            <div class="strong-main">
              <div class="strong-icon">
                <img src="{{url('/')}}/jobs/images/{{$proc->image}}" alt="" />
              </div>
              <div class="strong-text">
                <h6>{{$proc->heading}}</h6>
                <p>
                 {{$proc->text}}
                </p>
              </div>
            </div>
          </div>
      @endforeach
     @endif 
        </div>
      </div>
    </section>
    <!--Stay Strong  -->	  
	  
	  
	  
	  
	  
	  
	  
	  
    <!--[testimonial] -->
    <section class="sec sec-testimonial">
      <div class="container">
        <div class="heading-01 wow fadeInDown">
          <h2><span>Testimonials </span>What Our Clients Say</h2>
        </div>
        <div class="testimonial">
          <div class="owl-carousel owl-theme" id="testimonial">
      @if(!empty($testimonials))
      @foreach($testimonials as $testimonial)
            <div class="item wow fadeInDown">
              <p>
                {!! $testimonial->testi_desc !!} 
              </p>
            </div>
      @endforeach
      @endif
          </div>
        </div>
      </div>
    </section>
    <!--[testimonial] -->	  

	  
	  
	<!-- Support Plan -->
    <section class="sec sec-support-and-plan support-plan bg-gray">
      <div class="container">
        <div class="heading-01 wow fadeInDown">
          <h2><span>Our</span>Core Values</h2>
        </div>
        <div class="row">
    @if(!empty($support_plan))
      @php $j=0; @endphp
      @foreach($support_plan as $sp)
      @php $j++; @endphp
          <div class="col-md-6 wow fadeInUp">
            <div class="support-plan-main">
              <div class="plan-icon">
                <img src="{{url('/')}}/jobs/images/{{$sp->support_image}}" alt="" />
              </div>
              <div class="plan-text">
                <h6>{!! $sp->support_heading !!}</h6>
                <p>
                  {!! $sp->support_text !!}
                </p>
                <a href="{{$sp->support_url}}">read more</a>
              </div>
              <div class="plan-hover">
                <img src="{{url('/')}}/jobs/images/{{$sp->hover_image}}" alt="" />
              </div>
            </div>
          </div>
      @endforeach
    @endif  
        </div>
      </div>
    </section>
    <!-- Support Plan -->

 
	  
	  
	  <!-- Support Plan -->
    <!--<section class="sec sec-support-and-plan sec-gallery">
      <div class="container">
        <div class="heading-01 wow fadeInDown">
          <h2><span>Memories </span>Our Gallery</h2>
        </div>
        <div class="steps-portfolio">
          <div class="portfolio-buttons">
            <button class="portfolio-button is-checked" data-filter="*">
              All
            </button>
            @foreach($categories as $category)
            <button class="portfolio-button" data-filter=".{{$category->slug}}">
              {{$category->title}}
            </button>
            @endforeach
          </div>
          <div class="grid auto-clear row wow zoomIn" id="gallery">

			  @if(!empty($gallery))
      @php $k=0; @endphp
      @foreach($gallery as $gl)
      @php $k++; @endphp
        @if($k <= 6)
            <a href="{{url('/')}}/jobs/images/{{$gl->gallery_image}}" class="col-md-4 col-sm-6 portfolio-item {{$gl->gallery_category}}" data-sub-html=".plan-text">
              <div class="support-plan-main gallery-main">
                <div class="plan-icon">
                  <img src="{{url('/')}}/jobs/images/{{$gl->gallery_image}}" alt="" />
                </div>
                <div class="plan-text">
                  <h6>{!! $gl->gallery_heading !!}</h6>
                  <p>{!! $gl->gallery_text !!}</p>
                </div>
              </div>
            </a>
        @endif
      @endforeach
    @endif
          </div>
        </div>
        <div class="text-center">
          <a href="/gallery" class="custom-btn">View More</a>
        </div>
      </div>
    </section>-->
    <!-- Support Plan -->










<!-- Knowledge center -->

<!--
    <section class="knowledge-center">
      <div class="knowledge-center-upper" style="background-image: url('{{url('/')}}/jobs/img/parallax.jpg');"></div>
      <div class="knowledge-main">
        <div class="container">
          <div class="heading-01 wow fadeInDown">
            <h2>Knowledge center</h2>
          </div>
          <div class="row">
            <div class="col-md-12">
              <ul id="tabs" class="nav nav-tabs">
        @if(!empty($knowledge_center))
      @php $kc=0; @endphp
      @foreach($knowledge_center as $knowledge)
      @php $kc++; @endphp
                <li class="nav-item">
                  <a href="" data-target="#knowledge{{$kc}}" data-toggle="tab" class="nav-link @if($kc==1) active @endif">{{$knowledge->heading}}</a>
                </li>
      @endforeach
            @endif  
              </ul>
              <br />
              <div id="tabsContent" class="tab-content wow fadeInDown">
        @if(!empty($knowledge_center))
      @php $kc=0; @endphp
      @foreach($knowledge_center as $knowledge)
      @php $kc++; @endphp
                <div id="knowledge{{$kc}}" class="tab-pane @if($kc==1) active show @endif fade ">
                  <p class="">
          {{$knowledge->text}}
                  </p>
          @if(!empty($knowledge->url_1) && !empty($knowledge->button_title)) 
                  <div class="service-btn">
                    <a href="{{$knowledge->url_1}}" class="custom-btn">{{$knowledge->button_title}}</a>
                  </div>
          @endif
                </div>
      @endforeach
            @endif      
            
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

-->
    <!-- Knowledge center -->


    <!-- Latest Jobs  -->
    <section class="sec sec-latest-jobs">
      <div class="container">
        <div class="heading-01 wow fadeInDown">
          <h2>Latest Jobs</h2>
        </div>
        <div class="job-main">
          <ul>
         @if(!empty($jobs))
             @php $m=0.2; @endphp        
             @foreach($jobs as $job)
        @php $m=$m+0.2; @endphp
            <li class="wow fadeInDown" data-wow-delay="0.4s">
              <div class="detail-blk">
                <h2>{{$job->job_title}}</h2>
                <span><i class="fa fa-map-marker" aria-hidden="true"></i>{{$job->job_city}} {{$job->job_zip_code}}</span>
                <span><i class="fa fa-calendar"></i>@if(!empty($job->job_type==1)) Full Time @else Part Time @endif</span>
              </div>
              <div class="detail-blk text-right">
                <a href="{{route('job_details',['id'=>$job->slug])}}" class="custom-btn">apply</a>
              </div>
            </li>
               @endforeach
              @endif
          </ul>
          <div class="call-us text-center wow fadeInDown" data-wow-delay="0.9s">
            <a href="/vacancies" class="custom-btn">all job listings </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Latest Jobs  -->







		
		

		
		
		
		
		

		
		
		
		
		
		
		
		
		
    <!-- Recruitment and Independence -->
    <section class="sec-recruitment">
      <div class="row no-gutters">
      @php $i=0; @endphp
      @if(!empty($simpleprocess))
    @foreach($simpleprocess as $simpp)
      @php $i++; @endphp
    @if($i%2!=0) 
        <div class="col-md-6 no">
          <div class="recruit-img wow fadeInLeft">
            <img src="{{url('/')}}/jobs/images/{{$simpp->image}}" alt="" />
          </div>
        </div>
        <div class="col-md-6 wow fadeInRight">
          <div class="recruit-text">
            <div class="heading-01">
              <h2><span>{{$simpp->heading}} </span>{{$simpp->sub_heading}}</h2>
            </div>

			 {!! $simpp->text !!}

			  <div class="news-btn">
              <a href="/packages#promoting-your-independence" class="custom-btn">read more</a>
            </div>
          </div>
        </div>
    @else
    <div class="col-md-6 wow fadeInLeft">
          <div class="recruit-text">
            <div class="heading-01">
              <h2><span>{{$simpp->heading}} </span>{{$simpp->sub_heading}}</h2>
            </div>

			   {!! $simpp->text !!} 

			  <div class="news-btn">
              <a href="/packages#bespoke-recruitment" class="custom-btn">read more</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 wow fadeInRight">
          <div class="recruit-img">
            <img src="{{url('/')}}/jobs/images/{{$simpp->image}}" alt="" />
          </div>
        </div>
    @endif
    @endforeach
    @endif
        
      </div>
    </section>
    <!-- Recruitment and Independence -->
		
		
		

    <!-- Latest News -->
    <section class="sec sec-latest-news">
      <div class="container">
        <div class="heading-01 wow fadeInDown">
          <h2><span>Stay up to date </span>Latest News</h2>
        </div>
        <div class="news-main">
          <div class="owl-carousel owl-theme" id="news-slider">
      @foreach($lnews as $news)
            <div class="item wow fadeInUp">
              <div class="news-box">
                <a href="{{route('news_details',['id'=>$news->slug])}}">
                  <div class="news-img">
                    <img src="{{url('/')}}/uploads/news/{{$news->news_image}}" alt="" />
                  </div>
                </a>
                <div class="news-text">
                  <h3>
                    <a href="{{route('news_details',['id'=>$news->slug])}}">
                        {{strlen(strip_tags($news->news_title)) > 50 ? substr(strip_tags($news->news_title),0,50)."..." : strip_tags($news->news_title)}}

                  </h3>
                  <p>
                     {{strlen(strip_tags($news->news_desc)) > 150 ? substr(strip_tags($news->news_desc),0,150)."..." : strip_tags($news->news_desc)}}
                  </p>
                  <div class="news-btn">
                    <a href="{{route('news_details',['id'=>$news->slug])}}" class="custom-btn">read more</a>
                  </div>
                </div>
              </div>
            </div>
       @endforeach
            
          </div>
        </div>
      </div>
    </section>
    <!-- Latest News -->
		


    <!--[Our Partner] -->
    <section class="sec sec-our-partner">
      <div class="container">
        <div class="heading-01 wow fadeInDown">
          <h2><span>Our </span>Network</h2>
        </div>
        <div class="partner-main">
          <div class="owl-carousel owl-theme wow fadeInDown" id="our-partner">
      @if(!empty($partners))
      @foreach($partners as $partner)
            <div class="item">
              @if($partner->partner_url)
                <a href="{{ $partner->partner_url}}" target="_blank">
              @endif
                <div class="our-partner-img">
                  <img src="{{url('/')}}/jobs/images/{{$partner->partner_image}}" alt="" />
                </div>
              @if($partner->partner_url)
              </a>
              @endif
            </div>
      @endforeach
      @endif
          </div>
        </div>
      </div>
    </section>
    <!--[Our Partner] -->
    <!--[Contact Us] -->
    <section class="sec sec-map-contact">
      <div id="map_para_wrap">
      <div id="map_para">
      <div id="map_wrapper">
                     <div id="map" style="width: 100%; height: 100%"></div>
         </div>
         </div>
         </div>
      <div class="container">
    <div class="row">
    <div class="col-md-6">
     
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFzzVfXfUc91Eb1CWCfPVZZzgMB0U5xVU&callback=initMap"></script>
     <!--<script src="{{url('/')}}/jobs/js/googlemap.js"></script>-->
      
      <script type="text/javascript">
       var locations = [
        @if(count($address)>0)
        @foreach($address as $item)
        ['{{$item->address}}',{{$item->lat}},{{$item->long}},'{{$item->address_type}}'],
        @endforeach
          @endif
        ];
      
      var map = new google.maps.Map(document.getElementById('map'), {
                       mapTypeId: google.maps.MapTypeId.ROADMAP,
                     });
                     var infowindow = new google.maps.InfoWindow();
                     var bounds = new google.maps.LatLngBounds();
                     //Sunil Icon
                     var icon = {
                     url:"/jobs/img/map-pin-blue.png",
                     scaledSize: new google.maps.Size(43, 57), // scaled size
                     origin: new google.maps.Point(0,0), // origin
                     anchor: new google.maps.Point(0, 57) // anchor
                     };
                     var icon2 = {
                     url:"/jobs/img/map-pin-green.png",
                     scaledSize: new google.maps.Size(43,57), // scaled size
                     origin: new google.maps.Point(0,0), // origin
                     anchor: new google.maps.Point(0, 57) // anchor
                     };
                     
                     var marker, i, newicon;
                     var markers1 = new Array();
                     for (i = 0; i < locations.length; i++) {
                     if(locations[i][3]=='office'){
                     newicon=icon;  
                     }else{
                     newicon=icon2; 
                     }
                       marker = new google.maps.Marker({
                         position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                         map: map,
                         icon: newicon,
                         title: locations[i][0],
             
                       });
                        bounds.extend(marker.position);
                       google.maps.event.addListener(marker, 'click', (function(marker, i) {
                         return function() {
                           infowindow.setContent(locations[i][0]);
                           infowindow.open(map, marker);
                           opentoolbars(i);
                         }
                       })(marker, i));
                       markers1.push(marker);  
                     }
                     map.fitBounds(bounds);
                       var listener = google.maps.event.addListener(map, "idle", function () {
                         map.setZoom(7);
                         google.maps.event.removeListener(listener);
                     });
                     // Trigger a click event on each marker when the corresponding marker link is clicked
                     
      </script>
    </div>
    <div class="col-md-6">
        <div class="form-main wow zoomIn">
          <div class="heading-01">
            <h2>Get In Touch</h2>
          </div>
      <div id="msg"></div>

                        @if (count($errors) > 0)

                            <div class="alert alert-danger">

                                <ul>

                                    @foreach ($errors->all() as $error)

                                        <div>{{ $error }}</div>

                                    @endforeach

                                </ul>

                            </div>

                        @endif



                        @if (Session::has('message'))

                            <div class="alert alert-success">{{ Session::get('message') }}</div>

                        @endif
                        <div class="messsage">

                        </div>
          <form action="{{route('store_contact')}}" method="post">
      <input type="hidden" name="_method" value="POST">
      {{ csrf_field() }}
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input name="first_name" type="text" class="form-control" required placeholder="Name*" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" required placeholder="Email*" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="number" class="form-control" required placeholder="Phone*" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <select name="enquiry" class="form-control">
                    <option>Enquiry</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <textarea name="comment" class="form-control" rows="7" placeholder="Message"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-btn">
                  <button type="submit" class="custom-btn">Submit</button>
                </div>
              </div>
            </div>
          </form>
        </div>
    </div>
    </div>
      </div>
    </section>
    <!--[Contact Us] -->
    <!--[call section close here] -->
    <section class="cal-section sec-testimonial">
      <div class="container">
        <div class="row align-items-center wow fadeInUp">
          <div class="col-lg-6 col-sm-7">
            <div class="want-tlk">
              <img src="{{url('/')}}/jobs/img/celular.svg" alt="call-icon" />
              <h2>Want to talk more?</h2>
              <p>
                For further information about our services or to talk about
                how we can help you, please contact us.
              </p>
            </div>
          </div>
          <div class="col-lg-6 col-sm-5">
            <div class="call-us text-right">
              <a href="tel:{{$setttings->phone_number_1}}" class="custom-btn">call us now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--[call section close here] -->
  </main>
  <!--[main] -->
@stop
