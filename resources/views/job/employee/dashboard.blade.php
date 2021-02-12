@extends('job.layout.layout')
@section('content')
<link rel="stylesheet" href="{{url('/')}}\jobs\font-awesome\css\font-awesome.css">
<!-- Start All Pages Title -->
{{--
<div class="page-title-main">
   --}}
   {{--
   <div class="container">
      --}}
      {{--
      <div class="clearfix">
         --}}
         {{--
         <div class="title-all text-center">
            --}}
            {{--
            <ul class="breadcrumb">
               --}}
               {{--
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               --}}
               {{--
               <li class="breadcrumb-item active">My Profile</li>
               --}}
               {{--
            </ul>
            --}}
            {{--
            <h2>My Profile</h2>
            --}}
            {{--
         </div>
         --}}
         {{--
      </div>
      --}}
      {{--
   </div>
   --}}
   {{--
</div>
--}}
<!-- End All Pages Title -->
</div>
<!-- End Header -->
<!-- container -->
<br><br>
<section class="sec sec-employee-dash">
   <div class="container">
    <div class="row">
    <div class="col-md-3 mb-3">
        <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
        	<li class="nav-item">
    <a class="nav-link active" id="profile-img-tab" data-toggle="tab" href="#profile-img" role="tab" aria-controls="profile-img" aria-selected="true">Profile Image</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Personal Details</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Emergency Contact</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Education </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="employment-tab" data-toggle="tab" href="#employment" role="tab" aria-controls="employment" aria-selected="false">Employment </a>	
  </li>
  <li class="nav-item">
    <a class="nav-link" id="training-tab" data-toggle="tab" href="#training" role="tab" aria-controls="training" aria-selected="false">Training </a>	
  </li>
  <li class="nav-item">
    <a class="nav-link" id="cv-tab" data-toggle="tab" href="#cv" role="tab" aria-controls="cv" aria-selected="false">CV </a>	
  </li>
