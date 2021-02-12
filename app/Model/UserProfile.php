<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $table = 'user_profile';
    public $timestamps = true;
    protected $fillable = array('user_id', 'title', 'first_name','last_name', 'address',
                                'post_code','dob','national_insurance_no','mobile','telephone',
                                'work_permit','work_permit_valid','passport_no','passport_expire',
                                'dbs_no','dbs_issue','birth_country','nationality','nmc_pim',
                                'nmc_pim_expire','driver_license','driver_license_no','emg_name','emg_relation','emg_mail',
                                'emg_address','emg_postcode','emg_mobile','emg_telephone','user_image','biodata','hear_about');

}
