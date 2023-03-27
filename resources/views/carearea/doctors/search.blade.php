@extends('layouts.doctors')

@section('content')
@php 
///var_dump($query);die();
@endphp
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            @if($query != null)
                <x-carearea.basic.title :title="'Search Results For: '.$query.''" />
            @endif
            @if($speciality != null)
                <x-carearea.basic.title :title="'Search Results For Speciality: '.$speciality.''" />
            @endif
        </div>
    </div>
</div>
<div class="container mt-4">
    <div class="row">
        @if(count($doctors) == 0)
            <div class="col-12">
                <x-alert.danger msg="No doctors are found!" />
            </div>
        @endif
        
        <div class="col-xl-4 col-lg-4">
            @foreach ($doctors as $doctor)
                <x-carearea.doctor :doctor="$doctor" />
            @endforeach
        </div>
    </div>
</div>
    
@endsection

@section('styles')
<style>
.appo-btn{
    background: #e7f4ff;
}
.appo-btn:hover{
    background: #c8e6ff
}
.title-bar{
    height: 28px;
    width: 4px;
    background: #222;
    border-radius: 999px;
}
</style>
@endsection