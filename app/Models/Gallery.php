<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{

	protected $table = 'galleries';
	public $timestamps = true;
	protected $fillable = array('title', 'file', 'section', 'is_activate');

	public function scopeActive($query){
		return $query->where('is_activate', 1);
	}

}