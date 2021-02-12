@extends('admin.layout.layout')
@section('content')
    <div class="main-content">

        <div class="breadcrumbs">
            <ul>
                <li><a href="" title="">Home</a></li>
                <li><a href="" title="">Profile </a></li>
            </ul>
        </div>

        <div class="heading-sec">
            <div class="row">
                <div class="col-md-4 column">
                    <div class="heading-profile">
                        <h2>Profile</h2>
                    </div>
                </div>
                <div class="col-md-8 column">
                    <div class="top-bar-chart">
                        <div class="quick-report">
                            <div class="quick-report-infos">
                            </div>
                        </div>
                    </div><!-- Top Bar Chart -->
                </div>
            </div>
        </div><!-- Top Bar Chart -->

        <div class="panel-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="billing-sec">
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
                            <form class="form-horizontal" role="form" method="post" action="{{route('admin::profile_update')}}">
                                <input type="hidden" name="_method" value="PUT">
                                {{ csrf_field() }}


                            <div class="col-md-6 field">
                                <label> User Name <span>*</span> </label>
                                <input type="text" value="{{$user_info->user_name}}" name="user_name">

                            </div>
                            <div class="col-md-6 field">
                                <label>Email <span>*</span> </label>
                                <input type="email" placeholder="john.smith@example.com"  value="{{$user_info->email}}" name="email">

                            </div>
                                <hr class="separator">
                                <div class="col-md-12">
                                    <button type="submit">Save</button>
                                </div>
                            </form>
                                <div class="billing-sec">
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="widget-title">
                                        <h3>Change Password</h3>
                                    </div>
                                </div>
                                <form method="post" class="form-horizontal" action="{{route('admin::update_password')}}">
                                    {{ csrf_field() }}

                                    <div class="col-md-6 field">
                                        <label> New Password <span>*</span> </label>
                                        <input type="password" name="password" required id='new password'>
                                    </div>
                                    <div class="col-md-6 field">
                                        <label> Confirm Password <span>*</span> </label>
                                        <input type="password" name="confirm_password" required id='password'>

                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit">Update</button>
                                    </div>
                                </form>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Panel Content -->

    </div><!-- Main Content -->


    @push('scripts')

    @endpush

@stop