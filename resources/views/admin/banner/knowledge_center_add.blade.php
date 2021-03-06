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

                    <form method="post" id="" class="form-horizontal" action="{{url('admin/insertknowledge_center')}}" accept-charset="UTF-8" enctype="multipart/form-data" onsubmit="return redirectMe();">
                        <input type="hidden" name="_method" value="POST">
                        {{ csrf_field() }}
						
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Heading<span style="color: red;">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" name="heading" class="form-control" required>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label"> Text<span style="color: red;">*</span></label>
                            <div class="col-sm-8">
                                <!--<input type="text" name="text" class="form-control" required>-->
                                 <textarea name="text" class="form-control" required></textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label"> Button Title<span style="color: red;"></span></label>
                            <div class="col-sm-8">
                                <input type="text" name="button_title" class="form-control" >
                                <span class="help-block"></span>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-4 control-label"> Url1<span style="color: red;"></span></label>
                            <div class="col-sm-8">
                                <input type="url" name="url_1" class="form-control" >
                                <span class="help-block"></span>
                            </div>
                        </div>
						<!--<div class="form-group">-->
      <!--                      <label class="col-sm-4 control-label"> Url2<span style="color: red;"></span></label>-->
      <!--                      <div class="col-sm-8">-->
      <!--                          <input type="url" name="url_2" class="form-control">-->
      <!--                          <span class="help-block"></span>-->
      <!--                      </div>-->
      <!--                  </div>-->

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



@push('scripts')
	<script>
        function redirectMe() {
			true;
          //  parent.jQuery.fancybox.close();
        }
    </script>
@endpush
@stop