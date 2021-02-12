<!DOCTYPE html>
<html>
<head>
	<title>User Detail PDF</title>
	<style type="text/css">
		.heading-center{
			text-align: center;
		}
        .profile_image{
            display: block;
            margin-left: 40%;
            margin-right: auto;
            text-align: center;
        }
	</style>
</head>
<body>
<div class="container">
	<h3 class="heading-center">User Details</h3>
    @if($data->user_image != "")
        <img class="profile_image" style="padding-bottom: 300px;" width="150px" height="200px" align="center" src="{{ public_path('uploads/profile_image/'.$data->user_image) }}"><br><br><br><br><br><br><br><br><br><br><br><br>
    @endif
	<div class="row">
		 <table style="" cellspacing="0" id="" width="100%" class="display table-bordered table-condensed" border="1">
            <thead>
                <tr>
                    <th><b>First Name</b></th>
                    <th><b>Last Name</b></th>
                    <th><b>Address</b></th>
                    <th><b>Post Code</b></th> 
                </tr>
            </thead>
            <tbody>
                @if(empty($data))
                    <tr>
                        <td class="heading-center" colspan="4"><strong>No data found</strong></td>
                    </tr>
                @else
                	<tr>
                        <td>{{$data->first_name}}</td>
						<td>{{$data->last_name}}</td>							
						<td>{{$data->address}}</td>
						<td>{{$data->post_code}} </td> 
                    </tr>
                @endif
            </tbody>
    	</table>
	</div>
	<h3 class="heading-center">Personal Details</h3>
	<div class="row">
		 <table style="" cellspacing="0" id="" width="100%" class="display table-bordered table-condensed" border="1">
            <thead>
            	@if(empty($data))
                    <tr>
                        <td class="heading-center" colspan="17"><strong>No data found</strong></td>
                    </tr>
                @else
                	<tr>
                    	<td><b>Email</b></td>
                    	<td>{{$user->email}}</td>
                    </tr>
                    <tr>
                    	<td><b>Date Of Birth</b></td>
                    	<td>{{$data->dob}}</td>
                    </tr>
                    <tr>
                    	<td><b>Country of Birth</b></td>
                    	<td>{{$data->birth_country}}</td>
                    </tr>
                    <tr>
                    	<td><b>Nationality</b></td>
                    	<td>{{$data->nationality}}</td>
                    </tr>
                    <tr>
                    	<td><b>National Insurance No</b></td>
                    	<td>{{$data->national_insurance_no}}</td>
                    </tr>
                    <tr>
                    	<td><b>Phone No</b></td>
                    	<td>{{$data->mobile}}</td>
                    </tr>
                    <tr>
                    	<td><b>Telephone</b></td>
                    	<td>{{$data->telephone}}</td>
                    </tr>
                    <tr>
                    	<td><b>Work Permit required</b></td>
                    	<td>{{$data->work_permit}}</td>
                    </tr>
                    <tr>
                    	<td><b>Work Permit Valid Until</b></td>
                    	<td>{{$data->work_permit_valid}}</td>
                    </tr>
                    <tr>
                    	<td><b>Passport No</b></td>
                    	<td>{{$data->passport_no}}</td>
                    </tr>
                    <tr>
                    	<td><b>Passport Expiry Date</b></td>
                    	<td>{{$data->passport_expire}}</td>
                    </tr>
                    <tr>
                    	<td><b>DBS Disclosure No</b></td>
                    	<td>{{$data->dbs_no}}</td>
                    </tr>
                    <tr>
                    	<td><b>DBS issue date</b></td>
                    	<td>{{$data->dbs_issue}}</td>
                    </tr>
                    <tr>
                    	<td><b>NMC Pin</b></td>
                    	<td>{{$data->nmc_pim}}</td>
                    </tr>
                    <tr>
                    	<td><b>NMC Pin Expiry date</b></td>
                    	<td>{{$data->nmc_pim_expire}}</td>
                    </tr>
                    <tr>
                    	<td><b>Drivers Licens</b></td>
                    	<td>{{$data->driver_license}}</td>
                    </tr>
                    <tr>
                    	<td><b>Drivers License No</b></td>
                    	<td>{{$data->driver_license_no}}</td>
                    </tr>

                @endif
 
            </thead>
    	</table>
	</div>
	<h3 class="heading-center">Emergency Contact</h3>
	<div class="row">
		<table style="" cellspacing="0" id="" width="100%" class="display table-bordered table-condensed" border="1">
            <thead>
                <tr>
                    <th><b>Name</b></th>
                    <th><b>Relationship</b></th>
                    <th><b>Email</b></th>
                    <th><b>Address</b></th> 
                    <th><b>Postcode</b></th> 
                    <th><b>Mobile</b></th> 
                    <th><b>Telephone</b></th> 
                </tr>
            </thead>
            <tbody>
                @if(empty($data))
                    <tr>
                        <td class="heading-center" colspan="4"><strong>No data found</strong></td>
                    </tr>
                @else
                	<tr>
                        <td>{{$data->emg_name}}</td>
						<td>{{$data->emg_relation}}</td>							
						<td>{{$data->emg_mail}}</td>
						<td>{{$data->emg_address}}</td> 
						<td>{{$data->emg_postcode}}</td> 
						<td>{{$data->emg_mobile}}</td> 
						<td>{{$data->emg_telephone}}</td> 
                    </tr>
                @endif
            </tbody>
    	</table>
	</div>
	<h3 class="heading-center">Employment</h3>
	<div class="row">
		<table style="" cellspacing="0" id="" width="100%" class="display table-bordered table-condensed" border="1">
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
            <tbody>
            	@if($exps->IsEmpty())
                    <tr>
                        <td class="heading-center" colspan="9"><strong>No data found</strong></td>
                    </tr>
                @else
		            @foreach($exps as $exp)
		                <tr>
		                    <td>{{$exp->emp_name}}</td>
		                    <td>{{$exp->emp_position}}</td>
		                    <td>{{$exp->emp_salary}}</td>
		                    <td>{{$exp->emp_address}}</td>
		                    <td>{{$exp->emp_postcode}}</td>
		                    <td>{{$exp->emp_date_from}}</td>
		                    <td>{{$exp->emp_date_to}}</td>
		                    <td>{{$exp->summaries}}</td>
		                    <td>{{$exp->leaving_reason}}</td>
		                </tr>
		            @endforeach
	            @endif
            </tbody>
    	</table>
	</div>

	<h3 class="heading-center">Education</h3>
	<div class="row">
		<table style="" cellspacing="0" id="" width="100%" class="display table-bordered table-condensed" border="1">
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
            <tbody>
            	@if($edus->IsEmpty())
                    <tr>
                        <td class="heading-center" colspan="7"><strong>No data found</strong></td>
                    </tr>
                @else
		            @foreach($edus as $edu)
                        <tr>
                            <td>{{$edu->edu_qualification}}</td>
                            <td>{{$edu->edu_city}}</td>
                            <td>{{$edu->edu_institute}}</td>
                            <td>{{$edu->edu_date_from}}</td>
                            <td>{{$edu->edu_date_to}}</td>
                            <td>{{$edu->edu_subject}}</td>
                            <td>{{$edu->grade}}</td>
                        </tr>
                    @endforeach
	            @endif
            </tbody>
    	</table>
	</div>
	<br>
	<h3 class="heading-center">Training</h3>
	<div class="row">
		<table style="" cellspacing="0" id="" width="100%" class="display table-bordered table-condensed" border="1">
            <thead>
                <tr>
                    <th>Title of Training Program</th>
                    <th>Date Course taken</th>
                </tr>
            </thead>
            <tbody>
            <tbody>
            	@if($trainings->IsEmpty())
                    <tr>
                        <td class="heading-center" colspan="2"><strong>No data found</strong></td>
                    </tr>
                @else
		            @foreach($trainings as $tra)
                        <tr>
                            <td>{{$tra->tra_name}}</td>
                            <td>{{$tra->tra_taken}}</td>
                        </tr>
                    @endforeach
	            @endif
            </tbody>
    	</table>
	</div>
</div>{{-- container end --}}
</body>
</html>