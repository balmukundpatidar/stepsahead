@extends('job.layout.layout')
@section('content')

<!--[Pre-Assessment Application] -->
<section class="assessment-application">
   <div class="container">
      <h1>Pre-Assessment Application</h1>
      <p>Welcome to the pre-qualification section of your application.</p>
   </div>
</section>
<!--[Pre-Assessment Application] -->
<!--[Where do you live?] -->
<section class="sec pre-assessment-form bg-light" ng-app="MyApp">
   <div class="container" ng-controller="MyController" >
      <form action="" method="post">
         <div class="assessment-form" >
            <div class="assessment-form-item" ng-show="showme">
               <div class="heading-02">
                  <h5>Where do you live?</h5>
               </div>
               <div class="form-wrapper">
                  <label class="form-check-label" for="uk" ng-click="click1()">
                     <input type="radio" id="uk" class="form-check-input" name="optradio" />
                     <span></span>
                     <div class="radio-img">
                        <img src="{{url('/')}}/jobs/img/location.svg" alt="" />
                        <img src="{{url('/')}}/jobs/img/location-color.svg" alt="" />
                     </div>
                     <h6>UK/UE</h6>
                  </label>
                  <label class="form-check-label" for="rest" data-toggle="modal" data-target="#exampleModal">
                     <span></span>
                     <div class="radio-img">
                        <img src="{{url('/')}}/jobs/img/world.svg" alt="" />
                        <img src="{{url('/')}}/jobs/img/world-color.svg" alt="" />
                     </div>
                     <h6>Rest of the World</h6>
                  </label>
                  <!-- The Modal -->
               </div>
            </div>
            <div class="assessment-form-item " ng-show="showme1">
               <div class="heading-02">
                  <h5>Where do you live?</h5>
               </div>
               <div class="form-wrapper">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <input type="text" ng-model="postacode" ng-required="true" class="form-control" placeholder="Enter Your Passcode" />
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                            <select name="country" class="form-control" ng-model="country" ng-required="true">
                                <option value=''>All locations</option>
                                <option value='GB' @if (old('country') == 'GB') selected="selected" @endif>United Kingdom</option>
                                <option value='GB.CI00' @if (old('country') == 'GB.CI00') selected="selected" @endif>&nbsp;Channel Islands</option>
                                <option value='GB.E' @if (old('country') == 'GB.E') selected="selected" @endif>&nbsp;England</option>
                                <option value='GB.EEE' @if (old('country') == 'GB.EEE') selected="selected" @endif>&nbsp;&nbsp;East of England</option>
                                <option value='GB.EEEA' @if (old('country') == 'GB.EEEA') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Bedfordshire</option>
                                <option value='GB.EEEC' @if (old('country') == 'GB.EEEC') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Cambridgeshire</option>
                                <option value='GB.EEEE' @if (old('country') == 'GB.EEEE') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Essex</option>
                                <option value='GB.EEEG' @if (old('country') == 'GB.EEEG') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Hertfordshire</option>
                                <option value='GB.EEEK' @if (old('country') == 'GB.EEEK') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Norfolk</option>
                                <option value='GB.EEEM' @if (old('country') == 'GB.EEEM') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Suffolk</option>
                                <option value='GB.EEM' @if (old('country') == 'GB.EEM') selected="selected" @endif>&nbsp;&nbsp;East Midlands</option>
                                <option value='GB.EEMA' @if (old('country') == 'GB.EEMA') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Derbyshire</option>
                                <option value='GB.EEME' @if (old('country') == 'GB.EEME') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Leicestershire</option>
                                <option value='GB.EEMI' @if (old('country') == 'GB.EEMI') selected="selected" @endif >&nbsp;&nbsp;&nbsp;Lincolnshire</option>
                                <option value='GB.EEMK' @if (old('country') == 'GB.EEMK') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Northamptonshire</option>
                                <option value='GB.EEMM' @if (old('country') == 'GB.EEMM') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Nottinghamshire</option>
                                <option value='GB.EEMO' @if (old('country') == 'GB.EEMO') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Rutland</option>
                                <option value='GB.EGL' @if (old('country') == 'GB.EGL') selected="selected" @endif>&nbsp;&nbsp;Greater London</option>
                                <option value='GB.ENE' @if (old('country') == 'GB.ENE') selected="selected" @endif>&nbsp;&nbsp;North East England</option>
                                <option value='GB.ENEA' @if (old('country') == 'GB.ENEA') selected="selected" @endif>&nbsp;&nbsp;&nbsp;County Durham</option>
                                <option value='GB.ENEI' @if (old('country') == 'GB.ENEI') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Northumberland</option>
                                <option value='GB.ENEO' @if (old('country') == 'GB.ENEO') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Tyne and Wear</option>
                                <option value='GB.ENW' @if (old('country') == 'GB.ENW') selected="selected" @endif>&nbsp;&nbsp;North West England</option>
                                <option value='GB.ENWA' @if (old('country') == 'GB.ENWA') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Cheshire</option>
                                <option value='GB.ENWC' @if (old('country') == 'GB.ENWC') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Cumbria</option>
                                <option value='GB.ENWE' @if (old('country') == 'GB.ENWE') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Greater Manchester</option>
                                <option value='GB.ENWG' @if (old('country') == 'GB.ENWG') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Lancashire</option>
                                <option value='GB.ENWI' @if (old('country') == 'GB.ENWI') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Merseyside</option>
                                <option value='GB.ESE' @if (old('country') == 'GB.ESE') selected="selected" @endif>&nbsp;&nbsp;South East England</option>
                                <option value='GB.ESEA' @if (old('country') == 'GB.ESEA') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Berkshire</option>
                                <option value='GB.ESEC' @if (old('country') == 'GB.ESEC') selected="selected" @endif>&nbsp;&nbsp;&nbsp;East Sussex</option>
                                <option value='GB.ESEE' @if (old('country') == 'GB.ESEE') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Buckinghamshire</option>
                                <option value='GB.ESEG' @if (old('country') == 'GB.ESEG') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Hampshire</option>
                                <option value='GB.ESEI' @if (old('country') == 'GB.ESEI') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Isle of Wight</option>
                                <option value='GB.ESEK' @if (old('country') == 'GB.ESEK') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Kent</option>
                                <option value='GB.ESEM' @if (old('country') == 'GB.ESEM') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Oxfordshire</option>
                                <option value='GB.ESEO' @if (old('country') == 'GB.ESEO') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Surrey</option>
                                <option value='GB.ESEQ' @if (old('country') == 'GB.ESEQ') selected="selected" @endif>&nbsp;&nbsp;&nbsp;West Sussex</option>
                                <option value='GB.ESW' @if (old('country') == 'GB.ESW') selected="selected" @endif>&nbsp;&nbsp;South West England</option>
                                <option value='GB.ESWA' @if (old('country') == 'GB.ESWA') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Somerset</option>
                                <option value='GB.ESWC' @if (old('country') == 'GB.ESWC') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Dorset</option>
                                <option value='GB.ESWE' @if (old('country') == 'GB.ESWE') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Bristol</option>
                                <option value='GB.ESWG' @if (old('country') == 'GB.ESWG') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Cornwall</option>
                                <option value='GB.ESWI' @if (old('country') == 'GB.ESWI') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Devon</option>
                                <option value='GB.ESWK' @if (old('country') == 'GB.ESWK') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Gloucestershire</option>
                                <option value='GB.ESWM' @if (old('country') == 'GB.ESWM') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Wiltshire</option>
                                <option value='GB.EWM' @if (old('country') == 'GB.EWM') selected="selected" @endif>&nbsp;&nbsp;West Midlands</option>
                                <option value='GB.EWMA' @if (old('country') == 'GB.EWMA') selected="selected" @endif>&nbsp;&nbsp;&nbsp;West Midlands</option>
                                <option value='GB.EWMC' @if (old('country') == 'GB.EWMC') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Herefordshire</option>
                                <option value='GB.EWME' @if (old('country') == 'GB.EWME') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Shropshire</option>
                                <option value='GB.EWMG' @if (old('country') == 'GB.EWMG') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Staffordshire</option>
                                <option value='GB.EWMK' @if (old('country') == 'GB.EWMK') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Warwickshire</option>
                                <option value='GB.EWMM' @if (old('country') == 'GB.EWMM') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Worcestershire</option>
                                <option value='GB.EYH' @if (old('country') == 'GB.EYH') selected="selected" @endif>&nbsp;&nbsp;Yorkshire and the Humber</option>
                                <option value='GB.EYHA' @if (old('country') == 'GB.EYHA') selected="selected" @endif>&nbsp;&nbsp;&nbsp;West Yorkshire</option>
                                <option value='GB.EYHC' @if (old('country') == 'GB.EYHC') selected="selected" @endif>&nbsp;&nbsp;&nbsp;E Riding of Yorkshire</option>
                                <option value='GB.EYHK' @if (old('country') == 'GB.EYHK') selected="selected" @endif>&nbsp;&nbsp;&nbsp;North Yorkshire</option>
                                <option value='GB.EYHM' @if (old('country') == 'GB.EYHM') selected="selected" @endif>&nbsp;&nbsp;&nbsp;South Yorkshire</option>
                                <option value='GB.IOM0' @if (old('country') == 'GB.IOM0') selected="selected" @endif>&nbsp;Isle of Man</option>
                                <option value='GB.NI00' @if (old('country') == 'GB.NI00') selected="selected" @endif>&nbsp;Northern Ireland</option>
                                <option value='GB.NIA0' @if (old('country') == 'GB.NIA0') selected="selected" @endif>&nbsp;&nbsp;County Armagh</option>
                                <option value='GB.NIC0' @if (old('country') == 'GB.NIC0') selected="selected" @endif>&nbsp;&nbsp;County Antrim</option>
                                <option value='GB.NID0' @if (old('country') == 'GB.NID0') selected="selected" @endif>&nbsp;&nbsp;County Down</option>
                                <option value='GB.NIF0' @if (old('country') == 'GB.NIF0') selected="selected" @endif>&nbsp;&nbsp;County Fermanagh</option>
                                <option value='GB.NIL0' @if (old('country') == 'GB.NIL0') selected="selected" @endif>&nbsp;&nbsp;County Londonderry</option>
                                <option value='GB.NIT0' @if (old('country') == 'GB.NIT0') selected="selected" @endif>&nbsp;&nbsp;County Tyrone</option>
                                <option value='GB.S' @if (old('country') == 'GB.S') selected="selected" @endif>&nbsp;Scotland</option>
                                <option value='GB.SB' @if (old('country') == 'GB.SB') selected="selected" @endif>&nbsp;&nbsp;Broders</option>
                                <option value='GB.SBSB' @if (old('country') == 'GB.SBSB') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Scottish Borders</option>
                                <option value='GB.SBSI' @if (old('country') == 'GB.SBSI') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Shetland Islands</option>
                                <option value='GB.SC' @if (old('country') == 'GB.SC') selected="selected" @endif>&nbsp;&nbsp;Central</option>
                                <option value='GB.SCCM' @if (old('country') == 'GB.SCCM') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Clackmannanshire</option>
                                <option value='GB.SCFK' @if (old('country') == 'GB.SCFK') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Falkirk</option>
                                <option value='GB.SCST' @if (old('country') == 'GB.SCST') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Stirling</option>
                                <option value='GB.SD' @if (old('country') == 'GB.SD') selected="selected" @endif>&nbsp;&nbsp;Dumfries and Galloway</option>
                                <option value='GB.SF' @if (old('country') == 'GB.SF') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Fife</option>
                                <option value='GB.SG' @if (old('country') == 'GB.SG') selected="selected" @endif>&nbsp;&nbsp;Grampian</option>
                                <option value='GB.SGAC' @if (old('country') == 'GB.SGAC') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Aberdeen City</option>
                                <option value='GB.SGAS' @if (old('country') == 'GB.SGAS') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Aberdeenshire</option>
                                <option value='GB.SGMO' @if (old('country') == 'GB.SGMO') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Moray</option>
                                <option value='GB.SH' @if (old('country') == 'GB.SH') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Highland</option>
                                <option value='GB.SL' @if (old('country') == 'GB.SL') selected="selected" @endif>&nbsp;&nbsp;Lothian</option>
                                <option value='GB.SLCE' @if (old('country') == 'GB.SLCE') selected="selected" @endif>&nbsp;&nbsp;&nbsp;City of Edinburgh</option>
                                <option value='GB.SLEL' @if (old('country') == 'GB.SLEL') selected="selected" @endif>&nbsp;&nbsp;&nbsp;East Lothian</option>
                                <option value='GB.SLML' @if (old('country') == 'GB.SLML') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Midlothian</option>
                                <option value='GB.SLWL' @if (old('country') == 'GB.SLWL') selected="selected" @endif>&nbsp;&nbsp;&nbsp;West Lothian</option>
                                <option value='GB.SO' @if (old('country') == 'GB.SO') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Orkney Islands</option>
                                <option value='GB.SS' @if (old('country') == 'GB.SS') selected="selected" @endif>&nbsp;&nbsp;Strathclyde</option>
                                <option value='GB.SSAE' @if (old('country') == 'GB.SSAE') selected="selected" @endif>&nbsp;&nbsp;&nbsp;East Ayrshire</option>
                                <option value='GB.SSAN' @if (old('country') == 'GB.SSAN') selected="selected" @endif>&nbsp;&nbsp;&nbsp;North Ayrshire</option>
                                <option value='GB.SSAS' @if (old('country') == 'GB.SSAS') selected="selected" @endif>&nbsp;&nbsp;&nbsp;South Ayrshire</option>
                                <option value='GB.SSDA' @if (old('country') == 'GB.SSDA') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Argyll and Bute</option>
                                <option value='GB.SSDE' @if (old('country') == 'GB.SSDE') selected="selected" @endif>&nbsp;&nbsp;&nbsp;East Dunbartonshire</option>
                                <option value='GB.SSDW' @if (old('country') == 'GB.SSDW') selected="selected" @endif>&nbsp;&nbsp;&nbsp;West Dunbartonshire</option>
                                <option value='GB.SSEE' @if (old('country') == 'GB.SSEE') selected="selected" @endif>&nbsp;&nbsp;&nbsp;East Renfrewshire</option>
                                <option value='GB.SSGC' @if (old('country') == 'GB.SSGC') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Glasgow City</option>
                                <option value='GB.SSIN' @if (old('country') == 'GB.SSIN') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Inverclyde</option>
                                <option value='GB.SSNL' @if (old('country') == 'GB.SSNL') selected="selected" @endif>&nbsp;&nbsp;&nbsp;North Lanarkshire</option>
                                <option value='GB.SSRE' @if (old('country') == 'GB.SSRE') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Renfrewshire</option>
                                <option value='GB.SSSL' @if (old('country') == 'GB.SSSL') selected="selected" @endif>&nbsp;&nbsp;&nbsp;South Lanarkshire</option>
                                <option value='GB.ST' @if (old('country') == 'GB.ST') selected="selected" @endif>&nbsp;Tayside</option>
                                <option value='GB.STA0' @if (old('country') == 'GB.STA0') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Angus</option>
                                <option value='GB.STD0' @if (old('country') == 'GB.STD0') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Dundee City</option>
                                <option value='GB.STP0' @if (old('country') == 'GB.STP0') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Perth and Kinross</option>
                                <option value='GB.SW' @if (old('country') == 'GB.SW') selected="selected" @endif>&nbsp;&nbsp;Western Isles</option>
                                <option value='GB.W' @if (old('country') == 'GB.W') selected="selected" @endif>&nbsp;Wales</option>
                                <option value='GB.WBL0' @if (old('country') == 'GB.WBL0') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Blaenau Gwent</option>
                                <option value='GB.WBR0' @if (old('country') == 'GB.WBR0') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Bridgend</option>
                                <option value='GB.WCA0' @if (old('country') == 'GB.WCA0') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Carmarthenshire</option>
                                <option value='GB.WCD0' @if (old('country') == 'GB.WCD0') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Caerphilly</option>
                                <option value='GB.WCE0' @if (old('country') == 'GB.WCE0') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Ceredigion</option>
                                <option value='GB.WCM0' @if (old('country') == 'GB.WCM0') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Cardiff</option>
                                <option value='GB.WCO0' @if (old('country') == 'GB.WCO0') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Conwy</option>
                                <option value='GB.WDE0' @if (old('country') == 'GB.WDE0') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Denbighshire</option>
                                <option value='GB.WFL0' @if (old('country') == 'GB.WFL0') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Flintshire</option>
                                <option value='GB.WGW0' @if (old('country') == 'GB.WGW0') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Gwynedd</option>
                                <option value='GB.WIS0' @if (old('country') == 'GB.WIS0') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Isle of Anglesey</option>
                                <option value='GB.WME0' @if (old('country') == 'GB.WME0') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Merthyr Tydfil</option>
                                <option value='GB.WMO0' @if (old('country') == 'GB.WMO0') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Monmouthshire</option>
                                <option value='GB.WNP0' @if (old('country') == 'GB.WNP0') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Neath Port Talbot</option>
                                <option value='GB.WNW0' @if (old('country') == 'GB.WNW0') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Newport</option>
                                <option value='GB.WPE0' @if (old('country') == 'GB.WPE0') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Pembrokeshire</option>
                                <option value='GB.WPO0' @if (old('country') == 'GB.WPO0') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Powys</option>
                                <option value='GB.WRH0' @if (old('country') == 'GB.WRH0') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Rhondda Cynon Taff</option>
                                <option value='GB.WSW0' @if (old('country') == 'GB.WSW0') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Swansea</option>
                                <option value='GB.WTO0' @if (old('country') == 'GB.WTO0') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Torfaen</option>
                                <option value='GB.WVA0' @if (old('country') == 'GB.WVA0') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Vale of Glamorgan</option>
                                <option value='GB.WWR0' @if (old('country') == 'GB.WWR0') selected="selected" @endif>&nbsp;&nbsp;&nbsp;Wrexham</option>
                            </select>
                            <span class="help-inline" ng-show="showError">Please complete one of these fields</span>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="text-right">
                           <button type="button" ng-click="click2()" ng-disabled="postacode.$invalid">Next</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="assessment-form-item " ng-show="showme2">
               <div class="heading-02">
                  <h5>Could I get a job?</h5>
               </div>
               <div class="form-wrapper">
                  <div class="assessment-level-3">
                     <h3>Are you legally entitled to work in the UK?</h3>
                     <p>Please note: You’ll need to provide documentation to prove this when you attend
                        your interview
                     </p>
                     <div class="radio-btn">
                        <input type="radio" name="speak-radio" ng-model="legally" value="Yes" id="yes-radio">
                        <label for="yes-radio">Yes</label><br>
                        <input type="radio" name="speak-radio" ng-model="legally" value="No" id="no-radio">
                        <label for="no-radio" data-toggle="modal" data-target="#legallyModal" class="no-radio">No</label><br>
                        <span class="help-inline" ng-show="showError1" >This field is required</span>
                    </div>
                     <div class="col-md-12">
                        <div class="text-right">
                           <button type="button" ng-click="click3()">Next</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="assessment-form-item " ng-show="showme3">
               <div class="heading-02">
                  <h5>Could I get a job?</h5>
               </div>
               <div class="form-wrapper">
                  <div class="assessment-level-3">
                     <h3>Can you speak and write English to a good level?</h3>
                     <div class="radio-btn ">
                        <input type="radio" value="Yes" ng-model="communication"  name="speak-radio" id="yes">
                        <label for="yes">Yes</label>
                     </div>
                     <div class="radio-btn">
                        <input type="radio" value="No" ng-model="communication" name="speak-radio" id="no">
                        <label for="no" data-toggle="modal" data-target="#speakModal" class="no-radio2">No</label>
                     </div>
                     <span class="help-inline" ng-show="showError2" >This field is required</span>

                     <div class="col-md-12">
                        <div class="text-right">
                           <button type="button" ng-click="click4()">Next</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="assessment-form-item " ng-show="showme4">
               <div class="heading-02">
                  <h5>Criminal records</h5>
               </div>
               <div class="form-wrapper">
                  <div class="assessment-level-3">
                     <p>Due to the nature of the work that care workers do, all applicants must undergo
                        an enhanced level criminal records disclosure before they can be employed. If
                        you have a criminal record, this will only automatically exclude you if the
                        offence you have committed means that you are not legally allowed to work with
                        vulnerable people.
                     </p>
                     <p>If you have committed such an offence, you will be committing another offence
                        just by applying for care work, so if you are not sure, we advise that you check
                        on the UK government website before you proceed with an application. 
                     </p>
                     <div class="checkbox-btn">
                        <input type="checkbox"  ng-model="records" id="check-boxs" name="check-box">
                        <label for="check-boxs"> I understand the above</label><br>
                        <span class="help-inline" ng-show="showError5" >This field is required</span>

                    </div>
                     <div class="col-md-12">
                        <div class="text-right">
                           <button type="button" ng-click="click5()">Next</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="assessment-form-item " ng-show="showme5">
               <div class="heading-02">
                  <h5>Do you have the use of your own vehicle?</h5>
               </div>
               <div class="form-wrapper">
                  <div class="assessment-level-3">
                     <h3>Do you have the use of your own vehicle?</h3>
                     <div class="radio-btn ">
                        <input type="radio" ng-model="vehicle" value="Yes" name="vehicle-radio" id="vehicleyes">
                        <label for="vehicleyes">Yes</label>
                     </div>
                     <div class="radio-btn" >
                        <input type="radio" name="vehicle-radio" ng-model="vehicle"  value="No" id="vehicleno">
                        <label for="vehicleno" data-toggle="modal" data-target="#vehicleModal" class="no-radio2">No</label>
                     </div>
                     <span class="help-inline" ng-show="showError6" >This field is required</span>

                     <div class="col-md-12">
                        <div class="text-right">
                           <button type="button" ng-click="click6()">Next</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="assessment-form-item text-center " ng-show="showme6">
                <div class="heading-02">
                    <h5>Your pre-qualification was successful</h5>
                </div>
                <div class="form-wrapper">
                    <div class="assessment-level-3">
                        <p>Congratulations, you appear to be a suitable candidate for Health Care and
                            Support Work. Now you can move onto the full online registration form to tell us
                            more about yourself. Simply press the ‘Continue to register’ button.</p>
                        <div class="col-md-12">
                            <div class="text-center pt-4">
                                <button type="button" ng-click="click7()" class="continue-btn">Continue to Register</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="assessment-form-item text-center " ng-show="showme7">
                <div class="heading-02">
                    <h5>Your pre-qualification was unsuccessful</h5>
                </div>
                <div class="form-wrapper">
                    <div class="assessment-level-3">
                        <p>Whilst most of your answers indicate that you might be suitable for work, the fact that you are not legally entitled to work in the UK means that you are not able to apply for a position through our site at present.</p>
                        <p>If you’d like to discuss your application with us, select the ‘Contact us’ button to send us a message or request a callback from your local branch.</p>
                        <div class="col-md-12">
                            <div class="text-center pt-4">
                                <button type="button" ng-click="click8()" class="continue-btn"> Contact Us</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
      </form>
      <div class="pre-progress">
         <h5 id="updateLoader">10%</h5>
         <div class="progress-full">
            <div id="updateWidth" style="width: 10%;"></div>
         </div>
      </div>
   </div>
