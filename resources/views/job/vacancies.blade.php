@extends('job.layout.layout')
@if($page)
@section('meta-title'){!! $page->seo_keyword !!} @stop
@section('meta-description'){!! $page->seo_description !!}  @stop
@endif
@section('content')
@inject('cn','App\Common\Helper')
<link rel="stylesheet" href="{{url('/')}}\jobs\font-awesome\css\font-awesome.css">
</div>
<!--
   <!-- Start About Us -->
{{--
<div class="container">
   --}}
   {{--
   <div>--}}
      {{--<a href="{{route('job_search_result',['id'=>1])}}" type="button" class="btn btn-labeled btn-warning pull-right" style="background-color:#F15A23;color:white;border:solid 1px #F15A23;; ">--}}
      {{--<span class="btn-label"><i class="fa fa-user" style="color:white;"></i></span>--}}
      {{--Join our team</a>--}}
      {{--
   </div>
   --}}
   {{--
</div>
--}}
{{--<br><br>--}}
<section class="assessment-application">
            <div class="container">
                <h1>Available Positions</h1>
                <p>Apply below to join our team</p>
            </div>
        </section>
<!-- <section class="sec sec-latest-jobs job-list bg-light">
   <div class="container">
       <div class="job-main">
           <div class="job-menu">
               <a href="#" class="active-job">All Jobs</a>
               <a href="#">Care and support jobs</a>
               <a href="#">Office & Other Vacancies</a>
           </div>
           <div class="job-details">
               <ul>
                   <li class="wow fadeInDown" data-wow-delay="0.4s">
                       <div class="detail-blk">
                           <h2>Registered General Nurses Wanted</h2>
                           <span><img src="img/Icon-material-location-on.svg" alt="" />Exeter & Honiton</span>
                           <span><img src="img/Icon-material-send.svg" alt="" />Posted - 05 September
                               2018</span>
                       </div>
                       <div class="detail-blk text-right">
                           <a href="#" class="custom-btn">apply</a>
                       </div>
                   </li>
                   <li class="wow fadeInDown" data-wow-delay="0.6s">
                       <div class="detail-blk">
                           <h2>Registered General Nurses Wanted</h2>
                           <span><img src="img/Icon-material-location-on.svg" alt="" />Plymouth
                               UK</span>
                           <span><img src="img/Icon-material-send.svg" alt="" />Full Time</span>
                       </div>
                       <div class="detail-blk text-right">
                           <a href="#" class="custom-btn">apply</a>
                       </div>
                   </li>
                   <li class="wow fadeInDown" data-wow-delay="0.8s">
                       <div class="detail-blk">
                           <h2>Care Worker</h2>
                           <span><img src="img/Icon-material-location-on.svg" alt="" />Plymouth
                               UK</span>
                           <span><img src="img/Icon-material-send.svg" alt="" />Full Time</span>
                       </div>
                       <div class="detail-blk text-right">
                           <a href="#" class="custom-btn">apply</a>
                       </div>
                   </li>
               </ul>
           </div>
           <nav aria-label="Page navigation example">
               <ul class="pagination">
                   <li class="page-item"><a class="page-link" href="#"><img
                               src="img/Icon ionic-ios-arrow-back.svg" alt="" /></a></li>
                   <li class="page-item"><a class="page-link" href="#">1</a></li>
                   <li class="page-item"><a class="page-link" href="#">2</a></li>
                   <li class="page-item"><a class="page-link" href="#">3</a></li>
                   <li class="page-item"><a class="page-link" href="#"><img
                               src="img/Icon ionic-ios-arrow-right.svg" alt="" /></a></li>
               </ul>
           </nav>
       </div>
   </div>
   </section> -->
<section class="sec sec-latest-jobs  bg-light job-list">
   <div class="container">
      <div class="job-main">
         <div class="job-menu">
            <div class="tab">
               <a href="/vacancies" class="active-job">All Jobs</a>
               <a href="{{route('job_search_result',['id'=>1])}}"> Care & Support Jobs</a>
               <a href="{{route('job_search_result',['id'=>2])}}">Office & Other Vacancies</a>
            </div>
         </div>
         <div class="job-details">
            <ul>
               @if(count($jobs)>0)
               @foreach($jobs as $job)
               <li class="wow fadeInDown" data-wow-delay="0.4s">
                  <div class="detail-blk">
                     <!--  <h2>Registered General Nurses Wanted</h2>
                        <span><img src="img/Icon-material-location-on.svg" alt="" />Exeter & Honiton</span>
                        <span><img src="img/Icon-material-send.svg" alt="" />Posted - 05 September
                            2018</span> -->
                     <a href="{{route('job_details',['id'=>$job->slug])}}">
                        <h2>{{$job->job_title}}-</h2>
                        <span><img src="https://dev.stepsaheadsupport.co.uk/jobs/img/Icon-material-location-on.svg" style="margin-bottom: 2px;" alt="" />{{$cn->country_name($job->job_location)}}</span>
                     </a>
                     <p>{{ substr(strip_tags(html_entity_decode($job->job_description)),0,200) }}</p>
                  </div>
                  <div class="detail-blk text-right">
                     <a href="{{route('job_details',['id'=>$job->slug])}}" class="custom-btn">Apply</a>
                     <!--  <a href="#" class="custom-btn">apply</a> -->
                  </div>
                  <div>
                     {{--<span class="badge">Posted 2012-08-02 20:47:04</span>--}}
                     {{--
                     <div class="pull-right">--}}
                        {{--<span class="label label-default">alice</span> --}}
                        {{--<span class="label label-primary">story</span> --}}
                        {{--<span class="label label-success">blog</span> --}}
                        {{--<span class="label label-info">personal</span> --}}
                        {{--<span class="label label-warning">Warning</span>--}}
                        {{--<span class="label label-danger">Danger</span>--}}
                        {{--
                     </div>
                     --}}
                  </div>
                  <hr>
                  <div>
                  </div>
                  {{--
                  <hr>
                  --}}
         
         </li>
         @endforeach
         <div>
         {{ $jobs->links() }}
         </div>
         @else
         There are currently no vacancies listed, please check again soon for any new vacancies that arise.
         @endif
         </ul>
      </div>
   </div>
   </div>
</section>
@stop