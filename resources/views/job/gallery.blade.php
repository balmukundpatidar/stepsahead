 @extends('job.layout.layout')
@section('content')
     <!-- main -->
  <main>
    <!-- hero banner -->
    <section class="agency" style="background-image: url('{{url('/')}}/jobs/img/gallery-bg.jpg');">
      <div class="container">
        <div class="heading-05 wow fadeIn">
          <h1>Our Gallery</h1>
        </div>
      </div>
    </section>
    <!-- Support Plan -->
    <section class="sec sec-support-and-plan sec-gallery">
      <div class="container">
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
                    <h6>{!! $gl->gallery_heading !!}</h6>
                    <p>{!! $gl->gallery_text !!}</p>
                  </div>
                </div>
              </a>
            @endforeach
           @endif
          </div>
        </div>
        <?php
         $currentPage = $page > 0 ? $page + 1 : 1;
         if($count > 0 && $offset < $count) {?>
        <div class="text-center">
          <a href="/gallery/<?php echo $currentPage;?>" class="custom-btn">View More</a>
        </div>
        <?php } ?>
      </div>
    </section>
    <!-- Support Plan -->

  </main>
  <!--[main] -->
	@stop