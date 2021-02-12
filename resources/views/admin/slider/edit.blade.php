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

                    <form method="post" id="" class="form-horizontal" action="{{route('admin::slider.update',['city' => $info->id])}}" accept-charset="UTF-8" enctype="multipart/form-data" onsubmit="return redirectMe();">
                        <input type="hidden" name="_method" value="PUT">

                        {{ csrf_field() }}


                        <div class="form-group">
                            <label class="col-sm-4 control-label">Title<span style="color: red;">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" name="title" class="form-control" value="{{$info->slider_title}}" required>
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Description<span style="color: red;">*</span></label>
                            <div class="col-sm-8">
                                <textarea placeholder="Description" id="description" name="description" class="form-control auto_generate_link_from">{{$info->slider_desc}}</textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Image</label>
                            <div class="col-sm-8">
                                <input type="file" name="image" class="form-control" value="{{$info->slider_image}}">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div>
                            <img src="{{url('/')}}/uploads/slider/{{$info->slider_image}}" style="height:200px;width:500px;"/>
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
            parent.jQuery.fancybox.close();
        }
    </script>
@endpush
@stop