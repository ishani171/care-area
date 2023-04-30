@extends('layouts.admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="p-3">
					<h4>List Of Jobs</h4>
				</div>
			</div>
            <div class="col-12">
                @if (count($jobs) == 0)
                    No Jobs yet
                @endif
            </div>
			<div class="col-12">
				<div class="d-flex justify-end pt-2 pb-2">
					<a class="btn btn-primary" href="{{ route('jobs.create') }}">+ Add Job</a>
				</div>
			</div>
			@foreach ($jobs as $job)
			<div class="col-12">
				<div class="p-3 shadow-md rounded-md mb-2">
					<div>
						<h5 class="text-lg f-h">{{ ucfirst($job->title) }}</h5>
						<p class="f-p">{{ $job->description }}</p>
                        <p class="mt-3 f-p">Apply email - {{ $job->apply_email }}</p>
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