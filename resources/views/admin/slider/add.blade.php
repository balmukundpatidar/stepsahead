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

                    <form method="post" id="" class="form-horizontal" action="{{route('admin::slider.store')}}" accept-charset="UTF-8" enctype="multipart/form-data" onsubmit="return redirectMe();">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Title<span style="color: red;">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" name="title" class="form-control" value="{{old('title')}}" required>
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Description<span style="color: red;">*</span></label>
                            <div class="col-sm-8">
                                <textarea placeholder="Description" id="description" name="description" class="form-control">{{old('description')}}</textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Image<span style="color: red;">*</span></label>
                            <div class="col-sm-8">
                                <input type="file" name="image" class="form-control" value="{{old('image')}}" required>
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
                parent.jQuery.fancybox.close();
            }
        </script>
    @endpush
@stop