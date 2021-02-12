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
				
                    <form method="post" id="" class="form-horizontal" action="{{url('admin/updateaboutus')}}" accept-charset="UTF-8" enctype="multipart/form-data">
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
                            <label class="control-label">First Section Left Content<span style="color: red;">*</span></label>
                            <div class="">
                                <textarea placeholder="Description" id="content" name="text_1" class="form-control">{{$info->text_1}}</textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>
						<div class="form-group">
                        @if ($info->image_1 != '')
                        <img src="{{url('/')}}/jobs/images/{{$info->image_1}}" style="height:500;width:500px;"/>
                        @else
                        <img src="{{url('/')}}/jobs/images/default.jpg" style="height:200px;width:500px;"/>
                        @endif
                        </div>
                        
						<div class="form-group">
                            <label class="control-label">First Section Right Image<span style="color: red;">*</span></label>
                            <div class="">
                                <input type="file" name="image_1" class="form-control" value="{{$info->image_1}}">
                                <span class="help-block"></span>
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label class="control-label">Second Section Right Content<span style="color: red;">*</span></label>
                            <div class="">
                                <textarea placeholder="Description" id="content" name="text_2" class="form-control">{{$info->text_2}}</textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                        @if ($info->image_2 != '')
                        <img src="{{url('/')}}/jobs/images/{{$info->image_2}}" style="height:500;width:500px;"/>
                        @else
                        <img src="{{url('/')}}/jobs/images/default.jpg" style="height:200px;width:500px;"/>
                        @endif
                        </div>
                        
						<div class="form-group">
                            <label class="control-label">Second Section Right Image<span style="color: red;">*</span></label>
                            <div class="">
                                <input type="file" name="image_2" class="form-control" value="{{$info->image_2}}">
                                <span class="help-block"></span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label">Document 1 Title<span style="color: red;">*</span></label>
                            <div class="">
                                <input type="text" name="pdf_1_title" class="form-control" value="{{$info->pdf_1_title}}">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Upload Document 1 <span style="color: red;">*</span></label>
                            <div class="">
                                <input type="file" name="pdf_1_url" class="form-control" value="{{$info->pdf_1_url}}">
                                <span class="help-block">{{$info->pdf_1_url}}</span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label">Document 2 Title<span style="color: red;">*</span></label>
                            <div class="">
                                <input type="text" name="pdf_2_title" class="form-control" value="{{$info->pdf_2_title}}">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Upload Document 2 <span style="color: red;">*</span></label>
                            <div class="">
                                <input type="file" name="pdf_2_url" class="form-control" value="{{$info->pdf_2_url}}">
                                <span class="help-block">{{$info->pdf_2_url}}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Document 3 Title<span style="color: red;">*</span></label>
                            <div class="">
                                <input type="text" name="pdf_3_title" class="form-control" value="{{$info->pdf_3_title}}">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Upload Document 3 <span style="color: red;">*</span></label>
                            <div class="">
                                <input type="file" name="pdf_3_url" class="form-control" value="{{$info->pdf_3_url}}">
                                <span class="help-block">{{$info->pdf_3_url}}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Document 4 Title<span style="color: red;">*</span></label>
                            <div class="">
                                <input type="text" name="pdf_4_title" class="form-control" value="{{$info->pdf_4_title}}">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Upload Document 4 <span style="color: red;">*</span></label>
                            <div class="">
                                <input type="file" name="pdf_4_url" class="form-control" value="{{$info->pdf_4_url}}">
                                <span class="help-block">{{$info->pdf_4_url}}</span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label">Document 5 Title<span style="color: red;">*</span></label>
                            <div class="">
                                <input type="text" name="pdf_5_title" class="form-control" value="{{$info->pdf_5_title}}">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Upload Document 5 <span style="color: red;">*</span></label>
                            <div class="">
                                <input type="file" name="pdf_5_url" class="form-control" value="{{$info->pdf_5_url}}">
                                <span class="help-block">{{$info->pdf_5_url}}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Document 6 Title<span style="color: red;">*</span></label>
                            <div class="">
                                <input type="text" name="pdf_6_title" class="form-control" value="{{$info->pdf_6_title}}">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Upload Document 6 <span style="color: red;">*</span></label>
                            <div class="">
                                <input type="file" name="pdf_6_url" class="form-control" value="{{$info->pdf_6_url}}">
                                <span class="help-block">{{$info->pdf_6_url}}</span>
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