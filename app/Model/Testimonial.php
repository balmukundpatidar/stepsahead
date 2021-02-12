<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = 'testimonial';
    public $timestamps = true;
    protected $fillable = array('testi_title', 'testi_desc', 'testi_image','testi_status', 'testi_position');
    protected $visible = array('testi_title', 'testi_desc', 'testi_image','testi_status', 'testi_position');

}
