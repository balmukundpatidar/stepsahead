@extends('job.layout.layout_noloder')
@section('content')
    <!-- Start About Us -->
    <div class="inner-page-about about">
        <div class="container">

<form method="get" action="{{route('job_query')}}">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3"></div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <label><b>Keyword</b></label>
                    <input type="search" class="form-control" placeholder="Keyword" name="keyword">

                </div>
                <div class="col-md-3 col-sm-3 col-xs-3"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3"></div>
                <div class="col-md-3 col-sm-3 col-xs-3 sec">
                    <label><b>Division</b></label>
                    <select name="division" class="form-control">
                        <option value="">All</option>
                        <option value="1">non-care worker vacancy</option>
                        <option value="2">care worker vacancy</option>
                    </select>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3 sec">
                    <label><b>Location</b></label>
                    <select name='location' class="form-control">
                        <option value=''>All locations</option>
                        <option value='GB'>United Kingdom</option>
                        <option value='GB.CI00'>&nbsp;Channel Islands</option>
                        <option value='GB.E'>&nbsp;England</option>
                        <option value='GB.EEE'>&nbsp;&nbsp;East of England</option>
                        <option value='GB.EEEA'>&nbsp;&nbsp;&nbsp;Bedfordshire</option>
                        <option value='GB.EEEC'>&nbsp;&nbsp;&nbsp;Cambridgeshire</option>
                        <option value='GB.EEEE'>&nbsp;&nbsp;&nbsp;Essex</option>
                        <option value='GB.EEEG'>&nbsp;&nbsp;&nbsp;Hertfordshire</option>
                        <option value='GB.EEEK'>&nbsp;&nbsp;&nbsp;Norfolk</option>
                        <option value='GB.EEEM'>&nbsp;&nbsp;&nbsp;Suffolk</option>
                        <option value='GB.EEM'>&nbsp;&nbsp;East Midlands</option>
                        <option value='GB.EEMA'>&nbsp;&nbsp;&nbsp;Derbyshire</option>
                        <option value='GB.EEME'>&nbsp;&nbsp;&nbsp;Leicestershire</option>
                        <option value='GB.EEMI'>&nbsp;&nbsp;&nbsp;Lincolnshire</option>
                        <option value='GB.EEMK'>&nbsp;&nbsp;&nbsp;Northamptonshire</option>
                        <option value='GB.EEMM'>&nbsp;&nbsp;&nbsp;Nottinghamshire</option>
                        <option value='GB.EEMO'>&nbsp;&nbsp;&nbsp;Rutland</option>
                        <option value='GB.EGL'>&nbsp;&nbsp;Greater London</option>
                        <option value='GB.ENE'>&nbsp;&nbsp;North East England</option>
                        <option value='GB.ENEA'>&nbsp;&nbsp;&nbsp;County Durham</option>
                        <option value='GB.ENEI'>&nbsp;&nbsp;&nbsp;Northumberland</option>
                        <option value='GB.ENEO'>&nbsp;&nbsp;&nbsp;Tyne and Wear</option>
                        <option value='GB.ENW'>&nbsp;&nbsp;North West England</option>
                        <option value='GB.ENWA'>&nbsp;&nbsp;&nbsp;Cheshire</option>
                        <option value='GB.ENWC'>&nbsp;&nbsp;&nbsp;Cumbria</option>
                        <option value='GB.ENWE'>&nbsp;&nbsp;&nbsp;Greater Manchester</option>
                        <option value='GB.ENWG'>&nbsp;&nbsp;&nbsp;Lancashire</option>
                        <option value='GB.ENWI'>&nbsp;&nbsp;&nbsp;Merseyside</option>
                        <option value='GB.ESE'>&nbsp;&nbsp;South East England</option>
                        <option value='GB.ESEA'>&nbsp;&nbsp;&nbsp;Berkshire</option>
                        <option value='GB.ESEC'>&nbsp;&nbsp;&nbsp;East Sussex</option>
                        <option value='GB.ESEE'>&nbsp;&nbsp;&nbsp;Buckinghamshire</option>
                        <option value='GB.ESEG'>&nbsp;&nbsp;&nbsp;Hampshire</option>
                        <option value='GB.ESEI'>&nbsp;&nbsp;&nbsp;Isle of Wight</option>
                        <option value='GB.ESEK'>&nbsp;&nbsp;&nbsp;Kent</option>
                        <option value='GB.ESEM'>&nbsp;&nbsp;&nbsp;Oxfordshire</option>
                        <option value='GB.ESEO'>&nbsp;&nbsp;&nbsp;Surrey</option>
                        <option value='GB.ESEQ'>&nbsp;&nbsp;&nbsp;West Sussex</option>
                        <option value='GB.ESW'>&nbsp;&nbsp;South West England</option>
                        <option value='GB.ESWA'>&nbsp;&nbsp;&nbsp;Somerset</option>
                        <option value='GB.ESWC'>&nbsp;&nbsp;&nbsp;Dorset</option>
                        <option value='GB.ESWE'>&nbsp;&nbsp;&nbsp;Bristol</option>
                        <option value='GB.ESWG'>&nbsp;&nbsp;&nbsp;Cornwall</option>
                        <option value='GB.ESWI'>&nbsp;&nbsp;&nbsp;Devon</option>
                        <option value='GB.ESWK'>&nbsp;&nbsp;&nbsp;Gloucestershire</option>
                        <option value='GB.ESWM'>&nbsp;&nbsp;&nbsp;Wiltshire</option>
                        <option value='GB.EWM'>&nbsp;&nbsp;West Midlands</option>
                        <option value='GB.EWMA'>&nbsp;&nbsp;&nbsp;West Midlands</option>
                        <option value='GB.EWMC'>&nbsp;&nbsp;&nbsp;Herefordshire</option>
                        <option value='GB.EWME'>&nbsp;&nbsp;&nbsp;Shropshire</option>
                        <option value='GB.EWMG'>&nbsp;&nbsp;&nbsp;Staffordshire</option>
                        <option value='GB.EWMK'>&nbsp;&nbsp;&nbsp;Warwickshire</option>
                        <option value='GB.EWMM'>&nbsp;&nbsp;&nbsp;Worcestershire</option>
                        <option value='GB.EYH'>&nbsp;&nbsp;Yorkshire and the Humber</option>
                        <option value='GB.EYHA'>&nbsp;&nbsp;&nbsp;West Yorkshire</option>
                        <option value='GB.EYHC'>&nbsp;&nbsp;&nbsp;E Riding of Yorkshire</option>
                        <option value='GB.EYHK'>&nbsp;&nbsp;&nbsp;North Yorkshire</option>
                        <option value='GB.EYHM'>&nbsp;&nbsp;&nbsp;South Yorkshire</option>
                        <option value='GB.IOM0'>&nbsp;Isle of Man</option>
                        <option value='GB.NI00'>&nbsp;Northern Ireland</option>
                        <option value='GB.NIA0'>&nbsp;&nbsp;County Armagh</option>
                        <option value='GB.NIC0'>&nbsp;&nbsp;County Antrim</option>
                        <option value='GB.NID0'>&nbsp;&nbsp;County Down</option>
                        <option value='GB.NIF0'>&nbsp;&nbsp;County Fermanagh</option>
                        <option value='GB.NIL0'>&nbsp;&nbsp;County Londonderry</option>
                        <option value='GB.NIT0'>&nbsp;&nbsp;County Tyrone</option>
                        <option value='GB.S'>&nbsp;Scotland</option>
                        <option value='GB.SB'>&nbsp;&nbsp;Broders</option>
                        <option value='GB.SBSB'>&nbsp;&nbsp;&nbsp;Scottish Borders</option>
                        <option value='GB.SBSI'>&nbsp;&nbsp;&nbsp;Shetland Islands</option>
                        <option value='GB.SC'>&nbsp;&nbsp;Central</option>
                        <option value='GB.SCCM'>&nbsp;&nbsp;&nbsp;Clackmannanshire</option>
                        <option value='GB.SCFK'>&nbsp;&nbsp;&nbsp;Falkirk</option>
                        <option value='GB.SCST'>&nbsp;&nbsp;&nbsp;Stirling</option>
                        <option value='GB.SD'>&nbsp;&nbsp;Dumfries and Galloway</option>
                        <option value='GB.SF'>&nbsp;&nbsp;&nbsp;Fife</option>
                        <option value='GB.SG'>&nbsp;&nbsp;Grampian</option>
                        <option value='GB.SGAC'>&nbsp;&nbsp;&nbsp;Aberdeen City</option>
                        <option value='GB.SGAS'>&nbsp;&nbsp;&nbsp;Aberdeenshire</option>
                        <option value='GB.SGMO'>&nbsp;&nbsp;&nbsp;Moray</option>
                        <option value='GB.SH'>&nbsp;&nbsp;&nbsp;Highland</option>
                        <option value='GB.SL'>&nbsp;&nbsp;Lothian</option>
                        <option value='GB.SLCE'>&nbsp;&nbsp;&nbsp;City of Edinburgh</option>
                        <option value='GB.SLEL'>&nbsp;&nbsp;&nbsp;East Lothian</option>
                        <option value='GB.SLML'>&nbsp;&nbsp;&nbsp;Midlothian</option>
                        <option value='GB.SLWL'>&nbsp;&nbsp;&nbsp;West Lothian</option>
                        <option value='GB.SO'>&nbsp;&nbsp;&nbsp;Orkney Islands</option>
                        <option value='GB.SS'>&nbsp;&nbsp;Strathclyde</option>
                        <option value='GB.SSAE'>&nbsp;&nbsp;&nbsp;East Ayrshire</option>
                        <option value='GB.SSAN'>&nbsp;&nbsp;&nbsp;North Ayrshire</option>
                        <option value='GB.SSAS'>&nbsp;&nbsp;&nbsp;South Ayrshire</option>
                        <option value='GB.SSDA'>&nbsp;&nbsp;&nbsp;Argyll and Bute</option>
                        <option value='GB.SSDE'>&nbsp;&nbsp;&nbsp;East Dunbartonshire</option>
                        <option value='GB.SSDW'>&nbsp;&nbsp;&nbsp;West Dunbartonshire</option>
                        <option value='GB.SSEE'>&nbsp;&nbsp;&nbsp;East Renfrewshire</option>
                        <option value='GB.SSGC'>&nbsp;&nbsp;&nbsp;Glasgow City</option>
                        <option value='GB.SSIN'>&nbsp;&nbsp;&nbsp;Inverclyde</option>
                        <option value='GB.SSNL'>&nbsp;&nbsp;&nbsp;North Lanarkshire</option>
                        <option value='GB.SSRE'>&nbsp;&nbsp;&nbsp;Renfrewshire</option>
                        <option value='GB.SSSL'>&nbsp;&nbsp;&nbsp;South Lanarkshire</option>
                        <option value='GB.ST'>&nbsp;Tayside</option>
                        <option value='GB.STA0'>&nbsp;&nbsp;&nbsp;Angus</option>
                        <option value='GB.STD0'>&nbsp;&nbsp;&nbsp;Dundee City</option>
                        <option value='GB.STP0'>&nbsp;&nbsp;&nbsp;Perth and Kinross</option>
                        <option value='GB.SW'>&nbsp;&nbsp;Western Isles</option>
                        <option value='GB.W'>&nbsp;Wales</option>
                        <option value='GB.WBL0'>&nbsp;&nbsp;&nbsp;Blaenau Gwent</option>
                        <option value='GB.WBR0'>&nbsp;&nbsp;&nbsp;Bridgend</option>
                        <option value='GB.WCA0'>&nbsp;&nbsp;&nbsp;Carmarthenshire</option>
                        <option value='GB.WCD0'>&nbsp;&nbsp;&nbsp;Caerphilly</option>
                        <option value='GB.WCE0'>&nbsp;&nbsp;&nbsp;Ceredigion</option>
                        <option value='GB.WCM0'>&nbsp;&nbsp;&nbsp;Cardiff</option>
                        <option value='GB.WCO0'>&nbsp;&nbsp;&nbsp;Conwy</option>
                        <option value='GB.WDE0'>&nbsp;&nbsp;&nbsp;Denbighshire</option>
                        <option value='GB.WFL0'>&nbsp;&nbsp;&nbsp;Flintshire</option>
                        <option value='GB.WGW0'>&nbsp;&nbsp;&nbsp;Gwynedd</option>
                        <option value='GB.WIS0'>&nbsp;&nbsp;&nbsp;Isle of Anglesey</option>
                        <option value='GB.WME0'>&nbsp;&nbsp;&nbsp;Merthyr Tydfil</option>
                        <option value='GB.WMO0'>&nbsp;&nbsp;&nbsp;Monmouthshire</option>
                        <option value='GB.WNP0'>&nbsp;&nbsp;&nbsp;Neath Port Talbot</option>
                        <option value='GB.WNW0'>&nbsp;&nbsp;&nbsp;Newport</option>
                        <option value='GB.WPE0'>&nbsp;&nbsp;&nbsp;Pembrokeshire</option>
                        <option value='GB.WPO0'>&nbsp;&nbsp;&nbsp;Powys</option>
                        <option value='GB.WRH0'>&nbsp;&nbsp;&nbsp;Rhondda Cynon Taff</option>
                        <option value='GB.WSW0'>&nbsp;&nbsp;&nbsp;Swansea</option>
                        <option value='GB.WTO0'>&nbsp;&nbsp;&nbsp;Torfaen</option>
                        <option value='GB.WVA0'>&nbsp;&nbsp;&nbsp;Vale of Glamorgan</option>
                        <option value='GB.WWR0'>&nbsp;&nbsp;&nbsp;Wrexham</option>
                    </select>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3"></div>
                <div class="col-md-3 col-sm-3 col-xs-3 sec">
                    <label><b>Postal Code</b></label>
                    <input type="text" class="form-control" placeholder="Postal Code" name="postal_code">
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3 sec">
                    <label><b>Miles</b></label>
                    <select name="distance" class="form-control">
                        <option value="">...</option>
                        <option value="5">5 miles</option>
                        <option value="10">10 miles</option>
                        <option value="15">15 miles</option>
                        <option value="20">20 miles</option>
                        <option value="30">30 miles</option>
                        <option selected="selected" value="50">50 miles</option>
                        <option value="100">100 miles</option>
                    </select>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-5"></div>
                <div class="col-md-2 col-sm-2 col-xs-3">
                    <button type="submit" class="btn btn-primary" style="background: #f15a23;border-color: #f15a23">Job Search</button></div>
                <div class="col-md-5 col-sm-5 col-xs-35"></div>
            </div>
</form>
        </div>

    </div>
    <br>
@stop