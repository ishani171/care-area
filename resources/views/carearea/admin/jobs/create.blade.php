
@extends('layouts.admin')

@section('content')
	<div class="border p-3">
		<h4>Add New Job</h4>
	</div>
	<div>
		<div class="p-3">
			<div class="p-3 shadow">
			<form method="POST" action="{{ route('jobs.store') }}" class="p-2">
				@csrf
				<!-- Name -->
				<div class="mt-4">
					<x-input-label for="name" :value="__('Title')" />
					<x-text-input id="name" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
					<x-input-error :messages="$errors->get('title')" class="mt-2" />
				</div>
                <div class="mt-4">
					<x-input-label for="description" :value="__('Description')" />
                    <textarea name="description" id="description" cols="30" rows="10" class="w-full"></textarea>
					<x-input-error :messages="$errors->get('description')" class="mt-2" />
				</div>
                <div class="mt-4">
					<x-input-label for="apply_email" :value="__('Apply Email')" />
					<x-text-input id="apply_email" class="block mt-1 w-full" type="text" name="apply_email" :value="old('apply_email')" required autofocus />
					<x-input-error :messages="$errors->get('apply_email')" class="mt-2" />
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