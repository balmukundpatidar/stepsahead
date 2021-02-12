<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected $table = 'menu';
    public $timestamps = true;
    protected $fillable = array('parent_id', 'menu_name', 'page_id', 'menu_status','menu_position', 'page_url', 'collection_page');
    protected $visible = array('parent_id', 'menu_name', 'page_id', 'menu_status','menu_position', 'page_url', 'collection_page');

}
