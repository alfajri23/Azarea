@extends('layouts.layout_admin')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-between flex-row mb-4">
        <div class="col-6">
            <h2 class="text-grey-700 fw-700 display1-size">Galeri</h2>
        </div>
        <div class="col-2">
            <a href="{{route('galeriAddAdmin')}}" class="btn btn-success text-white btn-sm">Tambah</a>
        </div>
    </div>
    

    <div class="row">
        @forelse ($datas as $data)
        <div class="col-3">
            <div class="widget-stat card">
                <div class="card-body clearfix">
                    <a href="{{route('galeriDeleteAdmin',$data->id)}}" class="position-absolute btn btn-sm btn-danger float-end">
                        <i class="fa-solid fa-trash"></i>
                    </a>
                    <img src="{{asset($data->foto)}}" class="img-fluid" alt="...">
                    <p class="my-1">{{$data->id_layanan != null ? $data->layanan->nama : ''}}</p>
                </div>
            </div>
        </div>
            
        @empty
            
        @endforelse
    </div>
    
</div>

@endsection