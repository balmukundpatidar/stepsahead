<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserEducation extends Model
{
    protected $table = 'user_education';
    public $timestamps = true;
    protected $fillable = array('user_id', 'edu_qualification', 'edu_city','edu_institute', 'edu_date_from',
        'edu_date_to','edu_subject','grade');
}
