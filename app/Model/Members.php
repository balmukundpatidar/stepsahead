<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $table = 'members';
    public $timestamps = true;
    protected $fillable = array('member_name','member_desc','slug','slug_number', 'member_image', 'member_status', 'member_position','member_positions','facebook_url','twitter_url','linkedin_url');

}
