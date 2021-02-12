<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'aboutus';
    public $timestamps = true;
    protected $fillable = array('title', 'description', 'banner_image', 'text_1', 'image_1','text_2', 'image_2','seo_keyword','pdf_1_title','pdf_2_title','pdf_3_title','pdf_4_title','pdf_5_title','pdf_6_title','pdf_1_url','pdf_2_url','pdf_3_url','pdf_4_url','pdf_5_url','pdf_6_url','seo_description');
    protected $visible = array('title', 'description', 'banner_image', 'text_1', 'image_1','text_2', 'image_2','seo_keyword','pdf_1_title','pdf_2_title','pdf_3_title','pdf_4_title','pdf_5_title','pdf_6_title','pdf_1_url','pdf_2_url','pdf_3_url','pdf_4_url','pdf_5_url','pdf_6_url','seo_description');

}
