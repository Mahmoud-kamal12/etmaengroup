<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Question extends Authenticatable 
{

	protected $table = 'questions';
	public $timestamps = true;
	protected $fillable = array('title', 'is_activate', 'admin_id');

	public function scopeActive($query){
		return $query->where('is_activate', 1);
	}

	public function answers(){
		return $this->hasMany(Answer::class, 'question_id');
	}

}