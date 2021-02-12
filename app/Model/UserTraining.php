<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserTraining extends Model
{
    protected $table = 'user_training';
    public $timestamps = true;
    protected $fillable = array('user_id', 'tra_name', 'tra_taken');
}
