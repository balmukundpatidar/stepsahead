<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Job extends Model 
{

    protected $table = 'job';
    public $timestamps = true;
    protected $fillable = array('job_title',
                                'job_description','job_location','slug', 'slug_number',
                                'job_zip_code','job_state','job_city','job_address',
                                'job_type','job_salary',
                                'job_status', 'job_valid_upto','job_category');
   // protected $visible = array('user_id','job_title', 'job_description', 'skills_requirement','job_status', 'job_valid_upto');

}