<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class JobEmployee extends Model 
{

    protected $table = 'job_employee';
    public $timestamps = true;

    protected $fillable = array('user_id','job_id','cover_letter');
    //protected $visible = array('user_id','skills_name');


}