<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model 
{

    protected $table = 'users';
    public $timestamps = true;
    protected $fillable = array('user_name', 'email', 'user_type');
    protected $visible = array('user_name', 'email', 'user_type');

}