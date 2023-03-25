<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;

class AdminController extends Controller
{
    public function index(Request $request){

		if(Auth::user()->admin){
			return view('carearea.admin.doctors.index',["doctors" => Doctor::all()]);
		}else{
			return redirect()->back();
		}
	}
	public function doctors(){
		return view('carearea.admin.doctors.index');
	}
	public function receptions(){
		return view('carearea.admin.receptions.index');
	}

	public function new_doc(){
		return view('carearea.admin.doctors.new');
	}
}
