@extends('layouts.home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h4>Doctors</h4>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        @foreach ($doctors as $doctor)
    <div class="col-xl-3 col-lg-3">
        <div class="p-3 shadow-sm border mb-2">
            <div>
                <h5 class="text-lg">{{ ucfirst($doctor->first_name) }} {{ ucfirst($doctor->last_name) }}</h5>
                <p>{{ $doctor->speciality_name }}</p>
                <p>{{ $doctor->email }}</p>
                <a href="{{ route('appoinments.new') }}" class="btn btn-sm- btn-info">Appoinment</a>
            </div>
        </div>
    </div>
    @endforeach
    </div>
</div>
    
@endsection