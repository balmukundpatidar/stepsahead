@extends('job.layout.layout')
@section('content')
    
    {{--<div class="page-title-main">--}}
    {{--<div class="container">--}}
    {{--<div class="clearfix">--}}
    {{--<div class="title-all text-center">--}}
    {{--<h2>Careers</h2>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    <!-- End All Pages Title -->
    </div>
    <!-- End Header -->
    <!-- Start About Us -->
<section class="assessment-application">
            <div class="container">
                <h1>Sign Up Your User Account</h1>
                <p>Fill an form field to go next step</p>
            </div>
        </section>
<section class="sec sec-user-signup bg-light">
    <div class="container">
        <div class="signup-main">
           <ul class="nav nav-tabs" id="employee_registration_tab">
                        <li ><a href="#personal" class="active" data-toggle="tab" id="tab1">
                                <div class="icon-img">
                                    <img src="{{url('/')}}/jobs/img/Icon awesome-user-minus.svg" alt="" class="img-colored" />
                                    <img src="{{url('/')}}/jobs/img/Icon awesome-user-minus-white.svg" alt="" class="img-white" />
                                </div>
                               <span> Personal </span><span>Details</span>
                            </a>
                        </li>
                        <li class="disabled"><a href="#kin_details"  data-toggle="" id="tab2">
                                <div class="icon-img">
                                    <img src="{{url('/')}}/jobs/img/Icon awesome-user-minus.svg" alt="" class="img-colored" />
                                    <img src="{{url('/')}}/jobs/img/Icon awesome-user-minus-white.svg" alt="" class="img-white" />
                                </div>
                               <span> Kin </span><span>Details</span>
                            </a>
                        </li>
                        <li class="disabled"><a href="#address-info" data-toggle="" id="tab3">
                                <div class="icon-img">
                                    <img src="{{url('/')}}/jobs/img/Icon open-document.svg" alt="" class="img-colored" />
                                    <img src="{{url('/')}}/jobs/img/Icon open-document-white.svg" alt="" class="img-white" />
                                </div>
                                 <span> Work  </span>   <span>Status  </span>
                            </a>
                        </li>
                        <li class="disabled"><a href="#additional-info" data-toggle="" id="tab4">
                                <div class="icon-img">
                                    <img src="{{url('/')}}/jobs/img/Icon material-contacts.svg" alt="" class="img-colored" />
                                    <img src="{{url('/')}}/jobs/img/Icon material-contacts-white.svg" alt="" class="img-white" />
                                </div>
                                  <span>Emergency  </span>   <span>Contact  </span>
                            </a>
                        </li>
                        <li class="disabled"><a href="#job-info" data-toggle="" id="tab5">
                                <div class="icon-img">
                                    <img src="{{url('/')}}/jobs/img/Icon awesome-university.svg" alt="" class="img-colored" />
                                    <img src="{{url('/')}}/jobs/img/Icon awesome-university-white.svg" alt="" class="img-white" />
                                </div>   <span>Education  <span>
                            </a>
                        </li>
                        <li class="disabled">
                            <a href="#qualification-info" data-toggle="" id="tab6">
                                <div class="icon-img">
                                    <img src="{{url('/')}}/jobs/img/Icon awesome-building.svg" alt="" class="img-colored" />
                                    <img src="{{url('/')}}/jobs/img/Icon awesome-building-white.svg" alt="" class="img-white" />
                                </div>  <span>Recent  </span>
                                  <span>Employment  </span>
                            </a>
                        </li>
                        <li class="disabled">
                            <a href="#termination-info" data-toggle="" id="tab7">
                                <div class="icon-img">
                                    <img src="{{url('/')}}/jobs/img/Icon ionic-ios-document.svg" alt="" class="img-colored" />
                                    <img src="{{url('/')}}/jobs/img/Icon ionic-ios-document-white.svg" alt="" class="img-white" />
                                </div>
                                 <span> Declaration  </span>
                            </a>
                        </li>
                    </ul>
                <!--<input id="tab1" type="radio" name="tabs" checked>
                <label for="tab1">1. Personal Details</label>
                <input id="tab2" type="radio" name="tabs">
                <label for="tab2">2. Personal Details</label>
                <input id="tab3" type="radio" name="tabs">
                <label for="tab3">3.Emergency Contact</label>
                <input id="tab4" type="radio" name="tabs">
                <label for="tab4">4.Recent Education</label>
                <input id="tab5" type="radio" name="tabs">
                <label for="tab5">5.Recent Employmentn</label>
                <input id="tab6" type="radio" name="tabs">
                <label for="tab6">6.Declaration</label>-->
                  <section id="panel1">
                        <form id="first_block">
                            {{csrf_field()}}
                            <input type="hidden" name="userid" id="userid" value="{{ Request::segment(2) }}" />
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <!--<input type="text" name="title" id="title" class="form-control input-sm"
                                            placeholder="Title">-->
											<select class="form-control input-sm mdb-select md-form" name="title" id="title" >
											  <option value="" disabled selected>Select your title</option>
											  <option value="Miss">Miss</option>
											  <option value="Mr">Mr</option>
											  <option value="Mrs">Mrs</option>
											  <option value="Dr">Dr</option>
											  <option value="Lady">Lady</option>
											  <option value="Major">Major</option>
											</select>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <!--<input type="text" name="first_name" id="first_name"
                                            class="form-control input-sm" placeholder="First Name">-->
											<input type="text" name="full_name" id="full_name"
                                            class="form-control input-sm" placeholder="Full Name" required>
											
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <!--<input type="text" name="last_name" id="last_name" class="form-control input-sm"
                                            placeholder="Last Name">-->
											<input type="text" name="maiden_name" id="maiden_name" class="form-control input-sm"
                                            placeholder="Maiden Name" required>
                                    </div>
                                </div>
								
								<div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="nationality" id="nationality" class="form-control input-sm"
                                            placeholder="Nationality" required>
                                    </div>
                                </div>
                                <!--<div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="postcode" id="postcode" class="form-control input-sm"
                                            placeholder="Post Code">
                                    </div>
                                </div>-->
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <textarea type="text" name="address" id="address" class="form-control input-sm"
                                            placeholder="Address" required>
                                        </textarea>
                                    </div>
                                </div>
								 <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="postcode" id="postcode" class="form-control input-sm"
                                            placeholder="Post Code" required>
                                    </div>
                                </div>
                                <!-- <div class="col-xs-6 col-sm-6 col-md-6">
                                  
                                </div>  -->
                            </div>
							   
							   <h3>Contact numbers- </h3>
							   <hr>
							   </br>
							   <div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="home-contact" id="home-contact" class="form-control input-sm"
                                            placeholder="Home" onblur="getmobcontact();" required>
                                    </div>
                                    <div id="contact_msg" style="display:none;">
                                        <span class="error_msg">Please enter Mobile or Telephone Number</span>
                                    </div>
                                </div>
								<div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="mobile" id="mobile" class="form-control input-sm"
                                            placeholder="Mobile" onblur="getmobcontact();" required>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="telephone" id="telephone" class="form-control input-sm"
                                            placeholder="Work" onblur="gettelecontact();" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
							
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <!--<input type="text" name="dob" id="dob" class="form-control input-sm"
                                            placeholder="Date of Birth" >-->
											<input type="text" name="email_address" id="email_address" class="form-control input-sm"
                                            placeholder="Email Address" required>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="ns" id="ns" class="form-control input-sm"
                                            placeholder="National Insurance Number" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <div class="btnprt">
                                    <input type="button" class="custom-btn" onclick="registration_tab(1)" value="Next">
                                </div>
                            </div>
                        </form>
                    </section>
                    <section id="panel2" class="tab-panel2" style="display:none">
                        <form id="Seventh_block">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <!--<input type="text" name="title" id="title" class="form-control input-sm"
                                            placeholder="Title">-->
											<select class="form-control input-sm mdb-select md-form" name="kin_title" id="kin_title" >
											  <option value="" disabled selected>Select your title</option>
											  <option value="Miss">Miss</option>
											  <option value="Mr">Mr</option>
											  <option value="Mrs">Mrs</option>
											  <option value="Dr">Dr</option>
											  <option value="Lady">Lady</option>
											  <option value="Major">Major</option>
											</select>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <!--<input type="text" name="first_name" id="first_name"
                                            class="form-control input-sm" placeholder="First Name">-->
											<input type="text" name="kin_full_name" id="kin_full_name"
                                            class="form-control input-sm" placeholder="Full Name" required>
											
                                    </div>
                                </div>
                            </div>
                             <h3>Contact numbers- </h3>
							   <hr>
							   </br>
							   <div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="kin_home-contact" id="kin_home-contact" class="form-control input-sm"
                                            placeholder="Home" onblur="getmobcontact();" required>
                                    </div>
                                    <div id="contact_msg" style="display:none;">
                                        <span class="error_msg">Please enter Mobile or Telephone Number</span>
                                    </div>
                                </div>
								<div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="kin_mobile" id="kin_mobile" class="form-control input-sm"
                                            placeholder="Mobile" onblur="getmobcontact();" required>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="kin_telephone" id="kin_telephone" class="form-control input-sm"
                                            placeholder="Work" onblur="gettelecontact();" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
							
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <!--<input type="text" name="dob" id="dob" class="form-control input-sm"
                                            placeholder="Date of Birth" >-->
											<input type="text" name="kin_email_address" id="kin_email_address" class="form-control input-sm"
                                            placeholder="Email Address" required>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="relationship" id="relationship" class="form-control input-sm"
                                            placeholder="Relationship to you" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <div class="btnprt">
                        <input type="button" class=" custom-btn" id="first_prev" value="Previous">
                        <input type="button" class=" custom-btn" onclick="registration_tab(2)" value="Next">
                    </div>
                            </div>
                        </form>
                    </section>
                <section id="panel3" class="tab-panel3" style="display:none">
                        <form id="second_block">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="row  align-items-center">
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <label class="control-label" style="font-size: 1rem;margin: 0;">Work Visa /Work
                                                Permit</label>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group" style="margin: 0;">
                                                <select class="form-control input-sm " name="work_permit"
                                                    id="work_permit">
                                                    <option value="">Select</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div id="permit_no" style="display: block;">
                                        <div class="form-group">
                                            <input type="text" name="work_permit_valid" id="work_permit_valid"
                                                class="form-control input-sm"
                                                placeholder="Work Visa /Work Permit Valid Until">
                                        </div>
                                    </div>
                                </div>
                            </div>
                {{-- CHM-WAL --}}
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group"><input type="checkbox" id="passcheck" class="enabled_passport_number"
                                name="enabled_passport_number" value="Yes"><label for="passcheck">Enable Passport Number</label>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group"><input type="checkbox" id="passnumb" class="enabled_dbs_number"
                                name="enabled_dbs_number" value="Yes"><label for="passnumb">Enable DBS Disclosure Number</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="passport_no" id="passport_no" class="form-control input-sm"
                                placeholder="Passport Number" onblur="get_passport_detail();" disabled="true">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="passport_expire" id="passport_expire" class="form-control input-sm"
                                placeholder="Passport Expiry Date" disabled="true" onblur="passport_check();" readonly>
                        </div>
                        <div id="passport_expiry_date" style="display:none;">
                            <span class="error_msg">Please enter passport expiry date!</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="dbs_no" id="dbs_no" class="form-control input-sm"
                                placeholder="DBS Disclosure Number" onblur="get_dbs_no();" disabled="true">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="dbs_issue" id="dbs_issue" class="form-control input-sm"
                                placeholder="DBS issue date" disabled="true" onblur="dbs_check();" readonly>
                        </div>
                        <div id="dbs_issue_date" style="display:none;">
                            <span class="error">Please enter DBS issue date!</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="birth_country" id="birth_country" class="form-control input-sm"
                                placeholder="Country of Birth">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="nationality" id="nationality" class="form-control input-sm"
                                placeholder="Nationality">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="checkbox" name="nmc_pim_chk" id="nmc_pim_chk"
                                     class="input-sm" placeholder="NMC Pin" onclick="nmc_chk();"><label for="nmc_pim_chk"> Please
                                Check (If you are Nurse)</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <label>NMC Pin Number</label>
                        <div class="form-group">
mo
                            <input type="text" name="nmc_pim" id="nmc_pim" class="form-control input-sm"
                                placeholder="NMC Pin" value="N/A" onblur="nmcpin_chk();" disabled="true">
                        </div>
                        <div id="nmc_num_error" style="display:none;">
                            <span class="error">Please enter NMC PIN Number!</span>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>NMC Pin Date</label>
                            <input type="text" name="nmc_pim_expire" id="nmc_pim_expire" class="form-control input-sm"
                                placeholder="NMC Pin Expiry date" value="N/A" onblur="nmc_expiry_date();" readonly>
                        </div>
                        <div id="nmc_date_error" style="display:none;">
                            <span class="error">Please enter NMC PIN expiry date!</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="row align-items-center">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <label class="control-label" style="font-size: 1rem;margin-bottom: 0">Drivers
                                    License</label>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group mb-0">
                                    <select class="form-control input-sm" name="driver_license" id="driver_license">
                                        <option value="">Select</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div id="license_no" style="display:none;">
                            <div class="form-group">
                                <input type="text" name="driver_license_no" id="driver_license_no"
                                    class="form-control input-sm" placeholder="Drivers License Number">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="btnprt">
                        <input type="button" class=" custom-btn" id="second_prev"
                             value="Previous">
                        <input type="button" class=" custom-btn"
                             onclick="registration_tab(3)"
                            value="Next">
                    </div>
                </div>
                </form>
        </section>
                <section id="panel4" style="display:none">
                    <form id="third_block">
                        <div class="row">
                            
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="emg_name" id="emg_name" class="form-control input-sm" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="emg_relation" id="emg_relation" class="form-control input-sm" placeholder="Relationship">
                                </div>
                            </div>
                        </div>
 <div class="row">
                            
                            <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="emg_email" id="emg_email" class="form-control input-sm" placeholder="Email Address">
                        </div>
                    </div>
                      <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="emg_postcode" id="emg_postcode" class="form-control input-sm" placeholder="Postcode">
                                </div>
                            </div>
                </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="emg_address" id="emg_address" class="form-control input-sm" placeholder="Address"></textarea>
                                </div>
                            </div>
                          
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                   <!-- <input type="text" name="emg_mobile" id="emg_mobile" class="form-control input-sm" placeholder="Mobile" onblur="empmobcontact();"> -->
                                    <input type="text" name="emg_mobile" id="emg_mobile" class="form-control input-sm" placeholder="Mobile" onblur="">
                                </div>
                                <div id="empcontact_msg" style="display:none;">
                                    <span class="error_msg" >Please enter Mobile or Telephone Number</span>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                  <!--  <input type="text" name="emg_telephone" id="emg_telephone" class="form-control input-sm" placeholder="Telephone" onblur="emptelecontact();"> -->
                                    <input type="text" name="emg_telephone" id="emg_telephone" class="form-control input-sm" placeholder="Telephone" onblur="">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="btnprt">
                                <input type="button" class="custom-btn" id="third_prev" value="Previous">
                                <input type="button" class="custom-btn" onclick="registration_tab(4)" value="Next">
                            </div>
                        </div>
                    </form>
                </section>
                <section id="panel5" style="display:none">
                    <form id="fourth_block">
                        <div class="row">
                           
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="edu_name" id="edu_name" class="form-control input-sm" placeholder="Qualification">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="edu_city" id="edu_city" class="form-control input-sm" placeholder="City">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="edu_institute" id="edu_institute" class="form-control input-sm" placeholder="Institute Name">
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="edu_date_from" id="edu_date_from" class="form-control input-sm" placeholder="Date From" readonly>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="edu_date_to" id="edu_date_to" class="form-control input-sm" placeholder="Date To" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <textarea name="edu_subject" id="edu_subject" class="form-control input-sm" placeholder="Subject Taken"></textarea>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="edu_grade" id="edu_grade" class="form-control input-sm" placeholder="Grade">
                                </div>
                            </div>
                        </div>
                        <!--<div style="color:red;">Please add more education in your profile once you finish the registration process.</div>-->
                        <div class="row justify-content-end">
                            <div class="btnprt">
                                <input type="button" class="custom-btn" id="fourth_prev" value="Previous">
                                <input type="button" class="custom-btn" onclick="registration_tab(5)" value="Next">
                            </div>
                        </div>
                    </form>
                </section>
                <section id="panel6" style="display: none;">
                    <form id="fifth_block">
                        <div class="row align-items-center">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                            
                            <input class="enable_recent_employment" type="checkbox" id="field-enable" name="enable_recent_employment" value="Yes"><label for="field-enable">Enable Fields</label>
                        </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="emp_name" id="emp_name" class="form-control input-sm" placeholder="Name of Employer" disabled="true">
                                </div>
                            </div>
                           
                        </div>
<div class="row">
 <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="emp_position" id="emp_position" class="form-control input-sm" placeholder="Position Held" disabled="true">
                                </div>
                            </div>
                             <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="emp_salary" id="emp_salary" class="form-control input-sm" placeholder="Salary" disabled="true">
                        </div>
</div>
</div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <textarea name="emp_address" id="emp_address" class="form-control input-sm" placeholder="Employers Address" disabled="true"></textarea>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="emp_postcode" id="emp_postcode" class="form-control input-sm" placeholder="Postcode" disabled="true">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="emp_date_from" id="emp_date_from" class="form-control input-sm" placeholder="Employment From" disabled="true">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="emp_date_to" id="emp_date_to" class="form-control input-sm" placeholder="Employment To" disabled="true">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <textarea name="emp_duties" id="emp_duties" class="form-control input-sm" placeholder="Summary of Duties" disabled="true"></textarea>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <textarea name="emp_leaving_reason" id="emp_leaving_reason" class="form-control input-sm" placeholder="Reason for leaving" disabled="true"></textarea>
                                </div>
                            </div>
                            <div style="color:red;">Please add more employment in your profile once you finish the registration process.</div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="btnprt">
                                <input type="button" class="custom-btn" id="fifth_prev" value="Previous">
                                <input type="button" class="custom-btn"  onclick="registration_tab(6)" value="Next">
                            </div>
                        </div>
                    </form>
                </section>
                <section id="panel7" style="display:none">
                    <form id="sixth_block" enctype="multipart/form-data">
                        <div class="row">
                          
                           <div class="alert alert-danger" id="danger" style="display:none">
                            </div>
                             <div class="alert alert-success" id="success" style="display:none"></div>
                            <div class="col-xs-2 col-sm-2 col-md-2">
                                <div class="form-group">
                                    <label class="control-label" style="font-size: 1rem">Upload CV:</label>
                                </div>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <div class="form-group">
                                    <input required type="file" name="biodata" id="biodata" class="form-control input-sm" placeholder="Upload Cv">
                                </div>
                            </div>
                            <!--<div class="col-xs-2 col-sm-2 col-md-2">
                                <div class="form-group">
                                    <input type="button" value="Upload" class="btn btn-primary" onclick="photo_upload()"/>
                                </div>
                            </div>-->
                        </div>
                        <div class="form-group">
                            <label class="control-label" style="font-size: 1rem">Where did you hear about this Opportunity?</label>
                            <br>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="funkyradio">
                                        <div class="funkyradio-default radio-btn">
                                            <input required type="radio" name="hear_about" id="radio1" value="GS" />
                                            <label for="radio1">Google search</label>
                                        </div>
                                        <div class="funkyradio-default radio-btn">
                                            <input type="radio" name="hear_about" id="radio2" value="F" />
                                            <label for="radio2">Facebook</label>
                                        </div>
                                        <div class="funkyradio-default radio-btn">
                                            <input type="radio" name="hear_about" id="radio3" value="T" />
                                            <label for="radio3">Twitter</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="funkyradio">
                                        <div class="funkyradio-default radio-btn">
                                            <input type="radio" name="hear_about" id="radio4" value="Y" />
                                            <label for="radio4">YouTube</label>
                                        </div>
                                        <div class="funkyradio-default radio-btn">
                                            <input type="radio" name="hear_about" id="radio5" value="I" />
                                            <label for="radio5">Instagram</label>
                                        </div>
                                        <div class="funkyradio-default radio-btn">
                                            <input type="radio" name="hear_about" id="radio6" value="O" />
                                            <label for="radio6">Other</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="second-confirm">
                                            <input type="checkbox" name="kk" value="1" required="">
                                            Click here to Opt In that you agree to the <a class="" href="/register-terms-and-consitions" target="_blank">T&amp;C's</a> as part of using this website
                                        </span>
                        <div class="row justify-content-end">
                            <div class="btnprt">
                                {{-- CHM-WAL --}}
                                <input type="hidden" class="jobApplyId" name="jobApplyId" value="{{Session::get('jobApplyId') }}">
                                <div class="col-md-4">
                                    <div class="form-group"><input type="button" class="custom-btn" id="sixth_prev"  value="Previous"></div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group"><input type="button" class="custom-btn"  onclick="registration_tab(7)" value="Register"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </section>
           
        </div>
        <div id="contact"></div>
    </div>
</div>
</section>
    @push('script_top')
        <script src="{{url('/')}}https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <meta name="_token" content="{{ csrf_token() }}">
    @endpush
        <script type="text/javascript">
            // CHM-WAL enable fields on basis of checkbox
            $(function() {
                $('.enabled_passport_number').change(function() {
                    console.log('fff')
                    if ($(this).is(':checked')) {
                        
                        $('#passport_no').removeAttr('disabled');
                    } else {
                        $('#passport_no').attr('disabled', 'disabled');
                        
                    }
                });
                $('.enabled_dbs_number').change(function() {
                    if ($(this).is(':checked')) {
                        $('#dbs_no').removeAttr('disabled');
                    } else {
                        $('#dbs_no').attr('disabled', 'disabled');
                        
                    }
                });
                 $('.enable_recent_employment').click(function() {
                    if ($(this).is(':checked')) {
                        $('#emp_leaving_reason').removeAttr('disabled');
                        $('#emp_duties').removeAttr('disabled');
                        $('#emp_date_to').removeAttr('disabled');
                        $('#emp_date_from').removeAttr('disabled');
                        $('#emp_postcode').removeAttr('disabled');
                        $('#emp_address').removeAttr('disabled');
                        $('#emp_salary').removeAttr('disabled');
                        $('#emp_position').removeAttr('disabled');
                        $('#emp_name').removeAttr('disabled');
                    } else {
                        $('#emp_leaving_reason').attr('disabled', 'disabled');
                        $('#emp_duties').attr('disabled', 'disabled');
                        $('#emp_date_to').attr('disabled', 'disabled');
                        $('#emp_date_from').attr('disabled', 'disabled');
                        $('#emp_postcode').attr('disabled', 'disabled');
                        $('#emp_address').attr('disabled', 'disabled');
                        $('#emp_salary').attr('disabled', 'disabled');
                        $('#emp_position').attr('disabled', 'disabled');
                        $('#emp_name').attr('disabled', 'disabled');
                        
                    }
                });
                
            });
            /*  function isValidContainer($place){
                    retrurnVal = true;
                $place.find('input, textarea, select').each(function() {
                   var element = $(this);
                   if (element.val() == "") {
                       retrurnVal = false;
                   }
                });
                if(retrurnVal == false) {
                        alert('Some fields are empty');
                }
                return retrurnVal;
                }
                              $("#wizard").steps({
                headerTag: "h2",
                bodyTag: "section",
                saveState: true,
                onStepChanged: function(e, currentIndex, priorIndex) {
                        // You don't need to care about it
                        // It is for the specific demo
                    },
                    // Triggered when clicking the Previous/Next buttons
                    onStepChanging: function(e, currentIndex, newIndex) {
                        console.log(currentIndex, newIndex);
                        if( newIndex > currentIndex) {
                        var fv         = $('#wizard').data('formValidation'), // FormValidation instance
                            // The current step container
                            $container = $('#wizard').find('section.current');
                        var isValidStep = isValidContainer($container);
                        if (isValidStep === false || isValidStep === null) {
                            // Do not jump to the next step
                            return false;
                        }
                        return true;
                    } else {
                        return true;
                    }
                    },
                    // Triggered when clicking the Finish button
                    onFinishing: function(e, currentIndex) {
                        var fv         = $('#wizard').data('formValidation'),
                            $container = $('#wizard').find('section[data-step="' + currentIndex +'"]');
                        var isValidStep = isValidContainer($container);
                        if (isValidStep === false || isValidStep === null) {
                            return false;
                        }
                        return true;
                    },
                    onFinished: function(e, currentIndex) {
                        // Uncomment the following line to submit the form using the defaultSubmit() method
                        //$('#wizard').formValidation('defaultSubmit');
                        // For testing purpose
                        $('#welcomeModal').modal("show");
                    }
                })
        */
        </script>
    <!-- End About Us -->
@stop