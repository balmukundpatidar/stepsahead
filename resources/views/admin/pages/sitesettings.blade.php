@extends('admin.layout.layout')
@section('content')
    <div class="main-content">

        <div class="breadcrumbs">
            <ul>
                <li><a href="#/" title="">Home</a></li>
                <li><a href="{{url('admin/site-setting')}}" title="">Site Setting</a></li>
            </ul>
        </div>

        <div class="heading-sec">
            <div class="row">
                <div class="col-md-4 column">
                    <div class="heading-profile">
                        <h2>Site Setting</h2>
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
				
                    <form method="post" id="" class="form-horizontal" action="{{url('admin/update-site-setting')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="POST">
                        <input type="hidden" name="id" value="{{$info->id}}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            @if ($info->header_logo != '')
                            <img src="{{url('/')}}/jobs/images/{{$info->header_logo}}" style=""/>
                            @else
                            <img src="{{url('/')}}/jobs/images/default.jpg" style="height:200px;width:500px;"/>
                            @endif
                        </div>
                        
						<div class="form-group">
                            <label class="col-sm-4 control-label">Header logo<span style="color: red;">*</span></label>
                            <div class="col-sm-8">
                                <input type="file" name="header_logo" class="form-control" value="{{$info->header_logo}}">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            @if ($info->footer_logo != '')
                            <img src="{{url('/')}}/jobs/images/{{$info->footer_logo}}" style=""/>
                            @else
                            <img src="{{url('/')}}/jobs/images/default.jpg" style="height:200px;width:500px;"/>
                            @endif
                        </div>
                        
						<div class="form-group">
                            <label class="col-sm-4 control-label">Footer logo<span style="color: red;">*</span></label>
                            <div class="col-sm-8">
                                <input type="file" name="footer_logo" class="form-control" value="{{$info->header_logo}}">
                                <span class="help-block"></span>
                            </div>
                        </div>
					     
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Address<span style="color: red;">*</span></label>
                            <div class="col-sm-8">
                                <input type="tel" required name="adress" class="form-control" value="{{$info->adress}}">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Phone Number 1 <span style="color: red;">*</span></label>
                            <div class="col-sm-8">
                                <input type="tel" required name="phone_number_1" class="form-control" value="{{$info->phone_number_1}}">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Phone Number 2 <span style="color: red;">*</span></label>
                            <div class="col-sm-8">
                                <input type="tel" required name="phone_number_2" class="form-control" value="{{$info->phone_number_2}}">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Email 1 <span style="color: red;">*</span></label>
                            <div class="col-sm-8">
                                <input type="email" required name="email_1" class="form-control" value="{{$info->email_1}}">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Email 2 <span style="color: red;">*</span></label>
                            <div class="col-sm-8">
                                <input type="email" required name="email_2" class="form-control" value="{{$info->email_2}}">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Facebook URL  <span style="color: red;">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" required name="facebook_url" class="form-control" value="{{$info->facebook_url}}">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Twitter URL<span style="color: red;">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" required name="twitter_url" class="form-control" value="{{$info->twitter_url}}">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Instagram URL <span style="color: red;">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" required name="instagram_url" class="form-control" value="{{$info->instagram_url}}">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Copyright<span style="color: red;">*</span></label>
                            <div class="col-sm-8">
                                <textarea placeholder="copyright" id="content" name="copyright" class="form-control">{{$info->copyright}}</textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Twitter Feeds<span style="color: red;">*</span></label>
                            <div class="col-sm-8">
                                <textarea placeholder="tweets_feeds" name="tweets_feeds" class="form-control">{{$info->tweets_feeds}}</textarea>
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