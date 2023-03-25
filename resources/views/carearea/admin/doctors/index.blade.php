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
			</div>
			@foreach ($doctors as $doctor)
			<div class="col-12">
				<div class="p-3 shadow-md rounded-md mb-2">
					<div>
						<h5 class="text-lg">{{ ucfirst($doctor->first_name) }} {{ ucfirst($doctor->last_name) }}</h5>
						<p>{{ $doctor->email }}</p>
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