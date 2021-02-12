@extends('job.layout.layout')
@section('content')
 <!-- main -->
    <main>
        <?php $url = 'img/package.png';  ?>
        <!-- hero banner -->
        <section class="agency" style="background-image: url('{{url('/')}}/jobs/{{$url}}');">
            <div class="container">
                <div class="heading-05 wow fadeIn">
                    <h1>Coming soon</h1>
                </div>
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
    </main>
	@stop