</section>
<!--[Where do you live?] -->
<!--[call section close here] -->
<section class="cal-section sec-testimonial">
   <div class="container">
      <div class="row align-items-center wow fadeInUp">
         <div class="col-lg-6 col-sm-7">
            <div class="want-tlk">
               <img src="{{url('/')}}/jobs/img/celular.svg" alt="call-icon" />
               <h2>Want to talk more?</h2>
               <p>
                  For further information about our services or to talk about
                  how we can help you, please contact us.
               </p>
            </div>
         </div>
         <div class="col-lg-6 col-sm-5">
            <div class="call-us text-right">
               <a href="#" class="custom-btn">call us now</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!--[call section close here] -->
<!-- Model -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content model-cnt">
         <div class="modal-body">
            <h3>Check Your Eligibility for UK</h3>
            <p>We are not currently able to accept applications from outside the EU. Please visit our site again
               in the future to see if this situation has changed.
            </p>
         </div>
         <div class="close" data-dismiss="modal" aria-label="Close">
            <img src="{{url('/')}}/jobs/img/cross-arrow.svg" alt="" />
         </div>
      </div>
   </div>
</div>
<!-- vehicleModal -->
<div class="modal fade" id="vehicleModal" tabindex="-1" role="dialog" aria-labelledby="vehicleModal"
   aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content model-cnt">
         <div class="modal-body">
            <h3>PLEASE NOTE</h3>
            <p>You’ll still be able to do work without your own vehicle, but there are more opportunities for people who can travel independently using their own vehicle.</p>
         </div>
         <div class="close" data-dismiss="modal" aria-label="Close">
            <img src="{{url('/')}}/jobs/img/cross-arrow.svg" alt="" />
         </div>
      </div>
   </div>
</div>

<!-- legallyModal -->
<div class="modal fade" id="legallyModal" tabindex="-1" role="dialog" aria-labelledby="legallyModal"
   aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content model-cnt">
         <div class="modal-body">
            <h3>PLEASE NOTE</h3>
            <p>Sorry, you need to be legally entitled to work in the UK. Find out how to get entitlement on the UK government’s websit</p>
         </div>
         <div class="close" data-dismiss="modal" aria-label="Close">
            <img src="{{url('/')}}/jobs/img/cross-arrow.svg" alt="" />
         </div>
      </div>
   </div>
</div>

<!-- speakModal -->
<div class="modal fade" id="speakModal" tabindex="-1" role="dialog" aria-labelledby="speakModal"
   aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content model-cnt">
         <div class="modal-body">
            <h3>PLEASE NOTE</h3>
            <p>It’s very important to be able to speak and write English well, as communicating with clients is a top priority. To make sure your application is successful, you need to be able to:</p>
            <p>Hold fluent conversations with clients</p>
            <p>Read and understand shopping lists, letters and instructions Write detailed reports about your client’s day-to-day care</p>

        </div>
         <div class="close" data-dismiss="modal" aria-label="Close">
            <img src="{{url('/')}}/jobs/img/cross-arrow.svg" alt="" />
         </div>
      </div>
   </div>
