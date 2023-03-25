@extends('layouts.admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="p-3">
					<h4>List Of Specialities</h4>
				</div>
			</div>
			<div class="col-12">
				<div class="d-flex justify-end pt-2 pb-2">
					<a class="btn btn-primary" href="/admin/specialities/new">+ Add Speciality</a>
				</div>
			</div>
			@foreach ($specialities as $speciality)
			<div class="col-12">
				<div class="p-3 shadow-md rounded-md mb-2">
					<div>
						<h5 class="text-lg">{{ $speciality->name }}</h5>
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