@extends('layouts.layout_admin')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row mb-5 justify-content-between flex-row">
                <div class="col-5">
                    <h2 class="fw-bolder mb-3">FAQ</h4>
                </div>

                <div class="col-2">
                    <a href="{{route('masterAddFAQ')}}" class="btn btn-success btn-sm btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fa-solid fa-plus"></i>
                        </span>
                        <span class="text text-white">Tambah</span>
                    </a>
                </div>

            </div>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Isi</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>

                <tbody>
                    @forelse ($data as $dt)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$dt->nama}}</td>
                        <td>{!! $dt->isi !!}</td>
                        <td>
                            <a type="button" href="{{route('masterAddFAQ',['id'=>$dt->id])}}" class="btn btn-success text-white btn-sm">Edit</a>
                            <a type="button" href="{{route('masterDeleteFAQ',$dt->id)}}" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                    @empty
                        
                    @endforelse
                
                
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection