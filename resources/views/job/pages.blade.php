@extends('job.layout.layout')
@if($page)
	@section('meta-title'){!! $page->seo_keyword !!} @stop
    @section('meta-description'){!! $page->seo_description !!}  @stop
@endif
 @section('content')
 <!-- main -->    
<main>
@php 
if($page->page_img != ''){
	$page_img = 'uploads/pages/'.$page->page_img;
	} else {
		$page_img = 'jobs/images/1593532929_package.png';
		} 
@endphp
 <!-- hero banner -->        
   <section class="agency" style="background-image: url('{{url('/')}}/{{$page_img}}');">
      <div class="container">
         <div class="heading-05 wow fadeIn">
            <h1>{{$page->page_title}}</h1>
         </div>
      </div>
   </section>
   <!-- about info -->        
   <section class="sec-about-info bg-white">
      <div class="container  wow fadeInDown">
         <h4 class="heading-04 text-color-black">
		 {!! $page->page_desc !!}
		 </h4>
      </div>
   </section>
   <!-- Recruitment and Independence -->        
   <section class="sec-recruitment  agency-main-sec">
      @php if(!empty($collectiondata)){ $cl=0; foreach($collectiondata as $collection){  $cl++;  		              if($collection->page_img != '') {
		  $img1 = 'uploads/pages/'.$collection->page_img;
	  }else{
		  $img1 = 'jobs/images/1593532929_package.png';
	  }
	@endphp            
      <div class="row no-gutters">
         <div class="col-md-6 wow @if($cl%2==0) {{'fadeInRight'}} @else {{'fadeInLeft'}} @endif">
            <div class="recruit-img">
			<img src="{{url('/')}}/{{$img1}}" alt="sidebanner" />
			</div>
         </div>
         <div class="col-md-6 wow @if($cl%2==0) {{'fadeInLeft'}} @else {{'fadeInRight'}} @endif ">
            <div class="recruit-text @if($cl%2==0) {{'bg-white'}} @else {{'bg-green'}} @endif" id="{{$collection->page_url}}">
               <div class="heading-01">
                  <h2 class="@if($cl%2==0) {{'bg-white'}} @else {{'text-color-white'}} @endif"> {!! $collection->page_title !!}</h2>
               </div>
               {!! $collection->page_desc !!}                    
            </div>
         </div>
      </div>
      @php } } @endphp	        
   </section>
           <!--[agency staff] -->
        <section class="sec-about-info bg-green">
            <div class="container">
            {!! $contactInfo->description !!}
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