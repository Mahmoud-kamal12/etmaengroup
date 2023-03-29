<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;
    protected $table = 'settings';
    public $timestamps = true;
    protected $fillable = array('academic_laws_title', 'academic_laws_sub', 'attendance_policy_title', 'attendance_policy_sub', 'integrity_laws_title', 'integrity_laws_sub', 'intellectual_property_rights_title',
        'intellectual_property_rights_sub', 'privacy_policy_title','privacy_policy_sub', 'created_at','updated_at');
}
