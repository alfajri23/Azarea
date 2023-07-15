@extends('layouts.layout_user')
@section('content')

<style>
    strong {
    font-weight: 600;
    color: black;
}
</style>

<div class="page-content bg-gray">
    
    <div class="dlab-bnr-inr overlay-black-middle bg-info">
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
                    {{-- <h2 class="title text-center">Amanah Mandiri Finance</h2> --}}
                    <div>
                        {!! $data->isi !!}
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

@endsection