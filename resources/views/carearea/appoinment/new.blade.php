<<<<<<< HEAD
@extends('layouts.doctors')
=======
@extends('layouts.home')
>>>>>>> 1c7f7685547b1e8a4d5d7f571f71d2041e854b06

@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-8">
            <div class="p-3 bg-white  border rounded-2">
<<<<<<< HEAD
                <div>
                    <h4>Make Appoinment</h4>
                </div>
                <div class="mt-4 d-flex">
=======
                <div class="d-flex">
>>>>>>> 1c7f7685547b1e8a4d5d7f571f71d2041e854b06
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
<<<<<<< HEAD
                            <h6 class="text-lg mb-0 fs-4">Dr. {{ ucfirst($doctor->first_name) }} {{ ucfirst($doctor->last_name) }}</h6>
=======
                            <h4>Make Appoinment</h4>
                        </div>
                        <div class="mt-3">
                            <h5 class="text-lg mb-0 fw-bold">Dr. {{ ucfirst($doctor->first_name) }} {{ ucfirst($doctor->last_name) }}</h5>
>>>>>>> 1c7f7685547b1e8a4d5d7f571f71d2041e854b06
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
                            <form action="{{ route('appoinment.payment') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="hidden" value="{{ $doctor->id }}" name="doctor_id">
                                    <input type="date" class="form-control" name="date" onchange="checkAvailableTimes()">
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
<<<<<<< HEAD
=======
    <input type="hidden" value="{{ $doctor->available_days }}" id="available_days">
>>>>>>> 1c7f7685547b1e8a4d5d7f571f71d2041e854b06
</div>
    
@endsection

@section('styles')
<style>

</style>
<<<<<<< HEAD
=======
@endsection

@section('script')
<script>
    function error_msg(err){
        $("#error").empty()
        $("#error").text(err)
    }
    $("#appoinmentForm").submit(function(e){
        var available_days = JSON.parse($("#available_days").val())
        var selected = $("#date").val()
        var dayOfWeek = new Date(selected).toLocaleDateString('en-US', { weekday: 'long' });
        var err = $("#error")

        if(!available_days.includes(dayOfWeek.toLowerCase())){
            e.preventDefault();
            error_msg(`Not available on ${dayOfWeek}`)
        }else if(new Date(selected) < new Date()){
            e.preventDefault();

            error_msg('Selected day has passed')
        }
    })
</script>
>>>>>>> 1c7f7685547b1e8a4d5d7f571f71d2041e854b06
@endsection