@extends('layouts.custom')

@section('content')
    <div class="flex justify-center">
        <div class="main mt-5 w-full sm:w-3/4">
            <div>
                <h3 class="text-[30px] mb-4">Feedbacks</h3>
            </div>
            <div class="mt-3">
                @if (count($feedbacks) == 0)
                    <div>
                        <h5>No feedbacks yet</h5>
                    </div>
                @endif
            </div>
            <div class="mt-3">
                @foreach ($feedbacks as $feedback)
                    <div class="p-3 rounded-md shadow-md mb-4">
                        <p class="f-p text-lg">"{{ $feedback->message }}"</p>
                        <h5 class="f-h mt-3">- {{ ucfirst($feedback->user->name) }}</h5>
                    </div>
                @endforeach
            </div>
            <form action="{{ route('feedbacks.store') }}" method="POST" class="shadow-md p-4 mt-4 rounded-md border-[1px] border-slate-100 w-full">
                @csrf
                <div>
                    <h5 class="text-2xl">Send Feedback</h5>
                </div>
                <div class="form-group mt-3">
                    <textarea name="message" cols="30" rows="10" class="w-100 f-p" placeholder="Message"></textarea>
                </div>
                <div class="mt-3">
                    <button type="submit" class="px-2 py-1 bg-blue-200 hover:bg-blue-300 rounded f-h">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection