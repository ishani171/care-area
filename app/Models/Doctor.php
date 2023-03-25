<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

	protected $fillable = [
		'first_name',
		'last_name',
		'email',
		'telephone',
		'speciality',
		'speciality_name',
		'docterate',
		'doctor_charge',
		'available_days',
		'time_from',
		'time_to',
		'password',
		'gender',
	];
}
