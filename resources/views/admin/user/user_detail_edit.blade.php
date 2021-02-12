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
                <form method="post" action="{{ url('admin/update_user_detail/'.request()->segment(3)) }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{request()->segment(3)}}">
                    <div class="col-md-12">
                        @if(Session::has('message'))
                            <div class="alert alert-success">{{ Session::get('message') }}</div>
                        @endif
                           <div class="user-detail-sec" style="padding: 20px 40px; background: #fff;display: inline-block;
    border-radius: 6px;">
                        <div class="billing-sec">
                                <div class="row">
                                <div class="col-md-4 field">
                                    <label> Title <span>*</span> </label>
                                    <input type="text" name="title" value="{{$data->title}}" />
                                </div>
                                <div class="col-md-4 field">
                                    <label>First Name <span>*</span> </label>
                                    <input type="text" name="first_name" value="{{$data->first_name}}" />
                                </div>
                                <div class="col-md-4 field">
                                    <label>Last Name <span>*</span> </label>
                                    <input type="text" name="last_name" value="{{$data->last_name}}"  />
                                </div>
                                <div class="col-md-12">
                                    <div class="widget-title">
                                        <h3>Address</h3>
                                    </div>
                                </div>
                                <div class="col-md-4 field">
                                    <label>Address <span></span> </label>
                                    <input type="text" name="address" value="{{$data->address}}"  />
                                </div>
                                <div class="col-md-4 field">
                                    <label>Post Code <span></span> </label>
                                    <input type="text" name="post_code" value="{{$data->post_code}}"  />
                                </div>

                                <div class="col-md-12 field">
                                    <div class="widget-title">
                                        <h3>Personal Details</h3>
                                    </div>
                                    <label>Email<span>*</span> </label>
                                    <input type="text" name="email" value="{{$user->email}}">
                                </div>
                                <div class="col-md-3 field">
                                    <label>Date Of Birth <span></span> </label>
                                    <input type="text" name="dob" value="{{$data->dob}}"  />
                                </div>
                                <div class="col-md-3 field">
                                    <label>Country of Birth <span></span> </label>
                                    <input type="text" name="birth_country" value="{{$data->birth_country}}"  />
                                </div>
                                <div class="col-md-3 field">
                                    <label>Nationality <span></span> </label>
                                    <input type="text" name="nationality" value="{{$data->nationality}}"  />
                                </div>
                                <div class="col-md-3 field">
                                    <label>National Insurance No <span></span> </label>
                                    <input type="text" name="national_insurance_no" value="{{$data->national_insurance_no}}"  />
                                </div>
                                <div class="col-md-6 field">
                                    <label>Phone No <span></span> </label>
                                    <input type="text" name="mobile" value="{{$data->mobile}}"  />
                                </div>
                                <div class="col-md-6 field">
                                    <label>Telephone <span></span> </label>
                                    <input type="text" name="telephone" value="{{$data->telephone}}"  />
                                </div>

                                <div class="col-md-6 field">
                                    <label>Work Permit required <span></span> </label>
                                    <input type="text" name="work_permit" value="{{$data->work_permit}}"  />
                                </div>
                                <div class="col-md-6 field">
                                    <label>Work Permit Valid Until <span></span> </label>
                                    <input type="text" name="work_permit_valid" value="{{$data->work_permit_valid}}"  />
                                </div>
                                <div class="col-md-6 field">
                                    <label>Passport No <span></span> </label>
                                    <input type="text" name="passport_no" value="{{$data->passport_no}}"  />
                                </div>
                                <div class="col-md-6 field">
                                    <label>Passport Expiry Date <span></span> </label>
                                    <input type="text" name="passport_expire" value="{{$data->passport_expire}}"  />
                                </div>
                                <div class="col-md-6 field">
                                    <label>DBS Disclosure No <span></span> </label>
                                    <input type="text" name="dbs_no" value="{{$data->dbs_no}}"  />
                                </div>
                                <div class="col-md-6 field">
                                    <label>DBS issue date <span></span> </label>
                                    <input type="text" name="dbs_issue" value="{{$data->dbs_issue}}"  />
                                </div>
                                <div class="col-md-6 field">
                                    <label>NMC Pin <span></span> </label>
                                    <input type="text" name="nmc_pim" value="{{$data->nmc_pim}}"  />
                                </div>
                                <div class="col-md-6 field">
                                    <label>NMC Pin Expiry date <span></span> </label>
                                    <input type="text" name="nmc_pim_expire" value="{{$data->nmc_pim_expire}}"  />
                                </div>
                                <div class="col-md-6 field">
                                    <label>Drivers License <span></span> </label>
                                    <input type="text" name="driver_license" value="{{$data->driver_license}}"  />
                                </div>
                                <div class="col-md-6 field">
                                    <label>Drivers License No <span></span> </label>
                                    <input type="text" name="driver_license_no" value="{{$data->driver_license_no}}"  />
                                </div>
                                <div class="col-md-12">
                                    <div class="widget-title">
                                        <h3> Emergency Contact</h3>
                                    </div>
                                </div>
                                <div class="col-md-4 field">
                                    <label>Name <span>*</span> </label>
                                    <input type="text" name="emg_name" value="{{$data->emg_name}}" />
                                </div>
                                <div class="col-md-4 field">
                                    <label>Relationship <span>*</span> </label>
                                    <input type="text" name="emg_relation" value="{{$data->emg_relation}}" />
                                </div>
                                <div class="col-md-4 field">
                                    <label>Email <span>*</span> </label>
                                    <input type="text" name="emg_mail" value="{{$data->emg_mail}}" />
                                </div>
                                <div class="col-md-6 field">
                                    <label>Address <span>*</span> </label>
                                    <input type="text" name="emg_address" value="{{$data->emg_address}}" />
                                </div>
                                <div class="col-md-6 field">
                                    <label>Postcode <span>*</span> </label>
                                    <input type="text" name="emg_postcode" value="{{$data->emg_postcode}}" />
                                </div>
                                <div class="col-md-6 field">
                                    <label>Mobile <span>*</span> </label>
                                    <input type="text" name="emg_mobile" value="{{$data->emg_mobile}}" />
                                </div>
                                <div class="col-md-6 field">
                                    <label>Telephone <span>*</span> </label>
                                    <input type="text" name="emg_telephone" value="{{$data->emg_telephone}}" />
                                </div>

                            </div>
                           </div>
                        </div>
                    </div>
                <div class="col-md-12">
                    <div class="widget">
                        <div class="table-area">

                            <div class="widget-title">
                                <h3>Employment</h3>
                            </div>
                            <div class="table-responsive">
                                <table id="Datatable" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Salary</th>
                                        <th>Address</th>
                                        <th>Postcode</th>
                                        <th>Date From</th>
                                        <th>Date To</th>
                                        <th>Duties</th>
                                        <th>Leaving Reason</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($exps as $exp)
                                        <tr>
                                            <td><input class="form-control" type="text" name="emp_name[{{$exp->id}}]" value="{{$exp->emp_name}}"></td>
                                            <td><input class="form-control" type="text" name="emp_position[{{$exp->id}}]" value="{{$exp->emp_position}}"></td>
                                            <td><input class="form-control" type="text" name="emp_salary[{{$exp->id}}]" value="{{$exp->emp_salary}}"></td>
                                            <td><input class="form-control" type="text" name="emp_address[{{$exp->id}}]" value="{{$exp->emp_address}}"></td>
                                            <td><input class="form-control" type="text" name="emp_postcode[{{$exp->id}}]" value="{{$exp->emp_postcode}}"></td>
                                            <td><input class="form-control" type="text" name="emp_date_from[{{$exp->id}}]" value="{{$exp->emp_date_from}}"></td>
                                            <td><input class="form-control" type="text" name="emp_date_to[{{$exp->id}}]" value="{{$exp->emp_date_to}}"></td>
                                            <td><input class="form-control" type="text" name="summaries[{{$exp->id}}]" value="{{$exp->summaries}}"></td>
                                            <td><input class="form-control" type="text" name="leaving_reason[{{$exp->id}}]" value="{{$exp->leaving_reason}}"></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="widget">
                        <div class="table-area">

                            <div class="widget-title">
                                <h3>Education</h3>
                            </div>
                            <div class="table-responsive">
                                <table id="Datatable1" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Qualification</th>
                                        <th>City</th>
                                        <th>Institute</th>
                                        <th>Date From</th>
                                        <th>Date To</th>
                                        <th>Subject</th>
                                        <th>Grade</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($edus as $edu)
                                        <tr>
                                            <td><input class="form-control" type="text" name="edu_qualification[{{$edu->id}}]" value="{{$edu->edu_qualification}}"></td>
                                            <td><input class="form-control" type="text" name="edu_city[{{$edu->id}}]" value="{{$edu->edu_city}}"></td>
                                            <td><input class="form-control" type="text" name="edu_institute[{{$edu->id}}]" value="{{$edu->edu_institute}}"></td>
                                            <td><input class="form-control" type="text" name="edu_date_from[{{$edu->id}}]" value="{{$edu->edu_date_from}}"></td>
                                            <td><input class="form-control" type="text" name="edu_date_to[{{$edu->id}}]" value="{{$edu->edu_date_to}}"></td>
                                            <td><input class="form-control" type="text" name="edu_subject[{{$edu->id}}]" value="{{$edu->edu_subject}}"></td>
                                            <td><input class="form-control" type="text" name="grade[{{$edu->id}}]" value="{{$edu->grade}}"></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="widget">
                        <div class="table-area">

                            <div class="widget-title">
                                <h3>Training</h3>
                            </div>
                            <div class="table-responsive">
                                <table id="Datatable2" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Title of Training Program</th>
                                        <th>Date Course taken</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($trainings as $tra)
                                        <tr>
                                            <td><input class="form-control" type="text" name="tra_name[{{$tra->id}}]" value="{{$tra->tra_name}}"></td>
                                            <td><input class="form-control" type="text" name="tra_taken[{{$tra->id}}]" value="{{$tra->tra_taken}}"></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group" style="margin-top:15px;">
                        <input type="submit" class="btn btn-success" value="Update">
                </div>
                </div>
            </form>{{-- form end --}}
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
                $('#Datatable1').DataTable();
                $('#Datatable2').DataTable();
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