<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ClassesFiles extends Authenticatable 
{

	protected $table = 'classes_files';
	public $timestamps = true;
	protected $fillable = array('class_id', 'file', 'file_name', 'is_activate', 'admin_id');

	public function scopeActive($query){
		return $query->where('is_activate', 1);
	}

}