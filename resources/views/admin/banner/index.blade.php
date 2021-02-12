@extends('admin.layout.layout')
@section('content')
    <div class="main-content">

        <div class="breadcrumbs">
            <ul>
                <li><a href="#/" title="">Home</a></li>
                <li><a href="{{url('admin/banner')}}" title="">Banner</a></li>
            </ul>
        </div>

        <div class="heading-sec">
            <div class="row">
                <div class="col-md-4 column">
                    <div class="heading-profile">
                        <h2>Banner</h2>
                    </div>
                </div>
                <div class="col-md-8 column">
                    <div class="top-bar-chart">
                        <div class="quick-report">
                            <div class="quick-report-infos">
                                <a class="fancybox fancybox.iframe" href="{{url('admin/editbanner')}}"><i class="fa fa-plus"></i> Edit Banner</a>

                                {{--<button type="button" class="btns  orange-skin  mdm-btn mdm-radius">Add</button>--}}
                            </div>
                        </div>
                    </div><!-- Top Bar Chart -->
                </div>
            </div>
        </div><!-- Top Bar Chart -->

        <div class="panel-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="widget banner-widget">
                        <div class="table-area">
                            {{--<div class="widget-title">--}}
                                {{--<h3>Creating Responsive Tables with Bootstrap</h3>--}}
                                {{--<span>Inovations is great</span>--}}
                            {{--</div>--}}
                    <div class="table-responsive">
                    <table id="Datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <!--<th>Title</th>-->
                            <!--<th>Subtitle</th>-->
                            <!--<th>Content</th>-->
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="{{url('/')}}/jobs/images/{{$datas->banner_image}}" alt="" style="width:200px"></td>
                                <!--<td>{{$datas->banner_text1}}</td>-->
                                <!--<td>{{$datas->banner_text2}}</td>-->
                                <!--<td>{!! $datas->down_text !!}</td>-->
                            </tr>
                        </tbody>
                    </table>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Panel Content -->

    </div><!-- Main Content -->


    @push('scripts')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        {{--<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">--}}

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.js"></script>

        <script type="text/javascript">
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