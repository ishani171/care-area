@extends('layouts.admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="p-3">
					<h4>List Of Receptions</h4>
				</div>
			</div>
			<div class="col-12">
				<div class="d-flex justify-end pt-2 pb-2">
					<a class="btn btn-primary" href="/admin/receptions/new">+ Add Reception</a>
				</div>
			</div>
			@foreach ($receptions as $reception)
			<div class="col-12">
				<div class="p-3 shadow-md rounded-md mb-2">
					<div>
						<h5 class="text-lg">{{ ucfirst($reception->first_name) }} {{ ucfirst($reception->last_name) }}</h5>
						<p>{{ $reception->email }}</p>
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