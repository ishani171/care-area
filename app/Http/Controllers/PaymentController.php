<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function create(Request $request){
        
        return view('appoinment.payment', ["appoinment" => $request->all()]);

    }
}
