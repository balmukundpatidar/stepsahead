@extends('job.layout.layout')

@section('content')


   <main>
        <!-- hero banner -->
        <section class="agency" style="background-image: url('{{url('/')}}/jobs/img/package.png');">
            <div class="container">
                <div class="heading-05 wow fadeIn">
                    <h1>{{$team[0]->member_name}}</h1>
                </div>
            </div>
        </section>
        <section class="sec sec-out-team-single">
            <div class="container">
               @if(count($team)>0)  
               
                <div class="row">
                         <div class="col-md-6 col-lg-3">
                            <div class="our-team-image">
                                <img src="{{url('/')}}/uploads/members/{{$team[0]->member_image}}" alt="" />
                            </div>
                         </div>
                         <div class="col-md-6 col-lg-9">
                            <div class="our-team-text">
                                <h4>{{$team[0]->member_name}}</h4>
                                <h6>{{$team[0]->member_position}}</h6>
                                 <div class="team-hover-single">
                                    <ul>
                                 
                                         @if(trim($team[0]->facebook_url) != '')    
                                        <li>
                                            <a href="{{$team[0]->facebook_url}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                         @endif
                                         @if(trim($team[0]->linkedin_url) != '')    
                                        <li>
                                            <a href="{{$team[0]->linkedin_url}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        </li>
                                         @endif
                                          @if(trim($team[0]->twitter_url) != '')    
                                        <li>
                                            <a href="{{$team[0]->twitter_url}}"><i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                             @endif
                                        </li>
                                    </ul>
                                </div>
                               {!! $team[0]->member_desc !!}
                            </div>

                       </div>
                         
                    
                    </div>                                 

                </div>
                 @endif
            </div>
        </section>

    </main>




@stop

