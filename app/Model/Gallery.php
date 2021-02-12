<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';
    public $timestamps = true;
    protected $fillable = array('id','gallery_image', 'gallery_heading', 'gallery_text', 'gallery_category');
    protected $visible = array('id','gallery_image', 'gallery_heading', 'gallery_text', 'gallery_category');

}
