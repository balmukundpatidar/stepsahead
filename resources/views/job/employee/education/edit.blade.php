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

                                <form method="post" id="" class="form-horizontal" action="{{route('employee::education.update',['city' => $info->id])}}" accept-charset="UTF-8" enctype="multipart/form-data">

                                    <input type="hidden" name="_method" value="PUT">
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Qualification<span style="color: red;">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="edu_name" class="form-control" value="{{$info->edu_qualification}}" required>
                                            <span class="help-block"></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">City<span style="color: red;">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="edu_city" class="form-control" value="{{$info->edu_city}}" required>
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Institute Name<span style="color: red;">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="edu_institute" class="form-control" value="{{$info->edu_institute}}" required>
                                            <span class="help-block"></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Date From<span style="color: red;">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="edu_date_from" class="form-control" value="{{$info->edu_date_from}}" required>
                                            <span class="help-block"></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Date To<span style="color: red;">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="edu_date_to" class="form-control" value="{{$info->edu_date_to}}" required>
                                            <span class="help-block"></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Subject Taken</label>
                                        <div class="col-sm-8">
                                            <textarea name="edu_subject"  class="form-control" placeholder="Subject Taken">{{$info->edu_subject}}</textarea>

                                            <span class="help-block"></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Grade<span style="color: red;">*</span></label>
                                        <div class="col-sm-8">
                                            <textarea name="edu_grade"  class="form-control">{{$info->grade}}</textarea>

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



@stop