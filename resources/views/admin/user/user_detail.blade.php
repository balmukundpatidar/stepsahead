@extends('admin.layout.layout')
@section('content')
    <div class="main-content">

        <div class="breadcrumbs">
            <ul>
                <li><a href="{{route('admin::job.index')}}" title="">Job</a></li>
                <li><a href="" title="">Applied User Details </a></li>
            </ul>
        </div>

        <div class="heading-sec">
            <div class="row">
                <div class="col-md-4 column">
                    <div class="heading-profile">
                        <h2>Details</h2>
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
                    @if(Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif
                    <div class="widget">
                        <div class="table-area">
                            <div class="widget-title">
                                <h3>User List</h3>
                            </div>
                            <div class="table-responsive">
                                <table id="Datatable" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Dob</th>

                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($users->IsEmpty())
                                        <tr>
                                            <td colspan="5" style="text-align: center;"><b>No data available</b></td>
                                        </tr>
                                    @else
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{$user->first_name}}</td>
                                                <td>{{$user->last_name}}</td>
                                                <td>{{$user->address}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->dob}}</td>
                                                <td>
                                                @if($user->id != null)
                                                    <a class='btn btn-xs' href='{{ url('admin/edit_user_details/'.$user->user_id)}}' title='Edit'><i class='fa fa-edit icon-only'></i> Edit</a>
                                                @else
                                                    <a class='btn btn-xs' href='javascript:void(0)' title='No info'><i class='fa fa-edit icon-only'></i> Edit</a>
                                                @endif
                                                
                                                <a class='btn btn-xs btn btn-primary' href='{{ url('admin/job_applied_user_details/'.$user->user_id)}}' title='User Detail'><i class='fa fa-address-book'></i>Detail </a>
                                                <a href='{{ url('admin/delete_user/'.$user->user_id)}}' title='delete' class='btn btn-xs btn btn-success' onclick="return confirm('Are you sure you want to delete this job?')"><i class='fa fa-trash-o icon-only'></i> Delete</a>

                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    
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
                    height: 1000,
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