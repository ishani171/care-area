<?php

namespace App\Http\Controllers;

use App\Models\Appoinment;
use App\Models\Doctor;
use App\Models\Feedback;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashBoardController extends Controller
{
    public function index(Request $request){
        $appoinments = [];
        
        foreach(Appoinment::where('user_id',auth()->id())->get() as $appoinment){
            
            $appoinment["paid"] = Order::where('user_id',auth()->id())->where('appoinment_id',$appoinment->id)->exists();
            $appoinment["doctor"] = Doctor::find($appoinment->doctor_id);

            array_push($appoinments,$appoinment);
        
        }
        
        return view('dashboard',["appoinments" => $appoinments, "feedbacks" => Feedback::where('user_id', Auth::id())->get()]); 
    }
}
