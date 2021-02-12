<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    public $timestamps = true;
    protected $fillable = array('service_title', 'service_desc', 'service_image', 'service_status', 'service_position');

}
