@extends('layouts.doctors')

@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-8">
            <div class="p-3 bg-white  border rounded-2">
                <div>
                    <h4>Make Appoinment</h4>
                </div>
                <div class="mt-4 d-flex">
                    <div class="col-xl-4 col-lg-4">
                        @if($doctor->image != null)
                            <img class="w-100 shadow-sm" src="{{ asset('doctors/'.$doctor->image.'') }}" alt="Doctor">
                        @else
                            @if($doctor->gender == "male")
                                <img class="w-100 shadow-sm" src="{{ asset('assets/images/doctor-male.png') }}" alt="Doctor male">
                            @else
                                <img class="w-100 shadow-sm" src="{{ asset('assets/images/doctor-female.png') }}" alt="Doctor female">
                            @endif
                        @endif
                    </div>
                    <div class="px-4 d-flex flex-column align-items-space-between h-100">
                        <div>
                            <h6 class="text-lg mb-0 fs-4">Dr. {{ ucfirst($doctor->first_name) }} {{ ucfirst($doctor->last_name) }}</h6>
                            <p>{{ $doctor->speciality_name }}</p>
                        </div>
                        <div>
                            <p><i class="fa-solid fa-envelope"></i> {{ $doctor->email }}</p>
                            <p><i class="fa-solid fa-phone"></i> {{ $doctor->telephone }}</p>
                        </div>
                        <div class="mb-3 mt-3">
                            <h6>Available Days</h6>
                            <div class="d-flex">
                               @foreach(json_decode($doctor->available_days) as $day)
                                    <p class="me-3"><i class="fa-solid fa-circle-check"></i> {{ ucfirst($day) }}</p>
                                @endforeach 
                            </div>
                        </div>
                        <div>
                            <h6 class="font-bold"><i class="fa-regular fa-clock"></i> Available Time</h6>
                            <div class="d-flex">
                               <div>
                                    <p class="mb-0">From</p>
                                    <p>{{ $doctor->time_from }}</p>
                               </div>
                               <div class="ms-5">
                                    <p class="mb-0">To</p>
                                    <p>{{ $doctor->time_to }}</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>Doctor Charge <span class="fs-5 text-danger">Rs.{{ $doctor->doctor_charge }}.00</span></p>    
                        </div>
                        <div>
                            <form action="{{ route('appoinments.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="hidden" value="{{ $doctor->id }}" name="doctor_id">
                                    <input type="hidden" value="{{ $doctor->doctor_charge }}" name="price">
                                    <input type="date" class="form-control" name="date" onchange="checkAvailableTimes()" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-sm btn-info mt-3">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('styles')
<style>

</style>
@endsection