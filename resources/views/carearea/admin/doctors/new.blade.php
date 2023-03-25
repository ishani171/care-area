@extends('layouts.admin')

@section('content')
	<div class="border p-3">
		<h4>Add New Doctor</h4>
	</div>
	<div>
		<div class="p-3">
			<div class="p-3 shadow">
			<form method="POST" action="{{ route('doctor.store') }}" class="p-2">
				@csrf
				<!-- First Name -->
				<div class="mt-4">
					<x-input-label for="fname" :value="__('First Name')" />
					<x-text-input id="fname" class="block mt-1 w-full" type="text" name="first_name" :value="old('fname')" required autofocus />
					<x-input-error :messages="$errors->get('fname')" class="mt-2" />
				</div>

				 <!-- Last Name -->
				 <div class="mt-4">
					<x-input-label for="lname" :value="__('Last Name')" />
					<x-text-input id="lname" class="block mt-1 w-full" type="text" name="last_name" :value="old('lname')" required />
					<x-input-error :messages="$errors->get('lname')" class="mt-2" />
				</div>

				<!-- Email Address -->
				<div class="mt-4">
					<x-input-label for="email" :value="__('Email')" />
					<x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
					<x-input-error :messages="$errors->get('email')" class="mt-2" />
				</div>

				<!-- Telephone -->
				<div class="mt-4">
					<x-input-label for="telephone" :value="__('Telephone')" />
					<x-text-input id="telephone" class="block mt-1 w-full" type="number" name="telephone" :value="old('telephone')" required />
					<x-input-error :messages="$errors->get('telephone')" class="mt-2" />
				</div>

				<!-- Speciality -->
				<div class="mt-4">
					<x-input-label for="speciality" :value="__('Speciality')" />
					<select name="speciality" id="speciality" class="form-control">
						@foreach ($specialities as $sp)
							<option value="{{ $sp->id }}">{{ $sp->name }}</option>
						@endforeach
					</select>
					<x-input-error :messages="$errors->get('speciality')" class="mt-2" />
				</div>

				<!-- Docterate -->
				<div class="mt-4">
					<x-input-label for="docterate" :value="__('Docterate')" />
					<x-text-input id="docterate" class="block mt-1 w-full" type="text" name="docterate" :value="old('docterate')" required />
					<x-input-error :messages="$errors->get('docterate')" class="mt-2" />
				</div>

				<!-- Gender -->
				<div class="mt-4">
					<x-input-label for="gender" :value="__('Gender')" />
					<select name="gender" id="gender" class="form-control">
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select>
					<x-input-error :messages="$errors->get('gender')" class="mt-2" />
				</div>

				<div class="mt-4">
					<x-input-label for="doctor_charge" :value="__('Doctor Charge')" />
					<x-text-input id="doctor_charge" class="block mt-1 w-full" type="number" name="doctor_charge" :value="old('doctor_charge')" required />
					<x-input-error :messages="$errors->get('doctor_charge')" class="mt-2" />
				</div>

				<div class="mt-4">
					<x-input-label for="dates" :value="__('Available Days')" />
					<input type="hidden" id="days" name="available_days" value="[]">
					<div class="d-flex flex-wrap mt-3">
						<div class="me-5">
							<input class="available_day" type="checkbox" id="monday">
							<label for="monday">Monday</label>
						</div>
						<div class="me-5">
							<input class="available_day" type="checkbox" id="tuesday">
							<label for="monday">Tuesday</label>
						</div>
						<div class="me-5">
							<input class="available_day" type="checkbox" id="wednesday">
							<label for="monday">Wednesday</label>
						</div>
						<div class="me-5">
							<input class="available_day" type="checkbox" id="thursday">
							<label for="monday">Thursday</label>
						</div>
						<div class="me-5">
							<input class="available_day" type="checkbox" id="firday">
							<label for="monday">Friday</label>
						</div>
						<div class="me-5">
							<input class="available_day" type="checkbox" id="saturday">
							<label for="monday">Saturday</label>
						</div>
						<div class="me-5">
							<input class="available_day" type="checkbox" id="sunday">
							<label for="monday">Sunday</label>
						</div>
					</div>
				</div>

				<div class="mt-4 row">
					<x-input-label for="doctor_charge" :value="__('Available Time')" />
					<div class="mt-2 col-xl-4">
						<label for="from">From</label>
						<input type="time" class="form-control" name="time_from">
					</div>
					<div class="mt-2 col-xl-4">
						<label for="to">To</label>
						<input type="time" class="form-control" name="time_to">
					</div>
				</div>

				<!-- Password -->
				<div class="mt-4">
					<x-input-label for="password" :value="__('Password')" />

					<x-text-input id="password" class="block mt-1 w-full"
									type="password"
									name="password"
									required autocomplete="new-password" />

					<x-input-error :messages="$errors->get('password')" class="mt-2" />
				</div>

				<!-- Confirm Password -->
				<div class="mt-4">
					<x-input-label for="password_confirmation" :value="__('Confirm Password')" />

					<x-text-input id="password_confirmation" class="block mt-1 w-full"
									type="password"
									name="password_confirmation" required />

					<x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
				</div>

				<div class="flex items-center justify-end mt-4">
					<x-primary-button class="ml-4">
						{{ __('Submit') }}
					</x-primary-button>
				</div>
			</form>
			</div>
		</div>
	</div>
@endsection

@section('styles')
<style>
	h4,h3{
		font-size: 1.5rem;
	}
</style>
@endsection

@section('script')
<script>
	$(".available_day").change(function(){
		var all = JSON.parse($("#days").val())
		var this_day = $(this).attr("id")

		if(this.checked){
			all.push(this_day)	
		}else{
			all = all.filter(day=>day != this_day)
		}

		var new_all = JSON.stringify(all)
		$("#days").val(new_all)
	})
</script>
@endsection