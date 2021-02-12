@extends('job.layout.fancybox')
@section('content')
    <div class="experience-item container new-item-container">
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
            <form name="carform" method="post" action="{{route('employee::profile_update',['city' => $info->id])}}"  enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
                <h5 style="color: #000000;text-align: center;">Profile Information</h5>
                <div class="input-group">
                    <label>Username<span style="color: red">*</span></label>
                    <input class="uname" type="text" name="username" value="{{$user_info->user_name}}" required>
                </div>
                <div class="input-group">
                    <label>Email<span style="color: red">*</span></label>
                    <input class="email" type="email" name="email" id="email" value="{{$user_info->email}}" required disabled="disabled">
                </div>

                <h5 style="color: #000000;text-align: center;">Your Contact Information</h5>
                <div class="input-group">
                    <label>Location<span style="color: red">*</span></label>
                    <input class="uname" type="text" name="location" value="{{$info->location}}" required>
                </div>
                <div class="input-group">
                    <label>Mobile Number:<span style="color: red">*</span></label>
                    <input class="uname" type="text" name="mobile" value="{{$info->mobile}}" required>
                </div>
                <h5 style="color: #000000;text-align: center;">Your Current Employment {{$info->exprience}} </h5>
                <div class="input-group">
                    <label>Experience <span style="color: red">*</span></label>
                    <select name="expyear" required>
                        <option>Select</option>
                        <option {{ $info->exprience == '99' ? 'selected' : '' }} value="99">Fresher</option>
                        <?php for($i=0;$i<31;$i++){ ?>
                        <option {{ $info->exprience == $i ? 'selected' : '' }} value="{{$i}}" label="{{$i}}"></option>
                        <?php } ?>
                        <option {{ $info->exprience == '31' ? 'selected' : '' }} value="31" label="30+">30+</option>

                    </select>
                </div>
                <div class="input-group">
                    <label>Skills<span style="color: red">*</span></label>
                    <?php
                    $string=implode(",",$skill);
                    ?>
                    <input class="uname" type="text" name="key_skill" value="{{$string}}" required>
                </div>


                <div class="input-group">
                    <label>Profile<span style="color: red">*</span></label>
                    <input class="uname" type="text" name="profile" value="{{$info->position}}" required>
                </div>

                <div class="input-group">
                    <label>Company Name<span style="color: red">*</span></label>
                    <input class="uname" type="text" name="comp_name" value="{{$info->company_name}}" required>
                </div>

                <h5 style="color: #fff;text-align: center;">Your Education Background</h5>

                <select name="basicedu" required>
                    <option value="-1" label="Select">Select</option>
                    <option {{ $info->qualification == 'Not Pursuing Graduation' ? 'selected' : '' }} value="Not Pursuing Graduation" label="Not Pursuing Graduation">Not Pursuing Graduation</option>
                    <option {{ $info->qualification == 'B.A' ? 'selected' : '' }} value="B.A" label="B.A">B.A</option>
                    <option {{ $info->qualification == 'B.Arch' ? 'selected' : '' }} value="B.Arch" label="B.Arch">B.Arch</option>
                    <option {{ $info->qualification == 'BCA' ? 'selected' : '' }} value="BCA" label="BCA">BCA</option>
                    <option {{ $info->qualification == "B.B.A" ? 'selected' : '' }} value="B.B.A" label="B.B.A">B.B.A</option>
                    <option {{ $info->qualification == "B.Com" ? 'selected' : '' }} value="B.Com" label="B.Com">B.Com</option>
                    <option {{ $info->qualification == "B.Ed" ? 'selected' : '' }} value="B.Ed" label="B.Ed">B.Ed</option>
                    <option {{ $info->qualification == "BDS" ? 'selected' : '' }} value="BDS" label="BDS">BDS</option>
                    <option {{ $info->qualification == "BHM" ? 'selected' : '' }} value="BHM" label="BHM">BHM</option>
                    <option {{ $info->qualification == "B.Pharma" ? 'selected' : '' }} value="B.Pharma" label="B.Pharma">B.Pharma</option>
                    <option {{ $info->qualification == "B.Sc" ? 'selected' : '' }} value="B.Sc" label="B.Sc">B.Sc</option>
                    <option {{ $info->qualification == "B.Tech/B.E." ? 'selected' : '' }} value="B.Tech/B.E." label="B.Tech/B.E.">B.Tech/B.E.</option>
                    <option {{ $info->qualification == "LLB" ? 'selected' : '' }} value="LLB" label="LLB">LLB</option>
                    <option {{ $info->qualification == "MBBS" ? 'selected' : '' }} value="MBBS" label="MBBS">MBBS</option>
                    <option {{ $info->qualification == "Diploma" ? 'selected' : '' }} value="Diploma" label="Diploma">Diploma</option>
                    <option {{ $info->qualification == "BVSC" ? 'selected' : '' }} value="BVSC" label="BVSC">BVSC</option>
                    <option {{ $info->qualification == "Other" ? 'selected' : '' }} value="Other" label="Other">Other</option>

                </select>

                <div class="input-group">
                    <label>Upload CV :</label>
                    <input type="file" name="resume" id="resume" onchange="myfn(this);">
                </div>
                <input type="submit" value="Save" name="experience-item-btn">


            </form>


    </div>
    <script>
        function myfn(x) {
            // alert();

            if ($(x)[0].files[0].type=="application/pdf"||$(x)[0].files[0].type=="application/msword"||$(x)[0].files[0].type=="application/vnd.openxmlformats-officedocument.wordprocessingml.document") {
                alert("success");
            }
            else
            {
                alert("CV must be in Ms Word/PDF");
                $(x).val('');
            }
        }
    </script>



    <div class="container">
        <form class="form-horizontal">
            <fieldset>
                <div class="form-group">

                    <input type="text" name="title" id="title" class="form-control input-sm" placeholder="Title">

                </div>

                <div class="row">

                    <div class="col-xs-6 col-sm-6 col-md-6">

                        <div class="form-group">

                            <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">

                        </div>

                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">

                        <div class="form-group">

                            <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">

                        </div>

                    </div>

                </div>


                <div class="row">

                    <div class="col-xs-6 col-sm-6 col-md-6">

                        <div class="form-group">

                            <textarea name="address" id="address" class="form-control input-sm" placeholder="Address"></textarea>

                        </div>

                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">

                        <div class="form-group">

                            <input type="text" name="postcode" id="postcode" class="form-control input-sm" placeholder="Postcode">

                        </div>

                    </div>

                </div>
                <div class="row">

                    <div class="col-xs-6 col-sm-6 col-md-6">

                        <div class="form-group">

                            <input type="text" name="dob" id="dob" class="form-control input-sm" placeholder="Date of Birth">

                        </div>

                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">

                        <div class="form-group">

                            <input type="text" name="ns" id="ns" class="form-control input-sm" placeholder="National Insurance No">

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-xs-6 col-sm-6 col-md-6">

                        <div class="form-group">

                            <input type="text" name="mobile" id="mobile" class="form-control input-sm" placeholder="Mobile">

                        </div>

                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">

                        <div class="form-group">

                            <input type="text" name="telephone" id="telephone" class="form-control input-sm" placeholder="Telephone">

                        </div>

                    </div>

                </div>
                <div class="row">

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="row">
                            <div class="col-xs-5 col-sm-5 col-md-5">
                                <label class="control-label" style="font-size: 1rem">Work Permit required:</label>
                            </div>
                            <div class="col-xs-7 col-sm-7 col-md-7">
                                <div class="form-group">
                                    <select class="form-control input-sm" name="work_permit">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">

                        <div class="form-group">

                            <input type="text" name="work_permit_valid" id="work_permit_valid" class="form-control input-sm" placeholder="Work Permit Valid Until">

                        </div>

                    </div>

                </div>
                <div class="row">

                    <div class="col-xs-6 col-sm-6 col-md-6">

                        <div class="form-group">

                            <input type="text" name="passport_no" id="passport_no" class="form-control input-sm" placeholder="Passport No">

                        </div>

                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">

                        <div class="form-group">

                            <input type="text" name="passport_expire" id="passport_expire" class="form-control input-sm" placeholder="Passport Expiry Date">

                        </div>

                    </div>

                </div>
                <div class="row">

                    <div class="col-xs-6 col-sm-6 col-md-6">

                        <div class="form-group">

                            <input type="text" name="dbs_no" id="dbs_no" class="form-control input-sm" placeholder="DBS Disclosure No">

                        </div>

                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">

                        <div class="form-group">

                            <input type="text" name="dbs_issue" id="dbs_issue" class="form-control input-sm" placeholder="DBS issue date">

                        </div>

                    </div>

                </div>
                <div class="row">

                    <div class="col-xs-6 col-sm-6 col-md-6">

                        <div class="form-group">

                            <input type="text" name="birth_country" id="birth_country" class="form-control input-sm" placeholder="Country of Birth">

                        </div>

                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">

                        <div class="form-group">

                            <input type="text" name="nationality" id="nationality" class="form-control input-sm" placeholder="Nationality">

                        </div>

                    </div>

                </div>
                <div class="row">

                    <div class="col-xs-6 col-sm-6 col-md-6">

                        <div class="form-group">

                            <input type="text" name="nmc_pim" id="nmc_pim" class="form-control input-sm" placeholder="NMC Pim">

                        </div>

                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">

                        <div class="form-group">

                            <input type="text" name="nmc_pim_expire" id="nmc_pim_expire" class="form-control input-sm" placeholder="NMC Pin Expiry date">

                        </div>

                    </div>

                </div>
                <div class="row">


                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="row">
                            <div class="col-xs-5 col-sm-5 col-md-5">
                                <label class="control-label" style="font-size: 1rem">Drivers License:</label>
                            </div>
                            <div class="col-xs-7 col-sm-7 col-md-7">
                                <div class="form-group">
                                    <select class="form-control input-sm" name="driver_license">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">

                        <div class="form-group">

                            <input type="text" name="driver_license_no" id="driver_license_no" class="form-control input-sm" placeholder="Drivers License No">

                        </div>

                    </div>

                </div>
                <button type="submit" class="btn btn-primary btn-block">Save</button>

            </fieldset>
        </form>

    </div>
@stop