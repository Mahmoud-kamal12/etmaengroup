<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class DataClasses extends Authenticatable 
{

	protected $table = 'data_classes';
	public $timestamps = true;
	protected $fillable = array('class_id', 'student_id', 'is_activate', 'admin_id');

	public function scopeActive($query){
		return $query->where('is_activate', 1);
	}

}