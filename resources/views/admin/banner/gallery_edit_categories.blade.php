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
                        <form method="post" id="" class="form-horizontal" action="{{url('admin/updategallerycategories')}}" accept-charset="UTF-8" enctype="multipart/form-data" onsubmit="return redirectMe();">

                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{$category->id}}" />
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Category<span style="color: red;">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="title" class="form-control" value="{{$category->title}}" required>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            
                              <div class="form-group">
                                <label class="col-sm-4 control-label">Slug<span style="color: red;">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="slug" class="form-control" value="{{$category->slug}}" readonly required>
                                    <span class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-actions"><br>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
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