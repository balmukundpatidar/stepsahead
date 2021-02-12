@extends('admin.layouts.fancybox')
@section('content')
    <div id="page-wrapper">
        <!-- BEGIN PAGE HEADING ROW -->
        <div class="row">
            <div class="col-lg-12">

                <div class="page-header title">
                    <!-- PAGE TITLE ROW -->
                    <h1>Edit <span class="sub-title">Cover Letter</span></h1>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- END PAGE HEADING ROW -->
        <div class="row">
            <div class="col-lg-12">

                <!-- START YOUR CONTENT HERE -->
                <div class="row">
                    <div class="col-lg-12 col-sm-12">

                        <div class="portlet">
                            <div class="portlet-heading default-bg">
                                <div class="portlet-title">
                                    <h4>Cover Letter</h4>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="f-3" class="panel-collapse collapse in">
                                <div class="portlet-body">
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

                                    <form method="post" id="" class="form-horizontal" action="" accept-charset="UTF-8" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Cover Letter<span style="color: red;">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea  class="form-control" rows="20">{{$info}}</textarea>
                                                <span class="help-block"></span>
                                            </div>
                                        </div>



                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
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
                    $('.datepicker').datetimepicker({
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
    @endpush
@stop