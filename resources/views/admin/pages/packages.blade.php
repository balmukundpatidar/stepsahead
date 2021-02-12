@extends('admin.layout.layout')
@section('content')
    <div class="main-content">

        <div class="breadcrumbs">
            <ul>
                <li><a href="#/" title="">Home</a></li>
                <li><a href="{{url('admin/packages')}}" title="">Packages</a></li>
            </ul>
        </div>

        <div class="heading-sec">
            <div class="row">
                <div class="col-md-4 column">
                    <div class="heading-profile">
                        <h2>Packages</h2>
                    </div>
                </div>
                <div class="col-md-8 column">
                    <div class="top-bar-chart">
                        <div class="quick-report">
                            <div class="quick-report-infos">
                            </div>
                        </div>
                    </div><!-- Top Bar Chart -->
                </div>
            </div>
        </div><!-- Top Bar Chart -->

        <div class="panel-content">
            <div class="row">
               <div class="row">
                <div class="col-md-12">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif
				
                    <form method="post" id="" class="form-horizontal" action="{{url('admin/updatepackages')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="POST">
                        <input type="hidden" name="id" value="{{$info->id}}">
                        {{ csrf_field() }}
						
                        <div class="form-group">
                            <label class="control-label">Title<span style="color: red;">*</span></label>
                            <div class="">
                                <input type="text" name="title" class="form-control" value="{{$info->title}}" required>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Description<span style="color: red;">*</span></label>
                            <div class="">
                                <textarea placeholder="Description" id="content" name="description" class="form-control">{{$info->description}}</textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>
						<div class="form-group">
                        
                        @if ($info->banner_image != '')
                        <img src="{{url('/')}}/jobs/images/{{$info->banner_image}}" style="height:500;width:500px;"/>
                        @else
                        <img src="{{url('/')}}/jobs/images/default.jpg" style="height:200px;width:500px;"/>
                        @endif

                        </div>
						<div class="form-group">
                            <label class="control-label">Banner Image</label>
                            <div class="">
                                <input type="file" name="banner_image" class="form-control" value="{{$info->banner_image}}">
                                <span class="help-block"></span>
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label class="control-label">First Section Heading <span style="color: red;">*</span></label>
                            <div class="">
                                <input type ="text" placeholder="Heading" id="content" name="section_1_heading" class="form-control" value="{{$info->section_1_heading}}">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">First Section Content <span style="color: red;">*</span></label>
                            <div class="">
                                <textarea placeholder="Description" id="content" name="section_1_desc" class="form-control">{{$info->section_1_desc}}</textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>
						<div class="form-group">
                            @if ($info->section_1_img != '')
                            <img src="{{url('/')}}/jobs/images/{{$info->section_1_img}}" style="height:500;width:500px;"/>
                            @else
                            <img src="{{url('/')}}/jobs/images/default.jpg" style="height:200px;width:500px;"/>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="control-label">First Section Image<span style="color: red;">*</span></label>
                            <div class="">
                                <input type="file" name="section_1_img" class="form-control" value="{{$info->section_1_img}}">
                                <span class="help-block"></span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label">Second Section Heading <span style="color: red;">*</span></label>
                            <div class="">
                                <input type ="text" placeholder="Heading" id="content" name="section_2_heading" class="form-control" value="{{$info->section_2_heading}}">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Second Section Content <span style="color: red;">*</span></label>
                            <div class="">
                                <textarea placeholder="Description" id="content" name="section_2_desc" class="form-control">{{$info->section_2_desc}}</textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>
						<div class="form-group">
                            @if ($info->section_2_img != '')
                            <img src="{{url('/')}}/jobs/images/{{$info->section_2_img}}" style="height:500;width:500px;"/>
                            @else
                            <img src="{{url('/')}}/jobs/images/default.jpg" style="height:200px;width:500px;"/>
                            @endif
                        </div>
                        
						<div class="form-group">
                            <label class="control-label">Second Section Image<span style="color: red;">*</span></label>
                            <div class="">
                                <input type="file" name="section_2_img" class="form-control" value="{{$info->section_2_img}}">
                                <span class="help-block"></span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label">Third Section Heading <span style="color: red;">*</span></label>
                            <div class="">
                                <input type ="text" placeholder="Heading" id="content" name="section_3_heading" class="form-control" value="{{$info->section_3_heading}}">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Third Section Content <span style="color: red;">*</span></label>
                            <div class="">
                                <textarea placeholder="Description" id="content" name="section_3_desc" class="form-control">{{$info->section_3_desc}}</textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>
						<div class="form-group">
                            @if ($info->section_3_img != '')
                            <img src="{{url('/')}}/jobs/images/{{$info->section_3_img}}" style="height:500;width:500px;"/>
                            @else
                            <img src="{{url('/')}}/jobs/images/default.jpg" style="height:200px;width:500px;"/>
                            @endif
                        </div>
                        
						<div class="form-group">
                            <label class="control-label">Third Section Image<span style="color: red;">*</span></label>
                            <div class="">
                                <input type="file" name="section_3_img" class="form-control" value="{{$info->section_3_img}}">
                                <span class="help-block"></span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label">Fourth Section Heading <span style="color: red;">*</span></label>
                            <div class="">
                                <input type ="text" placeholder="Heading" id="content" name="section_4_heading" class="form-control" value="{{$info->section_4_heading}}">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Fourth Section Content <span style="color: red;">*</span></label>
                            <div class="">
                                <textarea placeholder="Description" id="content" name="section_4_desc" class="form-control">{{$info->section_4_desc}}</textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>
						<div class="form-group">
                            @if ($info->section_4_img != '')
                            <img src="{{url('/')}}/jobs/images/{{$info->section_4_img}}" style="height:500;width:500px;"/>
                            @else
                            <img src="{{url('/')}}/jobs/images/default.jpg" style="height:200px;width:500px;"/>
                            @endif
                        </div>
                        
						<div class="form-group">
                            <label class="control-label">Fourth Section Image<span style="color: red;">*</span></label>
                            <div class="">
                                <input type="file" name="section_4_img" class="form-control" value="{{$info->section_4_img}}">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Seo Keywords <span style="color: red;">*</span></label>
                            <div class="">
                                <input type="text" required name="seo_keyword" class="form-control" value="{{$info->seo_keyword}}">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Seo Description <span style="color: red;">*</span></label>
                            <div class="">
                                <input type="text" required name="seo_description" class="form-control" value="{{$info->seo_description}}">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        
                        <div class="form-actions"><br>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn" name="Submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div> 
            </div>
        </div><!-- Panel Content -->
    </div><!-- Main Content -->
    @push('scripts')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        {{--<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">--}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#Datatable').DataTable();
                $('.fancybox').fancybox({
                    helpers: {title: null},
                    width: 600,
                    height: 600,
                    fitToView   : true,
                    autoSize    : true,
                    padding: 0,
                    openEffect: 'elastic',
                    afterClose  : function() {
                        window.location.reload();
                    }
                });
            });
        </script>
    @endpush

@stop