@extends('layouts.custom')

@section('content')
    <div class="flex justify-center">
        <div class="main mt-5 w-full sm:w-3/4">
            <div>
                <h3 class="text-[30px] mb-4">Recent Jobs</h3>
            </div>
            <div class="mt-3">
                @if (count($jobs) == 0)
                    <div>
                        <h5>No jobs yet</h5>
                    </div>
                @endif
            </div>
            <div class="mt-3">
                @foreach ($jobs as $job)
                    <div class="p-3 rounded-md shadow-md mb-4">
                        <h4 class="f-h text-xl">{{ ucfirst($job->title) }}</h4>
                        <p class="f-p mt-3">{{ ucfirst($job->description) }}</p>

                        <p class="mt-3">Send your CV to {{ $job->apply_email }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection