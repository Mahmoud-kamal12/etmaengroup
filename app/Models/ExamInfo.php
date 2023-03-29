<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ExamInfo extends Authenticatable 
{

	protected $table = 'exam_info';
	public $timestamps = true;
	protected $fillable = array('name', 'email', 'degree');

}