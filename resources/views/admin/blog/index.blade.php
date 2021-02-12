@extends('admin.layouts.admin')
@section('content')
    <div id="page-wrapper">
        <!-- BEGIN PAGE HEADING ROW -->
        <div class="row">
            <div class="col-lg-12">

                <div class="page-header title">
                    <!-- PAGE TITLE ROW -->
                    <h1>Blog <span class="sub-title">Blog</span></h1>
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
                            <h4><i class="fa fa-edit"></i> blog</h4>
                        </div>

                            <div class="clearfix"></div>
                    </div>

                    <div class="portlet-body no-padding-top no-padding-bottom">

                        <table id="Datatable" class="datatable table table-hover table-striped table-bordered tc-table">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $datas)
                                <tr>
                                    <td>{{$datas->blog_title}}</td>
                                    <td>{{$datas->blog_description}}</td>
                                    <td>{{$datas->blog_status}}</td>
                                    <td><img src="{{url('/')}}/uploads/blog/{{$datas->blog_image}}" style="height:24px;width:24px;"/></td>
                                    <td>
                                        <?php if($datas->blog_status=='Active'){?>

                                        <a class='btn btn-xs btn btn-primary' href='{{route("admin::blog_active",['id'=>$datas->id,'status'=>'InActive'])}}' title='Edit'>
                                            <i class='fa fa-battery-empty icon-only'></i> InActive </a>
                                        <?php }
                                        if($datas->blog_status=='InActive'){
                                        ?>
                                        <a class='btn btn-xs btn btn-success' href='{{route("admin::blog_active",['id'=>$datas->id,'status'=>'Active'])}}' title='Edit'>
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