<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Answer extends Authenticatable 
{

	protected $table = 'answers';
	public $timestamps = true;
	protected $fillable = array('answer', 'question_id', 'is_activate', 'admin_id', 'is_correct');

	public function scopeActive($query){
		return $query->where('is_activate', 1);
	}

	public function question(){
		return $this->belongsTo(Question::class, 'question_id');
	}

}