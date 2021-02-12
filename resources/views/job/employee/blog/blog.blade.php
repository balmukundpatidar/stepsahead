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
                            <h3 class="background-title container">Blog <a href="{{route('employee::blog.create')}}" class="fancybox fancybox.iframe new-link" data-section="experience">New</a></h3></div>
                        @foreach($blogs as $blog)
                            <div class="experience-item container edit-wrap">
                                <h3 class="experience-item-title">
                                    <p class="profile-name edit-wrap"><span class="edit-content" data-id="short-description">
                                            <img  src="{{url('/')}}/uploads/blog/{{$blog->blog_image}}" alt="blog image" height="150px" width="150px"/>


                                        </span></p>
                                    <span class="edit-content"  data-id='background-title'>{{$blog->blog_title}}</span> <a href="{{route('employee::blog.edit', ['country' => $blog->id])}}" class="fancybox fancybox.iframe edit-link">Edit Info</a></h3>
                             <div class="content edit-content text-area"  data-id='background-description'>
                                {{$blog->blog_description}}                            </div>
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