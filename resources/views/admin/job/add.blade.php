@extends('admin.layout.layout')
@section('content')
    <div class="main-content">
        <div class="breadcrumbs">
            <ul>
                <li><a href="{{route('admin::job.index')}}" title="">Vacancies</a></li>
                <li><a href="" title="">Add Vacancies</a></li>
            </ul>
        </div>
        <div class="message notification"></div>
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


                        <form class="form-horizontal" role="form" method="post" action="{{route('admin::job.store')}}">
                            {{ csrf_field() }}
                            <div class="col-lg-8 col-md-8">
                                <div class="tc-tabs"><!-- Nav tabs style 1 -->
                                    {{--<ul class="nav nav-tabs tab-lg-button tab-color-dark background-dark white">--}}
                                        {{--<li class="active"><a href="#p2" data-toggle="tab"><i class="fa fa-edit bigger-130"></i>Add</a></li>--}}
                                    {{--</ul>--}}
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="p2">

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Title:<span style="color: red;">*</span></label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="title" class="form-control" value="{{old('title')}}" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Description:<span style="color: red;">*</span></label>
                                                <div class="col-sm-9">
                                                    <textarea name="description" class="form-control">{{old('description')}}</textarea>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Salary:<span style="color: red;">*</span></label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="salary" class="form-control" value="{{old('salary')}}" required>
                                                </div>
                                            </div>


                                            <hr class="separator">



                                        </div>
                                    </div>
                                </div><!--nav-tabs style 1-->
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="well well-sm white">
                                    {{--<div class="profile-pic">--}}
                                    {{--<a href="#">--}}
                                    {{--<img src="{{url('/')}}/assets/images/user-1.jpg" class="img-responsive"  alt="">--}}
                                    {{--</a>--}}
                                    {{--</div>--}}
                                    <div class="form-group">
                                        <label class="col-sm-5 control-label">Deadline:<span style="color: red;">*</span></label>
                                        <div class="col-sm-7">
                                            <input type="text" name="job_valid" class="form-control datepicker" value="{{old('job_valid')}}" required>
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-5 control-label">Job Type:<span style="color: red;">*</span></label>
                                        <div class="col-sm-7">
                                            <select name="job_type" class="form-control">
                                                <option value="1" @if (old('job_type') == '1') selected="selected" @endif>non-care worker vacancy</option>
                                                <option value="2" @if (old('job_type') == '2') selected="selected" @endif>care worker vacancy</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-5 control-label">Job Category:<span style="color: red;">*</span></label>
                                        <div class="col-sm-7">
                                            <select name="job_category" class="form-control">
                                                @foreach($cats as $cat)
                                                    <option value="{{$cat->id}}" @if (old('job_category') == $cat->id ) selected="selected" @endif>{{$cat->cat_title}}</option>
                                                    {{--<option value="2" @if (old('job_category') == '2') selected="selected" @endif>Office & Other Vacancies</option>--}}
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <hr class="separator">


                                    <!--div class="form-group">
                                        <label class="col-sm-5 control-label">Address:</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="address" placeholder="795 Folsom Ave, Suite 600" value="{{old('address')}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-5 control-label">City:</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="city" placeholder="San Francisco" value="{{old('city')}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-5 control-label">State/Region:</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="state" placeholder="Florida" value="{{old('state')}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-5 control-label">Zip code:</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="zip_code" placeholder="94107" value="{{old('zip_code')}}">
                                        </div>
                                    </div--->
                                    <div class="form-group">
                                        <label class="col-sm-5 control-label">Location:</label>
                                        <div class="col-sm-7">
                                            <select name="country" class="form-control">
                                                <option value=''>All locations</option>
                                                @foreach($countries as $country)
                                                    <option value="{{$country->id}}" @if (old('country') == $country->id) selected="selected" @endif>{{$country->country_title}}</option>

                                                @endforeach
                                            </select>
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

                        </form>


                </div>
            </div>
        </div><!-- Panel Content -->
    </div>




    @push('scripts')
        <script>
            function redirectMe() {
                parent.jQuery.fancybox.close();
            }
        </script>
    @endpush
@stop