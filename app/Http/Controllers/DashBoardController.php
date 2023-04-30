<?php

namespace App\Http\Controllers;

use App\Models\Appoinment;
use App\Models\Doctor;
use App\Models\Feedback;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashBoardController extends Controller
{
    public function index(Request $request){

        if(auth()->user()->doctor){
            $appoinments = [];
        
            foreach(Appoinment::where('doctor_id', Doctor::where('user_id',Auth::id())->first()->id)->get() as $appoinment){
                
                $appoinment["paid"] = Order::where('user_id',auth()->id())->where('appoinment_id',$appoinment->id)->exists();
                $appoinment["patient"] = User::find($appoinment->user_id);
                
                array_push($appoinments,$appoinment);
            
            }
            
            return view('dashboard',[
                "appoinments" => $appoinments, 
            ]);
        
        }else{
            $appoinments = [];
        
            foreach(Appoinment::where('user_id',auth()->id())->get() as $appoinment){
                
                $appoinment["paid"] = Order::where('user_id',auth()->id())->where('appoinment_id',$appoinment->id)->exists();
                $appoinment["doctor"] = Doctor::find($appoinment->doctor_id);
    
                array_push($appoinments,$appoinment);
            
            }
            
            return view('dashboard',[
                "appoinments" => $appoinments, 
                "feedbacks" => Feedback::where('user_id', Auth::id())->get(),
    
            ]);
        }
        
         
    }
}
