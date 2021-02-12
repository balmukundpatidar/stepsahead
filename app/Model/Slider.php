<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model 
{

    protected $table = 'slider';
    public $timestamps = true;
    protected $fillable = array('slider_title', 'slider_desc', 'slider_image', 'slider_status', 'slider_position');
    protected $visible = array('slider_title', 'slider_desc', 'slider_image', 'slider_status', 'slider_position');

}