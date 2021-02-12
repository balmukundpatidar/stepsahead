<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $table = 'pages';
    public $timestamps = true;
    protected $fillable = array('page_title', 'page_desc', 'page_img', 'page_url', 'author','seo_keyword','seo_description');
    protected $visible = array('page_title', 'page_desc', 'page_img', 'page_url', 'author','seo_keyword','seo_description');

}
