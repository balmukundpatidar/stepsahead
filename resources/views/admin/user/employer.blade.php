@extends('admin.layouts.admin')
@inject('MyCollection', 'App\Repo\common\MyCollection')
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
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $datas)
                                <tr>
                                    <td>anamika</td>
                                    <td>hazra</td>
                                    <td>Action</td>
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
            });
        </script>
@endpush

@stop