<<<<<<< HEAD
@extends('layouts.doctors')
=======
@extends('layouts.home')
>>>>>>> 1c7f7685547b1e8a4d5d7f571f71d2041e854b06

@section('content')

<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <x-carearea.basic.title :title="'Doctors For '.$speciality.''" />
        </div>
    </div>
</div>
<div class="container mt-4">
    <div class="row">
        @if(count($doctors) == 0)
            <div class="col-12">
                <x-alert.danger msg="No doctors are found in this speciality!" />
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
.header-section{
    background: #1e88e5;
}
</style>
@endsection