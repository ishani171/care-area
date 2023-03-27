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

	public function search($data){
		$query = $data["squery"];
		$speciality = $data["speciality"];

		if($speciality != '' && $query != ''){
			$payload = $this->where('speciality',$data['speciality']);

			$payload = $payload->where('first_name', 'like', '%' . $query . '%')
            ->orWhere('last_name', 'like', '%' . $query . '%');

			return $payload->get();

		}else if($speciality == '' && $query != ''){

			return $this->where('first_name', 'like', '%' . $query . '%')
            ->orWhere('last_name', 'like', '%' . $query . '%')->get();

		}else if($speciality != '' && $query == ''){
			return $this->where('speciality',$data['speciality'])->get();
		}

		
	}
}
