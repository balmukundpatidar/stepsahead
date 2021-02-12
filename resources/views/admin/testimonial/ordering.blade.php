@extends('admin.layouts.admin')
@section('content')
    <div id="page-wrapper">
        <!-- BEGIN PAGE HEADING ROW -->
        <div class="row">
            <div class="col-lg-12">

                <div class="page-header title">
                    <!-- PAGE TITLE ROW -->
                    <h1><?PHP echo env('APP_NAME');?> <span class="sub-title">Testimonial</span></h1>
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
                            <h4><i class="fa fa-edit"></i>Ordering Section</h4>
                        </div>
                            <div class="portlet-widgets">
                                <a class="fancybox fancybox.iframe" href="{{route('admin::testimonial.create')}}"><i class="fa fa-plus"></i> Add New</a>
                            </div>
                            <div class="clearfix"></div>
                    </div>

                    <div class="portlet-body no-padding-top no-padding-bottom">
                        <div class="col-sm-12">
                            <div class="dd">
                                <ol class="dd-list">
                                    @foreach($data as $datas)
                                    <li class="dd-item" data-id="{{$datas->id}}">

                                        <div class="dd-handle btn-white">
                                            {{--<div class="dd-handle dd2-handle">--}}
                                                {{--<img src="{{url('/')}}/uploads/slider/{{$datas->slider_image}}" style="height:24px;width:24px;"/>--}}
                                            {{--</div>--}}
                                            <span style=" margin-left: 30px;">{{$datas->testi_title}}</span>
                                        </div>

                                    </li>
                                        @endforeach

                                </ol>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
@push('scripts')
        <script src="{{ url('/') }}/assets/js/plugins/bootbox/bootbox.min.js"></script>
        <script src="{{ url('/') }}/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{ url('/') }}/assets/js/plugins/datatables/datatables.js"></script>
        <script src="{{ url('/') }}/assets/js/plugins/datatables/datatables.responsive.js"></script>
        <script src="{{ url('/') }}/assets/js/plugins/jquery-nestable/jquery.nestable.js"></script>
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
        <script type="text/javascript">
            jQuery(function($){
                console.log('hi')
                $('.dd').nestable();
                $('.dd-handle a').on('mousedown', function(e){
                    console.log(e)
                    e.stopPropagation();
                });
            });
            $('.dd').on('change', function() {
                /* on change event */
                var dataS = $('.dd').nestable('serialize');
                //console.log(data);
                $.ajax({
                    type: "POST",
                    url: '<?php echo url('/admin/order_testimonial')?>',
                    data: {DATA:dataS},
                    headers: {
                        'X-CSRF-TOKEN': '<?PHP echo csrf_token();?>'
                    },
                    success: function(response) {
                        console.log(response);
                    }
                });

            });
        </script>

@endpush

@stop