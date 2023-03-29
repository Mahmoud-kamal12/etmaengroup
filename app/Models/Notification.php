<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Notification extends Authenticatable 
{

	protected $table = 'notifications';
	public $timestamps = true;
	protected $fillable = array('student_id', 'class_id', 'file_id', 'is_read');

	public function student_rela(){
		return $this->belongsTo(User::class, 'student_id');
	}

	public function class_rela(){
		return $this->belongsTo(Classes::class, 'class_id');
	}

	public function file_rela(){
		return $this->belongsTo(ClassesFiles::class, 'file_id');
	}
}