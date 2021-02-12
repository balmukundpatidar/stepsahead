<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $table = 'category';
	public $timestamps = true;
	protected $fillable = array('id','cat_title','cat_status');
	protected $visible = array('id','cat_title','cat_status');





}