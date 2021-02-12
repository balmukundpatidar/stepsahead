@extends('admin.layout.layout')
@section('content')
    <div class="main-content">

        <div class="breadcrumbs">
            <ul>
                <li><a href="#/" title="">Home</a></li>
                <li><a href="{{url('admin/viewaddress')}}" title="">Address</a></li>
            </ul>
        </div>

        <div class="heading-sec">
            <div class="row">
                <div class="col-md-4 column">
                    <div class="heading-profile">
                        <h2>Address</h2>
                    </div>
                </div>
                <div class="col-md-8 column">
                    <div class="top-bar-chart">
                        <div class="quick-report">
                            <div class="quick-report-infos">
                                <a class="fancybox fancybox.iframe" href="{{url('admin/addaddress')}}"><i class="fa fa-plus"></i> Add Address</a>
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
                    <div class="table-responsive">
                    <table id="Datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Address</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Address Type</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
						@foreach($data as $datas)
                            <tr>
                                <td>{{$datas->address}}</td>
                                <td>{{$datas->lat}}</td>
                                <td>{{$datas->long}}</td>
                                <td>{{$datas->address_type}}</td>
                                <td><a class="fancybox fancybox.iframe" href="{{url('admin/editaddress/'.$datas->id)}}"><i class="fa fa-edit"></i> Edit</a></td>
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