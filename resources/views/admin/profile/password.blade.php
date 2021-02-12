@extends('admin.layouts.admin')
@section('content')

    <div id="page-wrapper" style="padding: 0">
        <div class="row">
            <div class="col-lg-12">

                <div class="page-header title">
                    <!-- PAGE TITLE ROW -->
                    <h1>  Dashboard <span class="sub-title">Password Change</span></h1>
                </div>

            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="portlet">
                    <div class="portlet-heading default-bg">
                        <div class="portlet-title">
                            <h4>Change Password</h4>
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

                            <form method="post" class="form-horizontal" action="{{route('admin::update_password')}}">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="new password">New Password<span style="color: red;">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="password" name="password" class="form-control" required id='new password'>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="password">Confirm Password<span style="color: red;">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="password" name="confirm_password" class="form-control" required id='password'>
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
                </div>
            </div>

        </div>
    </div>
    </div>

@stop