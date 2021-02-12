@extends('job.layout.layout')
@section('content')
    <style>
        input[type=file]{
            padding:10px;
            background:#ccc;
        }
    </style>
 <section class="transparent profile-section">
            <div class="row">
                <div class="small-12 columns">
                    <div class="small-12 medium-4 large-3 column profile-left">
                        {{--<img src="/images/profile-pic.jpg" />--}}
                        <form name="carform" method="post" action="{{route('employee::profile_image_update',['city' => $profile_info->id])}}" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PUT">
                            {{ csrf_field() }}
                            @if($profile_info->user_image=="")
                        <img id="blah" src="{{url('/')}}/job/images/noImage.jpg" alt="your image" />
                        @else
                         <img id="blah" src="{{url('/')}}/uploads/profile_image/{{$profile_info->user_image}}" alt="your image" />
                        @endif
                            <input type='file' name="image" onchange="readURL(this);" />
                        <input type="submit" value="Save" name="experience-item-btn" style="background: #a3dfbf">
                        </form>
                            <div class="profile-short-description edit-wrap">

                            <h3 class="profile">PROFILE<a href="{{route('employee::profile_description',['user_id'=>$user_id])}}" class="fancybox fancybox.iframe edit-link">Edit Info</a></h3>
                            <div data-id='profile-info' class="content edit-content text-area">
                            {{$profile_info->description}}
                            </div>
                        </div>
                    </div>
                    <div class="small-12 medium-8 large-9 column profile-right">
                        <div class="profile-right-col-header small-12">
                            <div class="small-6 column no-padding-left">
                                <h3 class="profile-name edit-wrap"><span class="edit-content"  data-id='first-name'>{{$user->user_name}}</span> <span class="edit-content"  data-id="last-name"></span></h3>
                                <p class="profile-name edit-wrap"><span class="edit-content" data-id="short-description">{{$user->email}}</span></p>
                            </div>
                            <div class="small-3 column  no-padding-right">
                                <a class="button green float-right" href="{{url('employee/blog')}}">Blog</a>                    </div>

                            <div class="small-3 column  no-padding-right">
                                <a class="fancybox fancybox.iframe button green float-right" href="{{route('employee::profile',['user_id'=>$user_id])}}">EDIT PROFILE</a>                    </div>
                        </div>
                        <div class="clr"></div>
                        <div class="white experience border new-wrap">
                            <div class="">
                                <h3 class="background-title container">Background &amp; Experience <a href="{{route('employee::experience.create')}}" class="fancybox fancybox.iframe new-link" data-section="experience">New</a></h3></div>
                            @foreach($experiences as $experience)
                            <div class="experience-item container edit-wrap">
                                <h3 class="experience-item-title">
                                    <span class="edit-content"  data-id='background-title'>{{$experience->exp_title}}</span> <a href="{{route('employee::experience.edit', ['country' => $experience->id])}}" class="fancybox fancybox.iframe edit-link">Edit Info</a></h3>
                                <p class="experience-item-location"><span class="edit-content"  data-id='background-location'>{{$experience->exp_location}}</span></p>
                                <p class="experience-item-dete"><span class="edit-content"  data-id='background-date-from' data-placeholder='Date From'>{{$experience->from_date}}</span><span class="edit-content"  data-id='background-date-to' data-placeholder='Date To'></span></p>
                                <div class="content edit-content text-area"  data-id='background-description''>
{{$experience->exp_description}}                            </div>
                        </div>
                       @endforeach
                </div>

                    <div class="acheivements">
                        <div class="white container title-wrapper border">
                            <h3 class="background-title">DETAILS
                                @if($profile_info->resume!="")
                                <a href="{{url('/')}}/uploads/resume/{{$profile_info->resume}}" class="new-link" data-section="experience">CV</a></h3>
                             @else
                                <a href="#" class="new-link" data-section="experience">CV</a></h3>
                            @endif
                        </div>
                        <div class="acheivement-item" STYLE="background: #777">
                            <ul class="horizontal">
                                <li style="border-right: 0px solid; padding-right: 0px;">Location</li>
                                <li style="border-right: 1px solid; padding-right: 100px;">{{$profile_info->location}}</li>
                                <li style="border-right: 0px solid; padding-right: 0px;">Mobile</li>
                                <li style="border-right: 0px solid; padding-right: 0px;">{{$profile_info->mobile}}</li>
                            </ul>
                        </div>
                        <div class="acheivement-item" STYLE="background: #777">
                            <ul class="horizontal">
                                <li style="border-right: 0px solid; padding-right: 0px;">Total Exprience</li>
                                <li style="border-right: 1px solid; padding-right: 120px;">
                                    @if($profile_info->exprience==99)
                                        Fresher
                                        @else
                                        {{$profile_info->exprience}}
                                    @endif
                                </li>
                                <li style="border-right: 0px solid; padding-right: 0px;">Recent Position</li>
                                <li style="border-right: 0px solid; padding-right: 0px;">{{$profile_info->position}}</li>
                            </ul>
                        </div>
                        <div class="acheivement-item" STYLE="background: #777">
                            <ul class="horizontal">
                                <li style="border-right: 0px solid; padding-right: 0px;">Higest Qualification</li>
                                <li style="border-right: 1px solid; padding-right: 100px;">{{$profile_info->qualification}}</li>
                                <li style="border-right: 0px solid; padding-right: 0px;"></li>
                                <li style="border-right: 0px solid; padding-right: 0px;"></li>

                            </ul>
                        </div>
                    </div>
                <div class="acheivements">
                    <div class="white container title-wrapper border">
                        <h3 class="background-title">ACHEIVEMENTS
                            <a href="{{route('employee::acheivement.create')}}" class="fancybox fancybox.iframe new-link" data-section="experience">New</a>
                        </h3>

                    </div>
                    @foreach($acheivements as $acheivement)
                        <div class="acheivement-item">
                            <ul class="horizontal">
                            <li>{{$acheivement->ach_title}}</li>
                            <li>{{$acheivement->ach_name}}</li>
                            <li>{{$acheivement->ach_location}}</li>
                            <li>{{$acheivement->ach_date}}</li>
                            <li> <a href="{{route('employee::acheivement.edit', ['country' => $acheivement->id])}}"
                                    class="fancybox fancybox.iframe edit-link">Edit Info</a></li>
                        </ul>
                    </div>
                        @endforeach
                </div>
                <div class="intenrest-section white border">
                    <div class="interest-title container">
                        <h3 class="interest-title">Skills
                            <a href="{{route('employee::skill.create')}}" class="fancybox fancybox.iframe new-link" data-section="experience">New</a>
                        </h3>
                    </div>
                    @foreach($skills as $skill)
                    <div class="interest-item container">
                        <h3 class="interest-item-title">{{$skill->skills_name}}</h3>
                        <a href="{{route('employee::skill.edit', ['country' => $skill->id])}}"
                           class="fancybox fancybox.iframe edit-link">Edit Info</a>
                    </div>
                        @endforeach
                </div>
            </div>
    </div>
    </div>
    </section>
 @push('scripts')
     <script src="{{ url('/') }}/assets/fancybox/jquery.fancybox.js"></script>
     <link rel="stylesheet" href="{{ url('/') }}/assets/fancybox/jquery.fancybox.css">
    <script type="text/javascript">
         $(document).ready(function () {
             /* This is basic - uses default settings */
             $('.fancybox').fancybox({
                 helpers: {title: null},
                 width: 600,
                 height: 600,
                 fitToView   : true,
                 autoSize    : true,
                 padding: 0,
                 openEffect: 'elastic',
                 closeBtn : true,
                 afterClose  : function() {
                     window.location.reload();
                 }
             });


         });
     </script>
     <script>
         function readURL(input) {
             if (input.files && input.files[0]) {
                 var reader = new FileReader();

                 reader.onload = function (e) {
                     $('#blah')
                         .attr('src', e.target.result);
                 };

                 reader.readAsDataURL(input.files[0]);
             }
         }
     </script>

 @endpush

@stop