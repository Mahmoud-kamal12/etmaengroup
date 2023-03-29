<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Booking extends Authenticatable
{

	protected $table = 'bookings';
	public $timestamps = true;
	protected $fillable = array('quiz','user_id', 'course_id', 'uuid_register', 'confirm_date', 'uuid_started', 'started_date', 'uuid_completed', 'completed_date', 'status' , 'max' , 'raw' , 'success_status' );

    protected $casts = [
        "quiz" => "array",
        "success_status" => "boolean"
    ];
	public function user(){
		return $this->belongsTo(User::class, 'user_id');
	}

	public function course(){
		return $this->belongsTo(Product::class, 'course_id');
	}

	public function lessons_watched(){
		return $this->hasMany(BookingLessons::class, 'booking_id');
	}
}
