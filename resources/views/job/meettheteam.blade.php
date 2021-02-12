 @extends('job.layout.layout')

@section('content')


   <main>
        <!-- hero banner -->
        <section class="agency" style="background-image: url('{{url('/')}}/uploads/pages/CdgXMX_1606316279_imgpsh_fullsize_anim.jpg');">
            <div class="container">
                <div class="heading-05 wow fadeIn">
                    <h1>Our Team</h1>
                </div>
            </div>
        </section>
        <section class="sec sec-out-team">
            <div class="container">
               @if(count($team)>0)                
                <div class="row">
                    @foreach($team as $item)
                    <div class="col-md-6 col-lg-4">
                    
                        <div class="our-team-main">
                            
                            <div class="our-team-image">
                                 <a href="{{url('/single-team')}}/{{$item->slug}}">
                                <img src="{{url('/')}}/uploads/members/{{$item->member_image}}" alt="" />
                            </a>
                                <div class="team-hover">
                                    <ul>
                                         @if(trim($item->facebook_url) != '')    
                                        <li>
                                            <a href="{{$item->facebook_url}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                         @endif
                                         @if(trim($item->linkedin_url) != '')    
                                        <li>
                                            <a href="{{$item->linkedin_url}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        </li>
                                         @endif
                                          @if(trim($item->twitter_url) != '')    
                                        <li>
                                            <a href="{{$item->twitter_url}}"><i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                             @endif
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        
                         <a href="{{url('/single-team')}}/{{$item->slug}}">
                            <div class="our-team-text text-center">
                                <h4>{{$item->member_name}}</h4>
                                <h6>{{$item->member_position}}</h6>
                            </div>
</a>
                        </div>
                        
                    </div>
                    @endforeach
                     {{ $team->links() }}
                </div>
                @else
                 <div class="row">
                     <p>There are currently no data found.</p>
                 </div>
                 @endif
            </div>
        </section>

    </main>






@stop



