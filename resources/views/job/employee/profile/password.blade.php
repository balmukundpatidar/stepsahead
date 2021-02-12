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

                        <form method="post" class="form-horizontal" action="{{route('employee::update_password')}}">
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