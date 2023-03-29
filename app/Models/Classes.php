<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Classes extends Authenticatable 
{

	protected $table = 'classes';
	public $timestamps = true;
	protected $fillable = array('title', 'is_activate', 'admin_id');

	public function scopeActive($query){
		return $query->where('is_activate', 1);
	}

	public function students(){
		return $this->hasMany(DataClasses::class, 'class_id');
	}

}