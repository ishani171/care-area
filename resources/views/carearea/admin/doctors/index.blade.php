@extends('layouts.admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="p-3">
					<h4>List Of Doctors</h4>
				</div>
			</div>
			<div class="col-12">
				<div class="d-flex justify-end pt-2 pb-2">
					<a class="btn btn-primary" href="/admin/doctors/new">+ Add Doctor</a>
				</div>
				<div>
					@if (count($doctors) == 0)
						<h5>No doctors yet</h5>
					@endif
				</div>
			</div>
			@foreach ($doctors as $doctor)
			<div class="col-12">
				<div class="p-3 shadow-md rounded-md mb-2 d-flex">
					<div>
						<h5 class="text-lg">{{ ucfirst($doctor->first_name) }} {{ ucfirst($doctor->last_name) }}</h5>
						<p>{{ $doctor->speciality_name }}</p>
						<p class="mt-2">{{ $doctor->email }}</p>
						<div class="mt-3">
							<form action="{{ route('doctor.destroy',$doctor->id) }}" method="post">
								@csrf
								@method('DELETE')
								<button class="bg-red-500 px-2 rounded text-white" type="submit">Delete</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
@endsection

@section('styles')
<style>
	h4,h3{
		font-size: 1.5rem;
	}
	h5{
		font-family: Nunito;
	}
</style>
@endsection