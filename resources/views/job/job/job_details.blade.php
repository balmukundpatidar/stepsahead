@extends('job.layout.layout')

@section('content')

    @inject('cn','App\Common\Helper')

    <!-- Start About Us -->
    
    <section class="sec single-job bg-light">
        <div class="container">
            <div class="single-job-main">

            @if (Session::has('message'))

                <div class="alert alert-success">{{ Session::get('message') }}</div>

            @endif

             <div class="btn-main">
<?php 
$currentDate = date('Y-m-d');

$currentDate = date('Y-m-d', strtotime($currentDate));

$endDate = date('Y-m-d', strtotime($job->job_valid_upto));

?>
                    
 <a href="{{route('vacancies')}}"><img src="/jobs/img/circle-back.svg" alt="" />Back</a>
              @if ($currentDate > $job->job_valid_upto)
                <a href="{{route('application',['id'=>$job->id])}}"  class="custom-btn">Apply</a>
             @else
             <a style="opacity:0.5"  class="custom-btn">Expired </a>
             @endif


             </div>
            <div class="single-job-details">
                <h2>{{$job->job_title}}</h2>
                 <div class="salary-detail">
                            <ul>
                                <li><img src="/jobs/img/salary.svg" alt="" />
                                    <div class="salary-txt">
                                        <h5>Salary</h5>
                                        <p>{{$job->job_salary}}</p>
                                    </div>
                                </li>
                                <li><img src="/jobs/img/location-pin.svg" alt="" />
                                    <div class="salary-txt">
                                        <h5>Location</h5>
                                        <p>{{$cn->country_name($job->job_location)}}</p>
                                    </div>
                                </li>
                                <li><img src="/jobs/img/send.svg" alt="" />
                                    <div class="salary-txt">
                                        <h5>Posted</h5>
                                        <p><?php

                                        $timestamp = strtotime($job->created_at);

                                        $newDate = date('d F Y', $timestamp);

                                        echo $newDate;

                                        ?></p>
                                    </div>
                                </li>
                            </ul>
                 </div>
                <div class="editor-txt">
                            <h3>Description</h3>
                              <p>{!! $job->job_description !!}</p>
                           
                        </div>
    

               

            </div>
            <div class="text-right">
                        @if ($currentDate > $job->job_valid_upto)
                <a href="{{route('my-application',['id'=>$job->id])}}"  class="custom-btn">Apply</a>
             @else
             <a style="opacity:0.5"  class="custom-btn">Expired</a>
             @endif
                    </div>







        </div>



    </div>
  </section>
  

@stop