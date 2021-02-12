<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    public $timestamps = true;
    protected $fillable = array('news_title', 'news_desc','slug','slug_number', 'news_image', 'news_status', 'news_position');
    protected $visible = array('news_title', 'news_desc','slug','slug_number', 'news_image', 'news_status', 'news_position');

}
