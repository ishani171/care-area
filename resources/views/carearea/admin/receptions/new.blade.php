
@extends('layouts.admin')

@section('content')
	<div class="border p-3">
		<h4>Add New Receptionist</h4>
	</div>
	<div>
		<div class="p-3">
			<div class="p-3 shadow">
			<form method="POST" action="{{ route('receptions.store') }}" class="p-2">
				@csrf
				<!-- First Name -->
				<div class="mt-4">
					<x-input-label for="fname" :value="__('First Name')" />
					<x-text-input id="fname" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus />
					<x-input-error :messages="$errors->get('first_name')" class="mt-2" />
				</div>

				 <!-- Last Name -->
				 <div class="mt-4">
					<x-input-label for="lname" :value="__('Last Name')" />
					<x-text-input id="lname" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required />
					<x-input-error :messages="$errors->get('last_name')" class="mt-2" />
				</div>

				<!-- Email Address -->
				<div class="mt-4">
					<x-input-label for="email" :value="__('Email')" />
					<x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
					<x-input-error :messages="$errors->get('email')" class="mt-2" />
				</div>

				<!-- Dob -->
				<div class="mt-4">
					<x-input-label for="dob" :value="__('Date of birth')" />
					<x-text-input id="dob" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" required />
					<x-input-error :messages="$errors->get('dob')" class="mt-2" />
				</div>
				<!-- Last Name -->
				<div class="mt-4">
					<x-input-label for="address" :value="__('Address')" />
					<x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
					<x-input-error :messages="$errors->get('address')" class="mt-2" />
				</div>

				<!-- Email Address -->
				<div class="mt-4">
					<x-input-label for="telephone" :value="__('Telephone')" />
					<x-text-input id="telephone" class="block mt-1 w-full" type="number" name="telephone" :value="old('telephone')" required />
					<x-input-error :messages="$errors->get('telephone')" class="mt-2" />
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