@extends('admin.layout.layout')
@section('content')
    <div class="main-content">

        <div class="breadcrumbs">
            <ul>
                <li><a href="#/" title="">Home</a></li>
                <li><a href="{{route('admin::news.index')}}" title="">News</a></li>
            </ul>
        </div>

        <div class="heading-sec">
            <div class="row">
                <div class="col-md-4 column">
                    <div class="heading-profile">
                        <h2>News</h2>
                    </div>
                </div>
                <div class="col-md-8 column">
                    <div class="top-bar-chart">
                        <div class="quick-report">
                            <div class="quick-report-infos">
                                <a class="fancybox fancybox.iframe" href="{{route('admin::news.create')}}"><i class="fa fa-plus"></i> Add New</a>

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
                    <div class="widget">
                        <div class="table-area">
                            {{--<div class="widget-title">--}}
                            {{--<h3>Creating Responsive Tables with Bootstrap</h3>--}}
                            {{--<span>Inovations is great</span>--}}
                            {{--</div>--}}
                            <div class="table-responsive">
                                <table id="Datatable" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Publish</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $datas)
                                        <tr>
                                            <td>{{$datas->news_title}}</td>
                                            <td>{{date('Y-m-d',strtotime($datas->created_at))}}</td>
                                            <td>{{$datas->news_status}}</td>
                                            <td><a class='btn btn-xs fancybox fancybox.iframe' href='{{route('admin::news.edit', ['country' => $datas->id])}}' title='Edit'>
                                                    <i class='fa fa-edit icon-only'></i> Edit</a>
                                                <?php if($datas->news_status=='Active'){?>

                                                <a class='btn btn-xs btn btn-primary' href='{{route("admin::news_active",['id'=>$datas->id,'status'=>'InActive'])}}' title='Edit'>
                                                    <i class='fa fa-battery-empty icon-only'></i> InActivate </a>
                                                <?php }
                                                if($datas->news_status=='InActive'){
                                                ?>
                                                <a class='btn btn-xs btn btn-success' href='{{route("admin::news_active",['id'=>$datas->id,'status'=>'Active'])}}' title='Edit'>
                                                    <i class='fa fa-battery-full icon-only'></i> Activate </a>
                                                <?php } ?>
                                                <a href='{{route('admin::news.show', ['country' => $datas->id])}}' title='delete' class='btn btn-xs btn btn-success' onclick="return confirm('Are you sure you want to delete this news item?')">
                                                    <i class='fa fa-trash-o icon-only'></i> Delete</a>

                                            </td>
                                        </tr>
                                    @endforeach
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