</div>
<script type="text/javascript">
   var app = angular.module('MyApp', [])
   app.controller('MyController',['$scope', '$location', function ($scope,$location,$http) {
       //This will hide the DIV by default.
       $scope.job_id={{$job_id}}
       $scope.counter  = "10%";
       $scope.showme = true;
       $scope.click1 = function () {
           //If DIV is visible it will be hidden and vice versa.
           $scope.showme = false;
           $scope.showme1 =  true;
           $scope.counter = '20%'
           $('#updateLoader').text($scope.counter);
           $('#updateWidth').css("width", $scope.counter);  
       }
       $scope.click2 = function () {
           if($scope.postacode || $scope.country) {
               //If DIV is visible it will be hidden and vice versa.
               $scope.showme1 = false;
               $scope.showme2 = true;
               $scope.counter = '45%'
               $('#updateLoader').text($scope.counter);
               $('#updateWidth').css("width", $scope.counter);  
            }
           else{
               $scope.showError = true;
           }
       }
       $scope.click3 = function () {
           if($scope.legally) {
               //If DIV is visible it will be hidden and vice versa.
               $scope.showme2 = false;
               $scope.showme3 = true;
               $scope.counter = '60%'
               $('#updateLoader').text($scope.counter);
               $('#updateWidth').css("width", $scope.counter);  
           }
           else{
               $scope.showError1 = true;
           }
       }
       $scope.click4 = function () {
           if ($scope.communication) {
               //If DIV is visible it will be hidden and vice versa.
               $scope.showme3 = false;
               $scope.showme4 = true;
               $scope.counter = '75%'
               $('#updateLoader').text($scope.counter);
               $('#updateWidth').css("width", $scope.counter);  
           }
           else {
               $scope.showError2 = true;
           }
       }
   
       $scope.click5 = function () {
           if($scope.records) {
               //If DIV is visible it will be hidden and vice versa.
               $scope.showme4 = false;
               $scope.showme5 = true;
               $scope.counter = '90%'
               $('#updateLoader').text($scope.counter);
               $('#updateWidth').css("width", $scope.counter); 
           }else{
               $scope.showError5 = true;
           }
       }
       $scope.click6 = function () {
           if($scope.vehicle) {
               //If DIV is visible it will be hidden and vice versa.
               $scope.showme5 = false;
               if($scope.legally=='Yes'){
                   $scope.showme6 = true;
               }else{
                   $scope.showme7 = true;
               }
               $scope.counter = '100%'
               $('#updateLoader').text($scope.counter);
               $('#updateWidth').css("width", $scope.counter); 
   
           }else{
               $scope.showError6 = true;
           }
       }
       $scope.click7 = function() {
           if($scope.job_id) {
               landingUrl = "/register?id=" + $scope.job_id;
               $(location).attr('href', landingUrl)
           }else{
               landingUrl = "/register";
               $(location).attr('href', landingUrl)
           }
   
       };
       $scope.click8 = function() {
            landingUrl = "/contactus";
            $(location).attr('href', landingUrl)
       };
   }]);
</script>
@stop