</ul>
    </div>
    <!-- /.col-md-4 -->
        <div class="col-md-9">
      <div class="tab-content" id="myTabContent">
      	<div class="tab-pane fade show active" id="profile-img" role="tabpanel" aria-labelledby="profile-img-tab">
		  <h2>Profile Image</h2>
		  <form method="post" action="{{route('employee::profile_image_update',['city' => $profile_info->id])}}" enctype="multipart/form-data">
               <input type="hidden" name="_method" value="PUT">
               {{ csrf_field() }}
               @if($profile_info->user_image=="")
               <img id="blah" src="{{url('/')}}/jobs/images/noImage.jpg" alt="your image" class="img-responsive profile-img" width="100%"/>
               @else
               <img id="blah" src="{{url('/')}}/uploads/profile_image/{{$profile_info->user_image}}" alt="your image" class="img-responsive profile-img" width="100%"/>
               @endif
               <p style="margin: 10px 0; color:#f15a23"> Please select a profile image and then click save</p>
               <input type='file' name="image" style="float: left;
                  overflow: hidden;
                 width: 100%;
                  margin-bottom: 20px;" onchange="readURL(this);" />
               <div class="save-btn">
                  <input type="submit" value="Save" name="experience-item-btn"  class="custom-btn">
               </div>
            </form>
	
  </div>
  <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
		  <h2>Personal Details</h2>
		    <div class="">
			                        <form class="form-horizontal" action="{{route('employee::profile_update')}}" method="post">
			                           <input type="hidden" name="_method" value="PUT">
			                           {{ csrf_field() }}
			                           <fieldset>
			                              <div class="form-group">
			                                 <input type="text" name="title" id="title" class="form-control input-sm" placeholder="Title" value="{{$profile_info->title}}">
			                              </div>
			                              <div class="row">
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name" value="{{$profile_info->first_name}}">
			                                    </div>
			                                 </div>
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name" value="{{$profile_info->last_name}}">
			                                    </div>
			                                 </div>
			                              </div>
			                              <div class="form-group">
			                                 <input type="text" name="email" id="email" class="form-control input-sm" placeholder="Email Address" value="{{$user->email}}">
			                              </div>
			                              <div class="row">
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <textarea name="address" id="address" class="form-control input-sm" placeholder="Address">{{$profile_info->address}}</textarea>
			                                    </div>
			                                 </div>
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="postcode" id="postcode" class="form-control input-sm" placeholder="Postcode" value="{{$profile_info->post_code}}">
			                                    </div>
			                                 </div>
			                              </div>
			                              <div class="row">
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="dob" id="dob" class="form-control input-sm" placeholder="Date of Birth" value="{{$profile_info->dob}}">
			                                    </div>
			                                 </div>
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="ns" id="ns" class="form-control input-sm" placeholder="National Insurance No" value="{{$profile_info->national_insurance_no}}">
			                                    </div>
			                                 </div>
			                              </div>
			                              <div class="row">
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="mobile" id="mobile" class="form-control input-sm" placeholder="Mobile" value="{{$profile_info->mobile}}">
			                                    </div>
			                                 </div>
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="telephone" id="telephone" class="form-control input-sm" placeholder="Telephone" value="{{$profile_info->telephone}}">
			                                    </div>
			                                 </div>
			                              </div>
			                              <div class="row">
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="row">
			                                       <div class="col-xs-8 col-sm-8 col-md-8">
			                                          <label class="control-label" style="font-size: 1rem">Work Permit required:</label>
			                                       </div>
			                                       <div class="col-xs-4 col-sm-4 col-md-4">
			                                          <div class="form-group">
			                                             <select class="form-control input-sm" name="work_permit">
			                                             <option @if ($profile_info->work_permit == 'Yes') selected="selected" @endif value="Yes">Yes</option>
			                                             <option @if ($profile_info->work_permit == 'No') selected="selected" @endif value="No">No</option>
			                                             </select>
			                                          </div>
			                                       </div>
			                                    </div>
			                                 </div>
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="work_permit_valid" id="work_permit_valid" class="form-control input-sm" placeholder="Work Permit Valid Until" value="{{$profile_info->work_permit_valid}}">
			                                    </div>
			                                 </div>
			                              </div>
			                              <div class="row">
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="passport_no" id="passport_no" class="form-control input-sm" placeholder="Passport No" value="{{$profile_info->passport_no}}">
			                                    </div>
			                                 </div>
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="passport_expire" id="passport_expire" class="form-control input-sm" placeholder="Passport Expiry Date" value="{{$profile_info->passport_expire}}">
			                                    </div>
			                                 </div>
			                              </div>
			                              <div class="row">
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="dbs_no" id="dbs_no" class="form-control input-sm" placeholder="DBS Disclosure No" value="{{$profile_info->dbs_no}}">
			                                    </div>
			                                 </div>
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="dbs_issue" id="dbs_issue" class="form-control input-sm" placeholder="DBS issue date" value="{{$profile_info->dbs_issue}}">
			                                    </div>
			                                 </div>
			                              </div>
			                              <div class="row">
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="birth_country" id="birth_country" class="form-control input-sm" placeholder="Country of Birth" value="{{$profile_info->birth_country}}">
			                                    </div>
			                                 </div>
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="nationality" id="nationality" class="form-control input-sm" placeholder="Nationality" value="{{$profile_info->nationality}}">
			                                    </div>
			                                 </div>
			                              </div>
			                              <div class="row">
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="nmc_pim" id="nmc_pim" class="form-control input-sm" placeholder="NMC Pim" value="{{$profile_info->nmc_pim}}">
			                                    </div>
			                                 </div>
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="nmc_pim_expire" id="nmc_pim_expire" class="form-control input-sm" placeholder="NMC Pin Expiry date" value="{{$profile_info->nmc_pim_expire}}">
			                                    </div>
			                                 </div>
			                              </div>
			                              <div class="row">
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="row">
			                                       <div class="col-xs-8 col-sm-8 col-md-8">
			                                          <label class="control-label" style="font-size: 1rem">Drivers License:</label>
			                                       </div>
			                                       <div class="col-xs-4 col-sm-4 col-md-4">
			                                          <div class="form-group">
			                                             <select class="form-control input-sm" name="driver_license">
			                                             <option @if ($profile_info->driver_license == 'Yes') selected="selected" @endif value="Yes">Yes</option>
			                                             <option @if ($profile_info->driver_license == 'No') selected="selected" @endif value="No">No</option>
			                                             </select>
			                                          </div>
			                                       </div>
			                                    </div>
			                                 </div>
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="driver_license_no" id="driver_license_no" class="form-control input-sm" placeholder="Drivers License No" value="{{$profile_info->driver_license_no}}">
			                                    </div>
			                                 </div>
			                              </div>
			                              <div class="save-btn">
			                              <button type="submit" class="custom-btn">Save</button>
			                          </div>
			                           </fieldset>
			                        </form>
			                     </div>	
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
		  <h2>Emergency Contact</h2>
		       <div class="">
			                        <form class="form-horizontal" action="{{route('employee::profile_emg_update')}}" method="post">
			                           <input type="hidden" name="_method" value="PUT">
			                           {{ csrf_field() }}
			                           <fieldset>
			                              <div class="row">
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="emg_name" id="emg_name" class="form-control input-sm" placeholder="Name" value="{{$profile_info->emg_name}}">
			                                    </div>
			                                 </div>
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="emg_relation" id="emg_relation" class="form-control input-sm" placeholder="Relationship" value="{{$profile_info->emg_relation}}">
			                                    </div>
			                                 </div>
			                              </div>
			                              <div class="form-group">
			                                 <input type="text" name="emg_email" id="emg_email" class="form-control input-sm" placeholder="Email Address" value="{{$profile_info->emg_mail}}">
			                              </div>
			                              <div class="row">
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <textarea name="emg_address" id="emg_address" class="form-control input-sm" placeholder="Address">{{$profile_info->emg_address}}</textarea>
			                                    </div>
			                                 </div>
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="emg_postcode" id="emg_postcode" class="form-control input-sm" placeholder="Postcode" value="{{$profile_info->emg_postcode}}">
			                                    </div>
			                                 </div>
			                              </div>
			                              <div class="row">
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="emg_mobile" id="emg_mobile" class="form-control input-sm" placeholder="Mobile" value="{{$profile_info->emg_mobile}}">
			                                    </div>
			                                 </div>
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="emg_telephone" id="emg_telephone" class="form-control input-sm" placeholder="Telephone" value="{{$profile_info->emg_telephone}}">
			                                    </div>
			                                 </div>
			                              </div>
			                              <div class="save-btn">
			                              <button type="submit" class="custom-btn">Save</button>
			                          </div>
			                           </fieldset>
			                        </form>
			                     </div>
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
		  <h2>Education </h2>
		     <div class="add-btn text-right mb-2">
			                        <a href="{{url('employee/education/create')}}" class="custom-btn pull-righ fancybox fancybox.iframe"><b>Add</b></a>
			                     </div>
			                     <br>
			                     @foreach($education as $edu)
			                     <div class="experience-item  edit-wrap">
			                        <h3 class="experience-item-title">
			                           <span class="edit-content"  data-id='background-title'>{{$edu->edu_qualification}}</span>
			                           <a href="<?php echo '/employee/education/'.$edu->id.'/edit'; ?>" class="custom-btn pull-right fancybox fancybox.iframe"><b>Edit</b></a>
			                        </h3>
			                        <p class="experience-item-location">
			                           <span class="edit-content"  data-id='background-location'>{{$edu->edu_institute}}
			                           </span>
			                        </p>
			                        <p class="experience-item-location">
			                           <span class="edit-content"  data-id='background-location'>{{$edu->edu_city}}</span>
			                        </p>
			                        <p class="experience-item-dete">
			                           <span class="edit-content"  data-id='background-date-from' data-placeholder='Date From'>{{$edu->edu_date_from}}</span> -
			                           <span class="edit-content"  data-id='background-date-to' data-placeholder='Date To'>{{$edu->edu_date_to}}</span>
			                        </p>
			                        <div class="content edit-content text-area"  data-id='background-description'>
			                           {{$edu->edu_subject}}
			                        </div>
			                        <div class="content edit-content text-area"  data-id='background-description'>
			                           {{$edu->grade}}
			                        </div>
			                     </div>
			                     @endforeach
  
  </div>
   <div class="tab-pane fade" id="employment" role="tabpanel" aria-labelledby="employment-tab">
		  <h2>Employment </h2>
		 <div class="add-btn">
			                        <a href="{{url('employee/employment/create')}}" class="custom-btn pull-right fancybox fancybox.iframe"><b>Add</b></a>
			                     </div>
			                     <br><br>
			                     @foreach($experiences as $exp)
			                     <div class="experience-item  edit-wrap">
			                        <h3 class="experience-item-title">
			                           <span class="edit-content"  data-id='background-title'>{{$exp->emp_name}}</span>
			                           <a href="<?php echo '/employee/employment/'.$exp->id.'/edit'; ?>" class="custom-btn pull-right fancybox fancybox.iframe"><b>Edit</b></a>
			                        </h3>
			                        <p class="experience-item-location">
			                           <span class="edit-content"  data-id='background-location'>{{$exp->emp_position}}
			                           </span>
			                        </p>
			                        <p class="experience-item-location">
			                           <span class="edit-content"  data-id='background-location'>${{$exp->emp_salary}}</span>
			                        </p>
			                        <p class="experience-item-dete">
			                           <span class="edit-content"  data-id='background-date-from' data-placeholder='Date From'>{{$exp->emp_date_from}}</span> -
			                           <span class="edit-content"  data-id='background-date-to' data-placeholder='Date To'>{{$exp->emp_date_to}}</span>
			                        </p>
			                        <div class="content edit-content text-area"  data-id='background-description'>
			                           {!! $exp->emp_address !!}
			                        </div>
			                        <div class="content edit-content text-area"  data-id='background-description'>
			                           {{ $exp->emp_postcode}}
			                        </div>
			                        <div class="content edit-content text-area"  data-id='background-description'>
			                           {!! $exp->summaries !!}
			                        </div>
			                        <div class="content edit-content text-area"  data-id='background-description'>
			                           {!! $exp->leaving_reason !!}
			                        </div>
			                     </div>
			                     @endforeach
  
  </div>
  <div class="tab-pane fade" id="training" role="tabpanel" aria-labelledby="training-tab">
		  <h2>Training </h2>
		 <div class="add-btn">
			                        <a href="{{url('employee/training/create')}}" class="custom-btn pull-right fancybox fancybox.iframe"><b>Add</b></a>
			                     </div>
			                     <br>
			                     <br>
			                     @foreach($acheivements as $tra)
			                     <div class="experience-item  edit-wrap">
			                        <h3 class="experience-item-title">
			                           <span class="edit-content"  data-id='background-title'>{{$tra->tra_name}}</span>
			                           <a href="<?php echo '/employee/training/'.$tra->id.'/edit'; ?>" class="custom-btn pull-right fancybox fancybox.iframe"><b>Edit</b></a>
			                        </h3>
			                        <p class="experience-item-location">
			                           <span class="edit-content"  data-id='background-location'>{{$tra->tra_taken}}
			                           </span>
			                        </p>
			                     </div>
			                     @endforeach
  
  </div>
  <div class="tab-pane fade" id="cv" role="tabpanel" aria-labelledby="cv-tab">
		  <h2>CV </h2>
		 <div id="para6" class="main-cnt">
			                     @if($profile_info->biodata)
			                     <a target="_blank" href="{{url('/')}}/uploads/biadata/{{$profile_info->biodata}}" class="pull-right"><button style="cursor:pointer"><b>Download CV</b></button></a>
			                     <br><br>
			                     @endif
			                     <form class="form-horizontal" action="{{route('employee::cv_update',['city' => $profile_info->id])}}" method="post"  enctype="multipart/form-data">
			                        <input type="hidden" name="_method" value="PUT">
			                        {{ csrf_field() }}
			                        <fieldset>
			                           <div class="col-xs-12 col-sm-12 col-md-12" style="padding: 0;">
			                              <div class="form-group">
			                                 <label><b>Update your CV</b></label>
			                                 <input type="file" name="biodata" id="biodata" class="form-control input-sm" placeholder="upload cv" required>
			                              </div>
			                           </div>
			                           <button type="submit" class="custom-btn">Save</button>
			                        </fieldset>
			                     </form>
			                  </div>
  
  </div>
