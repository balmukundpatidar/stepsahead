<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    public $timestamps = true;
    protected $fillable = array('first_name','email', 'mobile','enquiry', 'message');
    protected $visible = array('first_name','email', 'mobile','enquiry', 'message');

}
