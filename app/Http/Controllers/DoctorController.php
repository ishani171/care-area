<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\CreateDoctor;
use App\Models\Doctor;
use App\Models\Speciality;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public $doctor;

    public function __construct(){
        $this->doctor = new Doctor();
    }

	public function admin_doctors(){
		return view('carearea.admin.doctors.index',["doctors" => Doctor::all()]);
	}

    public function doctors($speciality_id = 1){
        return view('carearea.home.doctors',["doctors" => Doctor::where('speciality',$speciality_id)->get(), "speciality" => Speciality::find($speciality_id)->name]);
    }

	public function add_new_doctor_view(){
		return view('carearea.admin.doctors.new',["specialities" => Speciality::all()]);
	}

    public function search(Request $request){
        $result = $this->doctor->search($request->all()); 

        $speciality = null;

        if($request->speciality != ""){
            $speciality = Speciality::find($request->speciality)->name;
        }

        return view('carearea.doctors.search',["query" => $request->squery, "doctors" => $result, "speciality" => $speciality]);
    } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return redirect()->route('doctors.view',2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDoctor $request)
    {
        $data = $request->all();
        //var_dump(gmdate($data["time_from"]));die();

        $data["time_from"] = gmdate($data["time_from"]);
        $data["time_to"] = gmdate($data["time_to"]);

        $specname = Speciality::find($request->speciality);
        $data["speciality_name"] = $specname->name;
        Doctor::create($data);

		return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
