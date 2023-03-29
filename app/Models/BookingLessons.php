<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class BookingLessons extends Authenticatable 
{

	protected $table = 'booking_lessons';
	public $timestamps = true;
	protected $fillable = array('booking_id', 'user_id', 'course_id', 'lesson_id', 'uuid_watched', 'watched_date');

	public function user(){
		return $this->belongsTo(User::class, 'user_id');
	}

	public function course(){
		return $this->belongsTo(Product::class, 'course_id');
	}

	public function booking(){
		return $this->belongsTo(Booking::class, 'booking_id');
	}

	public function lesson(){
		return $this->belongsTo(Lessons::class, 'lesson_id');
	}

}