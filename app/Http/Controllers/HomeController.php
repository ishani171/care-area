<?php

namespace App\Http\Controllers;

use App\Models\Speciality;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        return view('carearea.home.index', ["specialities" => Speciality::all()]);
    }
}
