<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Exam extends Authenticatable 
{

	protected $table = 'exams';
	public $timestamps = true;
	protected $fillable = array('question_id', 'answer_id', 'is_correct', 'exam_info_id');

	public function scopeActive($query){
		return $query->where('is_activate', 1);
	}

}