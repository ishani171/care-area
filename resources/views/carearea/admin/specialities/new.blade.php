
@extends('layouts.admin')

@section('content')
	<div class="border p-3">
		<h4>Add New Speciality</h4>
	</div>
	<div>
		<div class="p-3">
			<div class="p-3 shadow">
			<form method="POST" action="{{ route('specialities.store') }}" class="p-2">
				@csrf
				<!-- Name -->
				<div class="mt-4">
					<x-input-label for="name" :value="__('Speciality')" />
					<x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
					<x-input-error :messages="$errors->get('name')" class="mt-2" />
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