<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    protected $table = 'contactinfo';
    public $timestamps = true;
    protected $fillable = array('description');
    protected $visible = array('description');

}
