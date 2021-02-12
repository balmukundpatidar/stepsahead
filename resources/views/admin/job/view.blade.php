@extends('admin.layouts.admin')
@section('content')
    <!-- BEGIN MAIN PAGE CONTENT -->
    <div id="page-wrapper">
        <!-- BEGIN PAGE HEADING ROW -->
        <div class="row">
            <div class="col-lg-12">


                <div class="page-header title">
                    <!-- PAGE TITLE ROW -->
                    <h1>View <span class="sub-title">Vacancies</span></h1>
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
                        <form method="post" id="" class="form-horizontal" action="#" accept-charset="UTF-8" enctype="multipart/form-data">
                        <div class="col-lg-8 col-md-8">
                            <div class="tc-tabs"><!-- Nav tabs style 1 -->
                                <ul class="nav nav-tabs tab-lg-button tab-color-dark background-dark white">
                                    <li class="active"><a href="#p2" data-toggle="tab"><i class="fa fa-edit bigger-130"></i>View Vacancies</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="p2">

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Title<span style="color: red;">*</span></label>
                                            <div class="col-sm-8">
                                                <input type="text" name="title" class="form-control" value="{{$info->job_title}}" required>
                                                <span class="help-block"></span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Description<span style="color: red;">*</span></label>
                                            <div class="col-sm-9">
                                                <textarea name="description" class="form-control">{{$info->job_description}}</textarea>
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Location:<span style="color: red;">*</span></label>
                                            <div class="col-sm-8">
                                                <input type="text" name="location" class="form-control" value="{{$info->job_location}}" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Qualification:<span style="color: red;">*</span></label>
                                            <div class="col-sm-8">
                                                <input type="text" name="qualification" class="form-control" value="{{$info->job_qualification}}" required>
                                                <span class="help-block"></span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Skills Requirement<span style="color: red;">*</span></label>
                                            <div class="col-sm-9">
                                                <textarea name="skills" class="form-control" required>{{$info->skills_requirement}}</textarea>
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <hr class="separator">


                                    </div>
                                </div>
                            </div><!--nav-tabs style 1-->
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="well well-sm white">

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Vacancies Valid<span style="color: red;">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="job_valid" class="form-control datepicker" value="{{$info->job_valid_upto}}" required>
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-5 control-label">Category:<span style="color: red;">*</span></label>
                                    <div class="col-sm-7">
                                        <select name="category" class="form-control">
                                            @foreach($category as $cat)
                                                <option value="{{$cat->id}}" @if($info->category_id == $cat->id) selected="selected" @endif>{{$cat->cat_title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-5 control-label">Vacancies Type:<span style="color: red;">*</span></label>
                                    <div class="col-sm-7">
                                        <select name="job_type" class="form-control">
                                            <option value="Full Time" @if ($info->job_type == 'Full Time') selected="selected" @endif>Full Time</option>
                                            <option value="Part Time" @if ($info->job_type == 'Part Time') selected="selected" @endif>Part Time</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-5 control-label">External Link:</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="link" class="form-control" value="{{$info->job_external_link}}">
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
            <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=qy2h6okuocgaczxp1jgh0bmnemejertm52yxt85159gas0b4"></script>
            <script>tinymce.init({ selector:'textarea' });</script>
@endpush
@stop