</div>
    </div>
    <!-- /.col-md-8 -->
  </div>
  
    <!-- /.col-md-8 -->
  </div>
      <!-- <div class="row">
         <div class="col-sm-12 col-md-3">
            <form method="post" action="{{route('employee::profile_image_update',['city' => $profile_info->id])}}" enctype="multipart/form-data">
               <input type="hidden" name="_method" value="PUT">
               {{ csrf_field() }}
               @if($profile_info->user_image=="")
               <img id="blah" src="{{url('/')}}/jobs/images/noImage.jpg" alt="your image" class="img-responsive profile-img" width="100%"/>
               @else
               <img id="blah" src="{{url('/')}}/uploads/profile_image/{{$profile_info->user_image}}" alt="your image" class="img-responsive profile-img" width="100%"/>
               @endif
               <p style="margin: 10px 0; color:#f15a23"> Please select a profile image and then click save</p>
               <input type='file' name="image" style="float: left;
                  overflow: hidden;
                  max-width: 100%;
                  margin-bottom: 20px;" onchange="readURL(this);" />
               <div class="save-btn">
                  <input type="submit" value="Save" name="experience-item-btn"  class="custom-btn">
               </div>
            </form>
         </div>
         <div class="col-sm-12 col-md-9">
            <div class="employee-dash-main">
            	

	               <h3><b>{{$profile_info->first_name}} {{$profile_info->last_name}}</b>
	                  <a href="{{route('employee::password')}}" class=" custom-btn">Change Password</a>
	               </h3>
	               
	               @if (count($errors) > 0)
	               <div class="alert alert-danger">
	                  <ul>
	                     @foreach ($errors->all() as $error)
	                     <div>{{ $error }}</div>
	                     @endforeach
	                  </ul>
	               </div>
	               @endif
	               @if (Session::has('message'))
	               <div class="alert alert-success">{{ Session::get('message') }}</div>
	               @endif
	               <div class="dashboard-main" style="border:solid 1px #d9d9d9;border-radius:5px;">
		               	<ul>
		               		<li>
			                  <h4 id="head1" class="for-expand"> <b>Personal Details</b>
			                     <a id="expand1" class="pull-right" style="color: #41c796;font-size: 20px;font-weight: bold"></a>
			                  </h4>
			                  <div id="para1" class="main-cnt">
			                     <div class="">
			                        <form class="form-horizontal" action="{{route('employee::profile_update')}}" method="post">
			                           <input type="hidden" name="_method" value="PUT">
			                           {{ csrf_field() }}
			                           <fieldset>
			                              <div class="form-group">
			                                 <input type="text" name="title" id="title" class="form-control input-sm" placeholder="Title" value="{{$profile_info->title}}">
			                              </div>
			                              <div class="row">
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name" value="{{$profile_info->first_name}}">
			                                    </div>
			                                 </div>
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name" value="{{$profile_info->last_name}}">
			                                    </div>
			                                 </div>
			                              </div>
			                              <div class="form-group">
			                                 <input type="text" name="email" id="email" class="form-control input-sm" placeholder="Email Address" value="{{$user->email}}">
			                              </div>
			                              <div class="row">
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <textarea name="address" id="address" class="form-control input-sm" placeholder="Address">{{$profile_info->address}}</textarea>
			                                    </div>
			                                 </div>
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="postcode" id="postcode" class="form-control input-sm" placeholder="Postcode" value="{{$profile_info->post_code}}">
			                                    </div>
			                                 </div>
			                              </div>
			                              <div class="row">
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="dob" id="dob" class="form-control input-sm" placeholder="Date of Birth" value="{{$profile_info->dob}}">
			                                    </div>
			                                 </div>
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="ns" id="ns" class="form-control input-sm" placeholder="National Insurance No" value="{{$profile_info->national_insurance_no}}">
			                                    </div>
			                                 </div>
			                              </div>
			                              <div class="row">
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="mobile" id="mobile" class="form-control input-sm" placeholder="Mobile" value="{{$profile_info->mobile}}">
			                                    </div>
			                                 </div>
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="telephone" id="telephone" class="form-control input-sm" placeholder="Telephone" value="{{$profile_info->telephone}}">
			                                    </div>
			                                 </div>
			                              </div>
			                              <div class="row">
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="row">
			                                       <div class="col-xs-8 col-sm-8 col-md-8">
			                                          <label class="control-label" style="font-size: 1rem">Work Permit required:</label>
			                                       </div>
			                                       <div class="col-xs-4 col-sm-4 col-md-4">
			                                          <div class="form-group">
			                                             <select class="form-control input-sm" name="work_permit">
			                                             <option @if ($profile_info->work_permit == 'Yes') selected="selected" @endif value="Yes">Yes</option>
			                                             <option @if ($profile_info->work_permit == 'No') selected="selected" @endif value="No">No</option>
			                                             </select>
			                                          </div>
			                                       </div>
			                                    </div>
			                                 </div>
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="work_permit_valid" id="work_permit_valid" class="form-control input-sm" placeholder="Work Permit Valid Until" value="{{$profile_info->work_permit_valid}}">
			                                    </div>
			                                 </div>
			                              </div>
			                              <div class="row">
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="passport_no" id="passport_no" class="form-control input-sm" placeholder="Passport No" value="{{$profile_info->passport_no}}">
			                                    </div>
			                                 </div>
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="passport_expire" id="passport_expire" class="form-control input-sm" placeholder="Passport Expiry Date" value="{{$profile_info->passport_expire}}">
			                                    </div>
			                                 </div>
			                              </div>
			                              <div class="row">
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="dbs_no" id="dbs_no" class="form-control input-sm" placeholder="DBS Disclosure No" value="{{$profile_info->dbs_no}}">
			                                    </div>
			                                 </div>
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="dbs_issue" id="dbs_issue" class="form-control input-sm" placeholder="DBS issue date" value="{{$profile_info->dbs_issue}}">
			                                    </div>
			                                 </div>
			                              </div>
			                              <div class="row">
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="birth_country" id="birth_country" class="form-control input-sm" placeholder="Country of Birth" value="{{$profile_info->birth_country}}">
			                                    </div>
			                                 </div>
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="nationality" id="nationality" class="form-control input-sm" placeholder="Nationality" value="{{$profile_info->nationality}}">
			                                    </div>
			                                 </div>
			                              </div>
			                              <div class="row">
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="nmc_pim" id="nmc_pim" class="form-control input-sm" placeholder="NMC Pim" value="{{$profile_info->nmc_pim}}">
			                                    </div>
			                                 </div>
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="nmc_pim_expire" id="nmc_pim_expire" class="form-control input-sm" placeholder="NMC Pin Expiry date" value="{{$profile_info->nmc_pim_expire}}">
			                                    </div>
			                                 </div>
			                              </div>
			                              <div class="row">
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="row">
			                                       <div class="col-xs-8 col-sm-8 col-md-8">
			                                          <label class="control-label" style="font-size: 1rem">Drivers License:</label>
			                                       </div>
			                                       <div class="col-xs-4 col-sm-4 col-md-4">
			                                          <div class="form-group">
			                                             <select class="form-control input-sm" name="driver_license">
			                                             <option @if ($profile_info->driver_license == 'Yes') selected="selected" @endif value="Yes">Yes</option>
			                                             <option @if ($profile_info->driver_license == 'No') selected="selected" @endif value="No">No</option>
			                                             </select>
			                                          </div>
			                                       </div>
			                                    </div>
			                                 </div>
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="driver_license_no" id="driver_license_no" class="form-control input-sm" placeholder="Drivers License No" value="{{$profile_info->driver_license_no}}">
			                                    </div>
			                                 </div>
			                              </div>
			                              <button type="submit" class="custom-btn">Save</button>
			                           </fieldset>
			                        </form>
			                     </div>
			                  </div>
		              		</li>
		              		<li>
			                  <h4 id="head2"  class="for-expand"><b>Emergency Contact</b>
			                     <a id="expand2" class="pull-right" style="color: #f15a23;font-size: 20px;font-weight: bold"></a>
			                  </h4>
			                  <div style="padding:10px;" id="para2" class="main-cnt">
			                     <div class="container">
			                        <form class="form-horizontal" action="{{route('employee::profile_emg_update')}}" method="post">
			                           <input type="hidden" name="_method" value="PUT">
			                           {{ csrf_field() }}
			                           <fieldset>
			                              <div class="row">
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="emg_name" id="emg_name" class="form-control input-sm" placeholder="Name" value="{{$profile_info->emg_name}}">
			                                    </div>
			                                 </div>
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="emg_relation" id="emg_relation" class="form-control input-sm" placeholder="Relationship" value="{{$profile_info->emg_relation}}">
			                                    </div>
			                                 </div>
			                              </div>
			                              <div class="form-group">
			                                 <input type="text" name="emg_email" id="emg_email" class="form-control input-sm" placeholder="Email Address" value="{{$profile_info->emg_mail}}">
			                              </div>
			                              <div class="row">
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <textarea name="emg_address" id="emg_address" class="form-control input-sm" placeholder="Address">{{$profile_info->emg_address}}</textarea>
			                                    </div>
			                                 </div>
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="emg_postcode" id="emg_postcode" class="form-control input-sm" placeholder="Postcode" value="{{$profile_info->emg_postcode}}">
			                                    </div>
			                                 </div>
			                              </div>
			                              <div class="row">
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="emg_mobile" id="emg_mobile" class="form-control input-sm" placeholder="Mobile" value="{{$profile_info->emg_mobile}}">
			                                    </div>
			                                 </div>
			                                 <div class="col-xs-6 col-sm-6 col-md-6">
			                                    <div class="form-group">
			                                       <input type="text" name="emg_telephone" id="emg_telephone" class="form-control input-sm" placeholder="Telephone" value="{{$profile_info->emg_telephone}}">
			                                    </div>
			                                 </div>
			                              </div>
			                              <button type="submit" class="custom-btn">Save</button>
			                           </fieldset>
			                        </form>
			                     </div>
			                  </div>
		                  	</li>
		                  	<li>
			                  <h4 id="head3"  class="for-expand"><b>Education </b>
			                     <a id="expand3" class="pull-right" style="color: #f15a23;font-size: 20px;font-weight: bold"></a>
			                  </h4>
			                  <div style="padding:10px;" id="para3" class="main-cnt">
			                     <div class="add-btn">
			                        <a href="{{route('employee::education.create')}}" class="custom-btn pull-right"><b>Add</b></a>
			                     </div>
			                     <br>
			                     @foreach($education as $edu)
			                     <div class="experience-item container edit-wrap">
			                        <h3 class="experience-item-title">
			                           <span class="edit-content"  data-id='background-title'>{{$edu->edu_qualification}}</span>
			                           <a href="{{route('employee::education.edit', ['country' => $edu->id])}}" class="custom-btn pull-right"><b>Edit</b></a>
			                        </h3>
			                        <p class="experience-item-location">
			                           <span class="edit-content"  data-id='background-location'>{{$edu->edu_institute}}
			                           </span>
			                        </p>
			                        <p class="experience-item-location">
			                           <span class="edit-content"  data-id='background-location'>{{$edu->edu_city}}</span>
			                        </p>
			                        <p class="experience-item-dete">
			                           <span class="edit-content"  data-id='background-date-from' data-placeholder='Date From'>{{$edu->edu_date_from}}</span> -
			                           <span class="edit-content"  data-id='background-date-to' data-placeholder='Date To'>{{$edu->edu_date_to}}</span>
			                        </p>
			                        <div class="content edit-content text-area"  data-id='background-description'>
			                           {{$edu->edu_subject}}
			                        </div>
			                        <div class="content edit-content text-area"  data-id='background-description'>
			                           {{$edu->grade}}
			                        </div>
			                     </div>
			                     @endforeach
			                  </div>
		                  	</li>
		                  	<li>
			                  <h4 id="head4"  class="for-expand"><b> Employment</b>
			                     <a id="expand4" class="pull-right" style="color: #f15a23;font-size: 20px;font-weight: bold"></a>
			                  </h4>
			                  <div style="padding:10px;" id="para4" class="main-cnt">
			                     <div class="add-btn">
			                        <a href="{{route('employee::employment.create')}}" class="custom-btn pull-right"><b>Add</b></a>
			                     </div>
			                     <br><br>
			                     @foreach($experiences as $exp)
			                     <div class="experience-item container edit-wrap">
			                        <h3 class="experience-item-title">
			                           <span class="edit-content"  data-id='background-title'>{{$exp->emp_name}}</span>
			                           <a href="{{route('employee::employment.edit', ['country' => $exp->id])}}" class="custom-btn pull-right"><b>Edit</b></a>
			                        </h3>
			                        <p class="experience-item-location">
			                           <span class="edit-content"  data-id='background-location'>{{$exp->emp_position}}
			                           </span>
			                        </p>
			                        <p class="experience-item-location">
			                           <span class="edit-content"  data-id='background-location'>${{$exp->emp_salary}}</span>
			                        </p>
			                        <p class="experience-item-dete">
			                           <span class="edit-content"  data-id='background-date-from' data-placeholder='Date From'>{{$exp->emp_date_from}}</span> -
			                           <span class="edit-content"  data-id='background-date-to' data-placeholder='Date To'>{{$exp->emp_date_to}}</span>
			                        </p>
			                        <div class="content edit-content text-area"  data-id='background-description'>
			                           {{$exp->emp_address}}
			                        </div>
			                        <div class="content edit-content text-area"  data-id='background-description'>
			                           {{$exp->emp_postcode}}
			                        </div>
			                        <div class="content edit-content text-area"  data-id='background-description'>
			                           {{$exp->summaries}}
			                        </div>
			                        <div class="content edit-content text-area"  data-id='background-description'>
			                           {{$exp->leaving_reason}}
			                        </div>
			                     </div>
			                     @endforeach
			                  </div>
		                  	</li>
		                  	<li>
			                  <h4 id="head5"  class="for-expand"><b> Training</b>
			                     <a id="expand5" class="pull-right" style="color: #f15a23;font-size: 20px;font-weight: bold"></a>
			                  </h4>
			                  <div style="padding:10px;" id="para5" class="main-cnt">
			                     <div class="add-btn">
			                        <a href="{{route('employee::training.create')}}" class="custom-btn pull-right"><b>Add</b></a>
			                     </div>
			                     <br>
			                     <br>
			                     @foreach($acheivements as $tra)
			                     <div class="experience-item container edit-wrap">
			                        <h3 class="experience-item-title">
			                           <span class="edit-content"  data-id='background-title'>{{$tra->tra_name}}</span>
			                           <a href="{{route('employee::training.edit', ['country' => $tra->id])}}" class="custom-btn pull-right"><b>Edit</b></a>
			                        </h3>
			                        <p class="experience-item-location">
			                           <span class="edit-content"  data-id='background-location'>{{$tra->tra_taken}}
			                           </span>
			                        </p>
			                     </div>
			                     @endforeach
			                  </div>
		                  	</li>
		                  	<li>
			                  <h4 style="padding-bottom:20px;" id="head6"  class="for-expand"><b> CV</b>
			                     <a id="expand6" class="pull-right" style="color: #f15a23;font-size: 20px;font-weight: bold"></a>
			                  </h4>
			                  <div id="para6" class="main-cnt">
			                     @if($profile_info->biodata)
			                     <a target="_blank" href="{{url('/')}}/uploads/biadata/{{$profile_info->biodata}}" class="pull-right"><button style="cursor:pointer"><b>Download CV</b></button></a>
			                     <br><br>
			                     @endif
			                     <form class="form-horizontal" action="{{route('employee::cv_update',['city' => $profile_info->id])}}" method="post"  enctype="multipart/form-data">
			                        <input type="hidden" name="_method" value="PUT">
			                        {{ csrf_field() }}
			                        <fieldset>
			                           <div class="col-xs-12 col-sm-12 col-md-12">
			                              <div class="form-group">
			                                 <label><b>Update your CV</b></label>
			                                 <input type="file" name="biodata" id="biodata" class="form-control input-sm" placeholder="upload cv" required>
			                              </div>
			                           </div>
			                           <button type="submit" class="custom-btn">Save</button>
			                        </fieldset>
			                     </form>
			                  </div>
		                  	</li>
		               </ul>
	               </div>
            	
            </div>
         </div>
      </div> -->
   </div>
</section>
<br><br><br>

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
{{--<script src="{{url('/')}}/jobs/js/all.js"></script>--}}
<script>
   function readURL(input) {
   
   
   
       if (input.files && input.files[0]) {
   
   
   
           var reader = new FileReader();
   
   
   
   
   
   
   
           reader.onload = function (e) {
   
   
   
               $('#blah')
   
   
   
                   .attr('src', e.target.result);
   
   
   
           };
   
   
   
   
   
   
   
           reader.readAsDataURL(input.files[0]);
   
   
   
       }
   
   
   
   }
   
   
   
</script>
@endpush
@stop