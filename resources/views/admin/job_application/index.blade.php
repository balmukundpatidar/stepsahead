@extends('admin.layouts.admin')
@section('content')
    <div id="page-wrapper">
        <!-- BEGIN PAGE HEADING ROW -->
        <div class="row">
            <div class="col-lg-12">

                <div class="page-header title">
                    <!-- PAGE TITLE ROW -->
                    <h1>Job Application <span class="sub-title">Job</span></h1>
                </div>

            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="portlet">
                    <div class="portlet-heading">
                        <div class="portlet-title">
                            <h4><i class="fa fa-edit"></i> job</h4>
                        </div>
                            <div class="clearfix"></div>
                    </div>

                    <div class="portlet-body no-padding-top no-padding-bottom">

                        <table id="Datatable" class="datatable table table-hover table-striped table-bordered tc-table">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Valid Upto</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $datas)
                                <tr>
                                    <td>{{$datas->job_title}}</td>
                                    <td>{{$datas->job_valid_upto}}</td>
                                    <td><a class='btn btn-xs btn btn-primary' href='{{route("admin::job_applied_user_list",['id'=>$datas->id])}}' title='Edit'>
                                            <i class='fa fa-address-book'></i> Applied User </a>
                                        <a class='btn btn-xs btn btn-primary' href='{{url("admin/job/".$datas->id)}}' title='Edit'>
                                            <i class='fa fa-address-book'></i> Job Details </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@push('scripts')
        <script src="{{ url('/') }}/assets/js/plugins/bootbox/bootbox.min.js"></script>
        <script src="{{ url('/') }}/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{ url('/') }}/assets/js/plugins/datatables/datatables.js"></script>
        <script src="{{ url('/') }}/assets/js/plugins/datatables/datatables.responsive.js"></script>
        <script src="{{ url('/') }}/assets/fancybox/jquery.fancybox.js"></script>
        <link rel="stylesheet" href="{{ url('/') }}/assets/fancybox/jquery.fancybox.css">
        <script type="application/javascript">
            $(document).ready(function(){
                $('#Datatable').DataTable();
                $('.fancybox').fancybox({
                    helpers: {title: null},
                    width: 600,
                    height: 600,
                    fitToView   : true,
                    autoSize    : true,
                    padding: 0,
                    openEffect: 'elastic',
                    afterClose  : function() {
                        window.location.reload();
                    }
                });
            });


        </script>
@endpush

@stop