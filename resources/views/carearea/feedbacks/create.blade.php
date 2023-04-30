@extends('layouts.custom')

@section('content')
    <div class="main flex justify-center mt-5">
        <form action="{{ route('feedbacks.store') }}" method="POST" class="w-[460px] shadow-md p-4 rounded-md border-[1px] border-slate-100">
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
@endsection

@section('styles')
<style>
    .main{
        min-height: 30vh;
    }
</style>
@endsection