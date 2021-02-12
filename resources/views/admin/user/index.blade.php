@extends('admin.layouts.admin')
@section('content')
    <div id="page-wrapper">
        <!-- BEGIN PAGE HEADING ROW -->
        <div class="row">
            <div class="col-lg-12">

                <div class="page-header title">
                    <!-- PAGE TITLE ROW -->
                    <h1><?PHP echo env('APP_NAME');?> <span class="sub-title">Manage Users</span></h1>
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
                            <h4><i class="fa fa-edit"></i> All Users</h4>
                        </div>
                            {{--<div class="portlet-widgets">--}}
                                {{--<a class="fancybox fancybox.iframe" href="{{route('cpanel.users.create')}}"><i class="fa fa-plus"></i> Add New</a>--}}
                            {{--</div>--}}
                            <div class="clearfix"></div>
                    </div>

                    <div class="portlet-body no-padding-top no-padding-bottom">

                        <table id="Datatable" class="datatable table table-hover table-striped table-bordered tc-table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($user_list as $datas)
                                <tr>
                                    <td>{{$datas->user_name}}</td>
                                    <td>{{$datas->email}}</td>
                                    <td>{{$datas->status}}</td>
                                    <td>
                                        <?php if($datas->status=='Active'){?>

                                            <a class='btn btn-xs btn btn-primary' href='{{route("admin::user_active",['id'=>$datas->id,'status'=>'InActive'])}}' title='Edit'>
                                                <i class='fa fa-battery-empty icon-only'></i> InActive </a>
                                            <?php }
                                            if($datas->status=='InActive'){
                                            ?>
                                            <a class='btn btn-xs btn btn-success' href='{{route("admin::user_active",['id'=>$datas->id,'status'=>'Active'])}}' title='Edit'>
                                                <i class='fa fa-battery-full icon-only'></i> Active </a>
                                        <?php } ?>

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