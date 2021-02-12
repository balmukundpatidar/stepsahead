@extends('admin.layout.layout')
@section('content')
    <div class="main-content">

        <div class="breadcrumbs">
            <ul>
                <li><a href="#/" title="">Home</a></li>
                <li><a href="{{url('admin/knowledge_center')}}" title="">About Us</a></li>
            </ul>
        </div>

        <div class="heading-sec">
            <div class="row">
                <div class="col-md-4 column">
                    <div class="heading-profile">
                        <h2>About Us</h2>
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
				
                    <form method="post" id="" class="form-horizontal" action="{{url('admin/updateabout')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="POST">
                        <input type="hidden" name="care_id" value="{{$info->id}}">
                        {{ csrf_field() }}
						
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Title<span style="color: red;">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" name="title" class="form-control" value="{{$info->title}}" required>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Description<span style="color: red;">*</span></label>
                            <div class="col-sm-8">
                                <textarea placeholder="Description" id="content" name="description" class="form-control">{{$info->description}}</textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>
						<div class="form-group">
                            <img src="{{url('/')}}/jobs/images/{{$info->banner_image}}" style="height:200px;width:500px;"/>
                        </div>
						<div class="form-group">
                            <label class="col-sm-4 control-label">Image</label>
                            <div class="col-sm-8">
                                <input type="file" name="banner_image" class="form-control" value="{{$info->banner_image}}">
                                <span class="help-block"></span>
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Text 1<span style="color: red;">*</span></label>
                            <div class="col-sm-8">
                                <textarea placeholder="Description" id="content" name="text_1" class="form-control">{{$info->text_1}}</textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>
						<div class="form-group">
                            <img src="{{url('/')}}/jobs/images/{{$info->banner_image}}" style="height:200px;width:500px;"/>
                        </div>
						<div class="form-group">
                            <label class="col-sm-4 control-label">Image</label>
                            <div class="col-sm-8">
                                <input type="file" name="banner_image" class="form-control" value="{{$info->banner_image}}">
                                <span class="help-block"></span>
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Text<span style="color: red;">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" name="text_1" class="form-control" value="{{$info->text_2}}" required>
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