<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'country';
    public $timestamps = true;
    protected $fillable = array('id','country_title','country_status');
    protected $visible = array('id','country_title','country_status');



}
