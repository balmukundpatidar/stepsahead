@extends('admin.layouts.admin')
@section('content')
    <!-- BEGIN MAIN PAGE CONTENT -->
    <div id="page-wrapper">
        <!-- BEGIN PAGE HEADING ROW -->
        <div class="row">
            <div class="col-lg-12">


                <div class="page-header title">
                    <!-- PAGE TITLE ROW -->
                    <h1>About <span class="sub-title">Us</span></h1>
                </div>


            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <!-- END PAGE HEADING ROW -->
        <div class="row">
            <div class="col-lg-12">

                <!-- START YOUR CONTENT HERE -->
                <div class="row">
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
                    <form class="form-horizontal" role="form" method="post" action="{{route('admin::about')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="col-lg-9 col-md-9">
                            <div class="tc-tabs"><!-- Nav tabs style 1 -->
                                <ul class="nav nav-tabs tab-lg-button tab-color-dark background-dark white">
                                    <li class="active"><a href="#p2" data-toggle="tab"><i class="fa fa-edit bigger-130"></i>About Us</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="p2">

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Title:<span style="color: red;">*</span></label>
                                            <div class="col-sm-8">
                                                <input type="text" name="title" class="form-control" value="{{$title}}" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Description:<span style="color: red;">*</span></label>
                                            <div class="col-sm-9">
                                                <textarea name="description" class="form-control">{{$desc}}</textarea>

                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div><!--nav-tabs style 1-->
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="well well-sm white">
                                <div class="profile-pic">
                                    <a href="#">
                                        <img  id="blah" src="{{url('/')}}/uploads/posts/{{$image}}" class="img-responsive"  alt="">
                                    </a>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <input type='file' class="form-control" name="image" onchange="readURL(this);" />
                                        </div>
                                    </div>
                                </div>


                            </div>


                        </div>

                    </form>
                </div>
                <!-- END YOUR CONTENT HERE -->

            </div>
        </div>
        @push('scripts')
            <script src="{{url('/')}}/assets/js/plugins/datetime/bootstrap-datetimepicker.min.js"></script>
            <script src="{{url('/')}}/assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
            <script src="{{url('/')}}/assets/js/plugins/select2/select2.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#smartselect").select2({
                        placeholder: "Select a Option"
                    });
                    $('.datepicker').datepicker({
                        //language:  'fr',
                        weekStart: 1,
                        todayBtn:  1,
                        autoclose: 1,
                        todayHighlight: 1,
                        startView: 2,
                        forceParse: 0,
                        showMeridian: 1
                    });

                });
            </script>
            <script>
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#blah')
                                .attr('src', e.target.result);
                        };

                        reader.readAsDataURL(input.files[0]);
                    }
                }
            </script>
            <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=mw0r3mww0h0kl64lbgekpe7ema0folrutuyika6u4jfmgys5"></script>
            <script>tinymce.init({ selector:'textarea' });</script>
    @endpush
@stop