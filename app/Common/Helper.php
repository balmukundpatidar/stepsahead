<?php
namespace App\Common;

use App\Model\Country;

class Helper
{

//    function country_name($key)
//    {
//        $value=array(
//            "GB.WWR0" => "Wrexham",
//            "GB.WVA0" => "Vale of Glamorgan",
//            "GB.SSSL" => "South Lanarkshire",
//            "GB.ST" => "Tayside",
//            "GB.STA0" => "Angus",
//            "GB.STD0" > "Dundee City",
//            "GB.STP0" > "Perth and Kinross",
//            "GB.SW" > "Western Isles",
//            "GB.W" > "Wales",
//            "GB.WBL0" => "Blaenau Gwent",
//            "GB.WBR0" => "Bridgend",
//            "GB.WCA0" => "Carmarthenshire",
//            "GB.WCD0" => "Caerphilly",
//            "GB.WCE0" => "Ceredigion",
//            "GB.WCM0" => "Cardiff",
//            "GB.WCO0" => "Conwy",
//            "GB.WDE0" => "Denbighshire",
//            "GB.WFL0" => "Flintshire",
//            "GB.WGW0" => "Gwynedd",
//            "GB.WIS0" > "Isle of Anglesey",
//            "GB.WME0" => "Merthyr Tydfil",
//            "GB.WMO0" => "Monmouthshire",
//            "GB.WNP0" => "Neath Port Talbot",
//            "GB.WNW0" => "Newport",
//            "GB.WPE0" => "Pembrokeshire",
//            "GB.WPO0" => "Powys",
//            "GB.WRH0" => "Rhondda Cynon Taff",
//            "GB.WSW0" => "Swansea",
//            "GB.WTO0" => "Torfaen",
//            "GB" => "United Kingdom",
//            "GB.CI00" => "Channel Islands",
//            "GB.E" => "England",
//            "GB.EEE" => "East of England",
//            "GB.EEEA" => "Bedfordshire",
//            "GB.EEEC" => "Cambridgeshire",
//            "GB.EEEE" => "Essex",
//            "GB.EEEG" => "Hertfordshire",
//            "GB.EEEK" => "Norfolk",
//            "GB.EEEM" => "Suffolk",
//            "GB.EEM" => "East Midlands",
//            "GB.EEMA" => "Derbyshire",
//            "GB.EEME" => "Leicestershire",
//            "GB.EEMI" => "Lincolnshire",
//            "GB.EEMK" => "Northamptonshire",
//            "GB.EEMM" => "Nottinghamshire",
//            "GB.EEMO" => "Rutland",
//            "GB.EGL" => "Greater London",
//            "GB.ENE" => "North East England",
//            "GB.ENEA" => "County Durham",
//            "GB.ENEI" => "Northumberland",
//            "GB.ENEO" => "Tyne and Wear",
//            "GB.ENW" => "North West England",
//            "GB.ENWA" => "Cheshire",
//            "GB.ENWC" => "Cumbria",
//            "GB.ENWE" => "Greater Manchester",
//            "GB.ENWG" => "Lancashire",
//            "GB.ENWI" => "Merseyside",
//            "GB.ESE" => "South East England",
//            "GB.ESEA" => "Berkshire",
//            "GB.ESEC" => "East Sussex",
//            "GB.ESEE" => "Buckinghamshire",
//            "GB.ESEG" => "Hampshire",
//            "GB.ESEI" => "Isle of Wight",
//            "GB.ESEK" => "Kent",
//            "GB.ESEM" => "Oxfordshire",
//            "GB.ESEO" => "Surrey",
//            "GB.ESEQ" => "West Sussex",
//            "GB.ESW" => "South West England",
//            "GB.ESWA" => "Somerset",
//            "GB.ESWC" => "Dorset",
//            "GB.ESWE" => "Bristol",
//            "GB.ESWG" => "Cornwall",
//            "GB.ESWI" => "Devon",
//            "GB.ESWK" => "Gloucestershire",
//            "GB.ESWM" => "Wiltshire",
//            "GB.EWM" => "West Midlands",
//            "GB.EWMA" => "West Midlands",
//            "GB.EWMC" => "Herefordshire",
//            "GB.EWME" => "Shropshire",
//            "GB.EWMG" => "Staffordshire",
//            "GB.EWMK" => "Warwickshire",
//            "GB.EWMM" => "Worcestershire",
//            "GB.EYH" => "Yorkshire and the Humber",
//            "GB.EYHA" => "West Yorkshire",
//            "GB.EYHC" => "E Riding of Yorkshire",
//            "GB.EYHK" => "North Yorkshire",
//            "GB.EYHM" => "South Yorkshire",
//            "GB.IOM0" => "Isle of Man",
//            "GB.NI00" => "Northern Ireland",
//            "GB.NIA0" => "County Armagh",
//            "GB.NIC0" => "County Antrim",
//            "GB.NID0" => "County Down",
//            "GB.NIF0" => "County Fermanagh",
//            "GB.NIL0" => "County Londonderry",
//            "GB.NIT0" => "County Tyrone",
//            "GB.S" => "Scotland",
//            "GB.SB" => "Broders",
//            "GB.SBSB" => "Scottish Borders",
//            "GB.SBSI" => "Shetland Islands",
//            "GB.SC" => "Central",
//            "GB.SCCM" => "Clackmannanshire",
//            "GB.SCFK" => "Falkirk",
//            "GB.SCST" => "Stirling",
//            "GB.SD" => "Dumfries and Galloway",
//            "GB.SF" => "Fife",
//            "GB.SG" => "Grampian",
//            "GB.SGAC" => "Aberdeen City",
//            "GB.SGAS" => "Aberdeenshire",
//            "GB.SGMO" => "Moray",
//            "GB.SH" => "Highland",
//            "GB.SL" => "Lothian",
//            "GB.SLCE" => "City of Edinburgh",
//            "GB.SLEL" => "East Lothian",
//            "GB.SLML" => "Midlothian",
//            "GB.SLWL" => "West Lothian",
//            "GB.SO" => "Orkney Islands",
//            "GB.SS" => "Strathclyde",
//            "GB.SSAE" => "East Ayrshire",
//            "GB.SSAN" => "North Ayrshire",
//            "GB.SSAS" => "South Ayrshire",
//            "GB.SSDA" => "Argyll and Bute",
//            "GB.SSDE" => "East Dunbartonshire",
//            "GB.SSDW" => "West Dunbartonshire",
//            "GB.SSEE" => "East Renfrewshire",
//            "GB.SSGC" => "Glasgow City",
//            "GB.SSIN" => "Inverclyde",
//            "GB.SSNL" => "North Lanarkshire",
//            "GB.SSRE" => "Renfrewshire",
//        );
//        if( array_key_exists($key,$value ) ) {
//            return $value[$key];
//            }
//    }
    function country_name($key){
        $country_name=Country::where('id',$key)->value('country_title');
        return $country_name;
    }
}