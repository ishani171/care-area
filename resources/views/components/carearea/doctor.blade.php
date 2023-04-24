<div class="p-3 shadow-sm border mb-2">
    <div>
        <div>
            @if($doctor->image != null)
                <img class="w-100" src="{{ asset('doctors/'.$doctor->image.'') }}" alt="Doctor">
            @else
                @if($doctor->gender == "male")
                    <img class="w-100" src="{{ asset('assets/images/doctor-male.png') }}" alt="Doctor male">
                @else
                    <img class="w-100" src="{{ asset('assets/images/doctor-female.png') }}" alt="Doctor female">
                @endif
            @endif
        </div>
        <div>
            <h5 class="text-lg">{{ ucfirst($doctor->first_name) }} {{ ucfirst($doctor->last_name) }}</h5>
            <p>{{ $doctor->speciality_name }}</p>
        </div>
        <a href="{{ route('appoinments.new',$doctor->id) }}" class="btn appo-btn shadow-sm">Appoinment</a>
    </div>
</div>
