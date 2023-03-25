<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateDoctor extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => 'required',
			'last_name' => 'required',
			'email' => 'required',
			'telephone' => 'required|min:10',
			'speciality' => 'required',
			'docterate' => 'required',
			'doctor_charge' => 'required',
			'password' => 'required',
        ];
    }
}
