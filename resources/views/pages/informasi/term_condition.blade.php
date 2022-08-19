@extends('layouts.layout_user')
@section('content')

<style>
    strong {
    font-weight: 600;
    color: black;
}
</style>

<div class="page-content bg-gray">
    
    <div class="dlab-bnr-inr overlay-black-middle bg-primary" style="background-image:url(images/banner/bnr4.jpg);">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">Tentang Kami</h1>
            </div>
        </div>
    </div>

    <div class="container p-3">
        <div class="row">
            <div class="col-12 my-5">
                <div class="text-black">
                    <h2 class="title text-center">Amanah Mandiri Finance</h2>
                    <div>
                        {!! $data->isi !!}
                    </div>
                </div>
            </div>

            <div class="row my-4">
                <div class="col-6">
                    <div class="pe-5">
                        {!! $visi->isi !!}
                    </div>
                </div>
                <div class="col-6">
                    <img class="rounded" src="https://img.freepik.com/free-psd/instagram-white-mobile-phone-mockup-with-3d-icons_106244-1723.jpg?w=996&t=st=1660100484~exp=1660101084~hmac=0aae28a744157ed3cdeef91d8608b13fec61cf021fe35bc02ee9d29d91411f4f" alt="">
                </div>
            </div>

            <div class="row my-4">
                <div class="col-6">
                    
                    <img class="rounded" src="https://img.freepik.com/free-photo/court-hammer-books-judgment-law-concept_144627-30452.jpg?w=996&t=st=1660100607~exp=1660101207~hmac=4036d34fc274cda63fd5a33c94176bf6df8f6fb0f75bb580f2a8c35ccfe82934" alt="">
                    
                </div>
                <div class="col-6 ps-5">
                    <h3>Legalitas</h4>
                    <div class="">
                        {!! $legalitas->isi !!}
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

@endsection