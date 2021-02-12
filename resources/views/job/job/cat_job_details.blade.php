@extends('job.layout.layout')
@section('content')
    @inject('cn','App\Common\Helper')

    <link rel="stylesheet" href="{{url('/')}}\jobs\font-awesome\css\font-awesome.css">
    

    </div>
    <!--
    <!-- Start About Us -->
    <br>
<section class="assessment-application">
            <div class="container">
                <h1>Available Positions</h1>
                <p>Apply below to join our team</p>
            </div>
        </section>
        <section class="sec sec-latest-jobs job-list bg-light">
    {{--<div class="container">--}}

        {{--<div>--}}
            {{--<a href="{{route('job_search_result',['id'=>1])}}" type="button" class="btn btn-labeled btn-warning pull-right" style="background-color:#F15A23;color:white;border:solid 1px #F15A23;; ">--}}
                {{--<span class="btn-label"><i class="fa fa-user" style="color:white;"></i></span>--}}
                {{--Join our team</a>--}}
        {{--</div>--}}


    {{--</div>--}}
    {{--<br><br>--}}
    <div class="container">
        <div class="job-main">
            <div class="job-menu">
               
                   <!--  {{--<button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Care & Support Jobs</button>--}}
                    {{--<button class="tablinks" onclick="openCity(event, 'Paris')">Office & Other Vacancies</button>--}}
                    {{--<button class="tablinks" onclick="openCity(event,  'Tokyo')">Tokyo</button>--}} -->
                   
                    <a href="/vacancies" @if($id=="") class="active-job" @endif>All Jobs</a>
                    <a href="{{route('job_search_result',['id'=>1])}}" @if($id==1) class="active-job" @endif>Care and support jobs</a>
                     <a href="{{route('job_search_result',['id'=>2])}}" @if($id==2) class="active-job" @endif>Office & Other Vacancies</a>
                
            </div>
            <div class="job-details">
                @if(count($jobs)>0)
                <ul>
                    @foreach($jobs as $job)
                            <li class="wow fadeInDown" data-wow-delay="0.4s">
                                <div class="detail-blk">
                                     <a href="{{route('job_details',['id'=>$job->slug])}}"> 
                                        <h2>{{$job->job_title}}</h2>
                                        <span><img src="https://dev.stepsaheadsupport.co.uk/jobs/img/Icon-material-location-on.svg" style="margin-bottom: 2px;" alt="" />{{$cn->country_name($job->job_location)}}</span>
                                        <!-- <span><img src="img/Icon-material-send.svg" alt="" />Posted - 05 September
                                        2018</span>  -->
                                        </a>
                                
                            <p>{{ substr(strip_tags(html_entity_decode($job->job_description)),0,200) }}</p>
                                <!-- <a href="{{route('job_details',['id'=>$job->id])}}" class="btn">Read More</a> -->

                              
                            
                           
                            <!--<hr>-->
                        
                    
                       </div>
                     <div class="detail-blk text-right">
                                    <a href="{{route('job_details',['id'=>$job->slug])}}" class="custom-btn">apply</a>
                                </div>
             
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

    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
   

@stop
