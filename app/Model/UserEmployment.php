<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserEmployment extends Model
{
    protected $table = 'user_employment';
    public $timestamps = true;
    protected $fillable = array('user_id', 'emp_name', 'emp_position','emp_salary', 'emp_address',
        'emp_postcode','emp_date_from','emp_date_to','summaries','leaving_reason');
}
