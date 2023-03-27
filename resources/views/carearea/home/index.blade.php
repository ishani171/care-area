@extends('layouts.home')

@section('content')

<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <div class="px-4 py-4 shadow rounded-2">
                <div>
                    <h4 class="f-h">Search For Doctors</h4>
                </div>
                <form action="{{ route('doctors.search') }}" method="POST" class="w-100 d-flex justify-content-center mt-3">
                    @csrf
                    <section class="w-100">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4">
                                <label for="speciality" class="f-p">Speciality</label>
                                <select name="speciality" id="speciality" class="form-control mt-2 f-p">
                                    <option value="" selected>Select Speciality</option>
                                    @foreach ($specialities as $sp)
                                        <option value="{{ $sp->id }}">{{ $sp->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <label for="name" class="f-p">Doctor name</label>
                                <input type="text" placeholder="Leave a blank if not sure!" name="squery" class="form-control mt-2 f-p">
                            </div>
                            <div class="col-xl-2 col-lg-2 d-flex align-items-end justify-contnet-center">
                                <button class="btn shadow-sm border btn-light" type="submit">Search</button>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <x-carearea.basic.title title="Popular Specialities" />
        </div>
        <div class="col-xl-3 col-lg-3 mt-4">
            <x-carearea.speciality name="Cardiology" id="2" description="sadas sadasdas asdasd sadsad asdas asdas asddsdas asdtest tes tes dsfldsan fdn dflj  kdasdnadn asndlkasdn" />
        </div>
        <div class="col-xl-3 col-lg-3 mt-4">
            <x-carearea.speciality name="Cardiology" id="2" description="sadas sadasdas asdasd sadsad asdas asdas asddsdas asdtest tes tes dsfldsan fdn dflj  kdasdnadn asndlkasdn" />
        </div>
        <div class="col-xl-3 col-lg-3 mt-4">
            <x-carearea.speciality name="Cardiology" id="2" description="sadas sadasdas asdasd sadsad asdas asdas asddsdas asdtest tes tes dsfldsan fdn dflj  kdasdnadn asndlkasdn" />
        </div>
        <div class="col-xl-3 col-lg-3 mt-4">
            <x-carearea.speciality name="Cardiology" id="2" description="sadas sadasdas asdasd sadsad asdas asdas asddsdas asdtest tes tes dsfldsan fdn dflj  kdasdnadn asndlkasdn" />
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
.title-bar{
    height: 28px;
    width: 4px;
    background: #222;
    border-radius: 999px;
}
.spec{
    border-top: 5px solid skyblue;
    height: 460px;
}
.spec-link{
    text-decoration: none;
}
.view-btn{
    background: rgb(129, 60, 255);
}
</style>
@endsection