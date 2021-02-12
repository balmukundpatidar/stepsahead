<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class GallaryCategory extends Model {

	protected $table = 'gallary_category';
	public $timestamps = true;
	protected $fillable = array('id','title','slug');
	protected $visible = array('id','title','slug');

}