@extends('job.layout.layout')
@section('content')
    {{--<section class="page-header projects-header center">--}}
        {{--<div class="row">--}}
            {{--<div class="small-12 medium-4 medium-push-4 center columns">--}}
                {{--<form class="form-search-header ">--}}
                    {{--<input type="text" value="" name="search-term" placeholder="Keyword" class="required" required>--}}
                    {{--<input type="submit" value="Search" name="subscribe" id="" class="button green">--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--style="padding: 0px"--}}
    <section class="project-section">
        <div class="row">
            <div class="small-12 columns">
                <div class="small-12 medium-9 column">
                    <div class="project-wrap white">
                        <img src="{{url('/')}}/uploads/blog/{{$blog->blog_image}}" style="width: 100%;height: 361px;"/>
                        <div class="inner">
                            {{--<div class="project-header">--}}
                                {{--<h2 class="job-title">{{$blog->blog_title}}</h2>--}}
                           {{--</div>--}}
                            <div class="job-description">
                                <h3 class="project-description">{{$blog->blog_title}}</h3>
                                <div class="content">
                                    <p>{{$blog->blog_description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="small-12 medium-3 project-right-col column transparent">
                    <div class="right-col-inner">
                        <div class="featured-jobs">
                            <h3 class="title">Recent Blogs</h3>
                            @foreach($feature_blogs as $feature_blog)
                            <div class="container white">
                                <a href="{{route('blog_details',['job_id'=>$feature_blog->id])}}">
                                <h4>{{$feature_blog->blog_title}}</h4>
                                <p>{{substr($feature_blog->blog_description,0,50)}}</p>
                                </a>
                            </div>
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--<style class="cp-pen-styles">--}}
        {{--html, body {--}}
            {{--background-color: #f0f2fa;--}}
            {{--font-family: "PT Sans", "Helvetica Neue", "Helvetica", "Roboto", "Arial", sans-serif;--}}
            {{--color: #555f77;--}}
            {{---webkit-font-smoothing: antialiased;--}}
        {{--}--}}

        {{--input, textarea {--}}
            {{--outline: none;--}}
            {{--border: none;--}}
            {{--display: block;--}}
            {{--margin: 0;--}}
            {{--padding: 0;--}}
            {{---webkit-font-smoothing: antialiased;--}}
            {{--font-family: "PT Sans", "Helvetica Neue", "Helvetica", "Roboto", "Arial", sans-serif;--}}
            {{--font-size: 1rem;--}}
            {{--color: #555f77;--}}
        {{--}--}}
        {{--input::-webkit-input-placeholder, textarea::-webkit-input-placeholder {--}}
            {{--color: #ced2db;--}}
        {{--}--}}
        {{--input::-moz-placeholder, textarea::-moz-placeholder {--}}
            {{--color: #ced2db;--}}
        {{--}--}}
        {{--input:-moz-placeholder, textarea:-moz-placeholder {--}}
            {{--color: #ced2db;--}}
        {{--}--}}
        {{--input:-ms-input-placeholder, textarea:-ms-input-placeholder {--}}
            {{--color: #ced2db;--}}
        {{--}--}}

        {{--p {--}}
            {{--line-height: 1.3125rem;--}}
        {{--}--}}

        {{--.comments {--}}
            {{--margin: 2.5rem auto 0;--}}
            {{--max-width: 60.75rem;--}}
            {{--padding: 0 1.25rem;--}}
        {{--}--}}

        {{--.comment-wrap {--}}
            {{--margin-bottom: 1.25rem;--}}
            {{--display: table;--}}
            {{--width: 100%;--}}
            {{--min-height: 5.3125rem;--}}
        {{--}--}}

        {{--.photo {--}}
            {{--padding-top: 0.625rem;--}}
            {{--display: table-cell;--}}
            {{--width: 3.5rem;--}}
        {{--}--}}
        {{--.photo .avatar {--}}
            {{--height: 2.25rem;--}}
            {{--width: 2.25rem;--}}
            {{--border-radius: 50%;--}}
            {{--background-size: contain;--}}
        {{--}--}}

        {{--.comment-block {--}}
            {{--padding: 1rem;--}}
            {{--background-color: #fff;--}}
            {{--display: table-cell;--}}
            {{--vertical-align: top;--}}
            {{--border-radius: 0.1875rem;--}}
            {{--box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.08);--}}
        {{--}--}}
        {{--.comment-block textarea {--}}
            {{--width: 100%;--}}
            {{--resize: none;--}}
        {{--}--}}

        {{--.comment-text {--}}
            {{--margin-bottom: 1.25rem;--}}
        {{--}--}}

        {{--.bottom-comment {--}}
            {{--color: #acb4c2;--}}
            {{--font-size: 0.875rem;--}}
        {{--}--}}

        {{--.comment-date {--}}
            {{--float: left;--}}
        {{--}--}}

        {{--.comment-actions {--}}
            {{--float: right;--}}
        {{--}--}}
        {{--.comment-actions li {--}}
            {{--display: inline;--}}
            {{--margin: -2px;--}}
            {{--cursor: pointer;--}}
        {{--}--}}
        {{--.comment-actions li.complain {--}}
            {{--padding-right: 0.75rem;--}}
            {{--border-right: 1px solid #e1e5eb;--}}
        {{--}--}}
        {{--.comment-actions li.reply {--}}
            {{--padding-left: 0.75rem;--}}
            {{--padding-right: 0.125rem;--}}
        {{--}--}}
        {{--.comment-actions li:hover {--}}
            {{--color: #0095ff;--}}
        {{--}--}}
    {{--</style>--}}
    {{--<div class="comments">--}}
        {{--<div class="comment-wrap">--}}
            {{--<div class="photo">--}}
                {{--<div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg')"></div>--}}
            {{--</div>--}}
            {{--<div class="comment-block">--}}
                {{--<form action="">--}}
                    {{--<textarea name="" id="" cols="30" rows="3" placeholder="Add comment..."></textarea>--}}
                    {{--<button class="button green" style="float: right">Comment</button>--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}


        {{--<div class="comment-wrap">--}}
            {{--<div class="photo">--}}
                {{--<div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg')"></div>--}}
            {{--</div>--}}
            {{--<div class="comment-block">--}}
                {{--<p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto temporibus iste nostrum dolorem natus recusandae incidunt voluptatum. Eligendi voluptatum ducimus architecto tempore, quaerat explicabo veniam fuga corporis totam reprehenderit quasi--}}
                    {{--sapiente modi tempora at perspiciatis mollitia, dolores voluptate. Cumque, corrupti?</p>--}}
                {{--<div class="bottom-comment">--}}
                    {{--<div class="comment-date">Aug 24, 2014 @ 2:35 PM</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="comment-wrap">--}}
            {{--<div class="photo">--}}
                {{--<div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/felipenogs/128.jpg')"></div>--}}
            {{--</div>--}}
            {{--<div class="comment-block">--}}
                {{--<p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto temporibus iste nostrum dolorem natus recusandae incidunt voluptatum. Eligendi voluptatum ducimus architecto tempore, quaerat explicabo veniam fuga corporis totam.</p>--}}
                {{--<div class="bottom-comment">--}}
                    {{--<div class="comment-date">Aug 23, 2014 @ 10:32 AM</div>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    </div>

@stop
