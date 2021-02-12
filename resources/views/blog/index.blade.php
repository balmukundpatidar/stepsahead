@extends('job.layout.layout')
@section('content')
   <style>
       @import url(https://fonts.googleapis.com/css?family=Raleway:400,900,700,600,500,300,200,100,800);

       section{
           padding:60px 0px;
           font-family: 'Raleway', sans-serif;
       }

       h2 {
           color: #4C4C4C;
           word-spacing: 5px;
           font-size: 30px;
           font-weight: 700;
           margin-bottom:30px;
           font-family: 'Raleway', sans-serif;
       }
       p{
           color: #4C4C4C;
       }

       .ion-minus{
           padding:0px 10px;
       }

       #blog{
           background-color:#f6f6f6;
       }

       #blog .blog.column a{
           color:#a3dfbf;
           text-decoration:none;
       }

       #blog img:hover {
           opacity:0.8;
       }

   </style>
    <section id="blog">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 text-center">
                    <h2><span class="ion-minus"></span>Blog Posts<span class="ion-minus"></span></h2>
                </div>
            </div>

            <div class="row">
                @foreach($blogs as $blog)

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" data-aos="fade-right">
                    <div class="blog column text-center">
                        <img src="{{url('/')}}/uploads/blog/{{$blog->blog_image}}" alt="" width="100%">
                        <h4 style="color: black">{{$blog->blog_title}}</h4>
                        <p>{{substr($blog->blog_description,0,50)}}</p>
                        <a href="{{route('blog_details',['id'=>$blog->id])}}">Read More</a>
                    </div>
                </div>
                    @endforeach




            </div>  <!-- row -->
            {{$blogs->render()}}

        </div>
    </section>
    @stop