<?php

namespace App\Http\Controllers;

use App\Models\Appoinment;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaymentController extends Controller
{
    public $provider;

    public function __construct(){
       // $this->provider = new PayPalClient;
    }

    public function create(Request $request,$appoinment){
        $allow_payment = false;

        if(!Order::where('user_id',Auth::id())->where('appoinment_id',$appoinment)->exists()){
            $allow_payment = true;
        }

        return view('carearea.appoinment.payment', [
            "appoinment" => Appoinment::find($appoinment),
            "allow_payment" => $allow_payment
        ]);

    }

    public function orders(Request $request){
        dd($request->all());
    }

    public function payment_complete(Request $request){
        Appoinment::where('id',$request->appoinemt_id)->update(["status" => 1]);

        $data = $request->all();
        $data["user_id"] = Auth::id();
        
        Order::create($data);

        return redirect()->route('dashboard');
    }
}
