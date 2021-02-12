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

                        <form method="post"  class="form-horizontal" action="{{route('employee::employment.store')}}" novalidate>
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Name of Employer<span style="color: red;">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="emp_name" class="form-control" value="{{old('emp_name')}}" required>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Position Held<span style="color: red;">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="emp_position" class="form-control" value="{{old('emp_position')}}" required>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Salary<span style="color: red;">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="emp_salary" class="form-control" value="{{old('emp_salary')}}" required>
                                    <span class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label">Employers Address<span style="color: red;">*</span></label>
                                <div class="col-sm-8">
                                    <textarea name="emp_address" class="form-control"  >{{old('emp_address')}}</textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Postcode<span style="color: red;">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="emp_postcode" class="form-control" value="{{old('emp_postcode')}}" required>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Employment From<span style="color: red;">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="emp_date_from" class="form-control" value="{{old('emp_date_from')}}" required>
                                    <span class="help-block"></span>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-4 control-label">Employment To<span style="color: red;">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="emp_date_to" class="form-control" value="{{old('emp_date_to')}}" required>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Summary of Duties<span style="color: red;">*</span></label>
                                <div class="col-sm-8">
                                    <textarea name="emp_duties" class="form-control"  >{{old('emp_duties')}}</textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Reason for leaving <span style="color: red;">*</span></label>
                                <div class="col-sm-8">
                                    <textarea name="emp_leaving_reason" class="form-control"  >{{old('emp_leaving_reason')}}</textarea>
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