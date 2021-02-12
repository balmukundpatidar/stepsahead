@extends('admin.layout.fancybox')
@section('content')
    <div class="main-content">

        <div class="panel-content">
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

                    <form method="post" id="" class="form-horizontal" action="{{url('admin/updatebanner')}}" accept-charset="UTF-8" enctype="multipart/form-data" onsubmit="return redirectMe();">
                        <input type="hidden" name="_method" value="POST">
                        {{ csrf_field() }}
						<div class="form-group">
                            <img src="{{url('/')}}/jobs/images/{{$info->banner_image}}" style="width:100%;"/>
                        </div>
						 <div class="form-group">
                            <label class="col-sm-4 control-label">Image</label>
                            <div class="col-sm-8">
                                <input type="file" name="image" class="form-control" value="{{$info->banner_image}}">
                                <span class="help-block"></span>
                            </div>
                        </div>
						
                        <!--<div class="form-group">-->
                            <!--<label class="col-sm-4 control-label">Title<span style="color: red;">*</span></label>--/>
                        <!--    <div class="col-sm-8">-->
                                <input type="hidden" name="banner_text1" class="form-control" value="{{$info->banner_text1}}" required>
                        <!--        <span class="help-block"></span>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="form-group">-->
                            <!--<label class="col-sm-4 control-label">Subtitle<span style="color: red;">*</span></label>--/>
                        <!--    <div class="col-sm-8">-->
                                <input type="hidden" name="banner_text2" class="form-control" value="{{$info->banner_text2}}" required>
                        <!--        <span class="help-block"></span>-->
                        <!--    </div>-->
                        <!--</div>-->

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Content<span style="color: red;">*</span></label>-/->
                            <div class="col-sm-8">
                                <input type="hidden" name="down_text" id="description" class="form-control" value="{{$info->banner_text2}}" required>
                                <textarea placeholder="Description" id="description" name="down_text" class="form-control auto_generate_link_from">{{$info->down_text}}</textarea>
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
        </div><!-- Panel Content -->

    </div><!-- Main Content -->



@push('scripts')
	<script>
        function redirectMe() {
            true;
           // parent.jQuery.fancybox.close();
        }
    </script>
@endpush
@stop