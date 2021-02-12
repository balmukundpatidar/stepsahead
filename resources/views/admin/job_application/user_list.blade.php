@extends('admin.layout.layout')
@section('content')
    <div class="main-content">

        <div class="breadcrumbs">
            <ul>
                <li><a href="{{route('admin::job.index')}}" title="">Job</a></li>
                <li><a href="" title="">Job Applied User List</a></li>
            </ul>
        </div>

        <div class="heading-sec">
            <div class="row">
                <div class="col-md-4 column">
                    <div class="heading-profile">
                        <h2>User List</h2>
                    </div>
                </div>
                <div class="col-md-8 column">
                    <div class="top-bar-chart">
                        <div class="quick-report">
                            <div class="quick-report-infos">
                            </div>
                        </div>
                    </div><!-- Top Bar Chart -->
                </div>
            </div>
        </div><!-- Top Bar Chart -->

        <div class="panel-content">
            <div class="row">
                <div class="col-md-12">
                    {{-- CHM-WAL --}}
                    @if (Session::has('message'))
                 
                        <div class="alert alert-success">{{ Session::get('message') }}</div>

                    @endif
                    <div class="widget">
                        <div class="table-area">
                            {{--<div class="widget-title">--}}
                            {{--<h3>Creating Responsive Tables with Bootstrap</h3>--}}
                            {{--<span>Inovations is great</span>--}}
                            {{--</div>--}}
                            <div class="table-responsive">
                                <table id="Datatable2" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Email</th>
                                        <th>Applied</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $datas)
                                        <tr>
                                            <td>{{$datas->email}}</td>
                                            <td>{{$datas->created_at}}</td>
                                            <td>
                                            
                                            <a class='btn btn-xs btn btn-primary' href='{{route("admin::user_details",['id'=>$datas->user_id])}}' title='Edit'>
                                                    <i class='fa fa-address-book'></i> User Details </a>
                                                    
                                                <a href='{{url('admin/job_applied_user_delete', ['country' => $datas->id])}}/{{$datas->job_employee_id}}' title='delete' class='btn btn-xs btn btn-success' onclick="return confirm('Are you sure you want to delete this applicant?')">
                                                    <i class='fa fa-trash-o icon-only'></i> Delete</a>
                                                    
                                                {{--<a class='btn btn-xs btn btn-primary fancybox fancybox.iframe' href='{{route("admin::cover_letter",['id'=>$datas->user_id,'job_id'=>$datas->id])}}' title='Edit'>--}}
                                                {{--<i class='fa fa-address-book'></i> Cover Letter </a>--}}
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
                $('#Datatable2').DataTable( {
        "order": [[ 1, "desc" ]]
    } );
				
				
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