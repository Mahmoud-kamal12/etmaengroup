<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'is_activate',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
	public function scopeActive($query){
		return $query->where('is_activate', 1);
	}

	public function accounts(){
		return $this->hasMany(Account::class, 'user_id');
	}

    public function bookings_courses(){
        return $this->hasMany(Booking::class, 'user_id');
    }

    public function bookings(){
        return $this->hasMany(BookingInfo::class, 'user_id');
    }

    public function notifications(){
        return $this->hasMany(Notification::class, 'student_id');
    }

}
