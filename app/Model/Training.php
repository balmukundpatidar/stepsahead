<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $table = 'training';
    public $timestamps = true;
    protected $fillable = array('title', 'description', 'banner_image', 'section_1_img', 'section_1_heading','section_1_desc','section_2_img', 'section_2_heading','section_2_desc','section_3_img', 'section_3_heading','section_3_desc','seo_description','seo_keyword');
    protected $visible = array('title', 'description', 'banner_image', 'section_1_img', 'section_1_heading','section_1_desc','section_2_img', 'section_2_heading','section_2_desc','section_3_img', 'section_3_heading','section_3_desc','seo_description','seo_keyword');

}
