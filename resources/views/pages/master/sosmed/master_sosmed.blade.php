@extends('layouts.layout_admin')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row justify-content-between flex-row">
                <div class="col-5">
                    <h2 class="fw-bolder mb-3">Sosmed</h2>
                </div>

                <div class="col-2">
                    <a href="{{route('masterAddSosmed')}}" class="btn btn-success btn-sm btn-icon-split">
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
                    <th scope="col">Logo</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Link</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>

                <tbody>
                    @forelse ($data as $dt)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>
                            <div style="width:70px">

                                <img src="{{asset($dt->foto)}}" class="img-responsive w-100" alt=""/>
                            </div>
                            
                        </td>
                        <td>{{$dt->nama}}</td>
                        <td>{{$dt->link}}</td>
                        <td>
                            <a type="button" href="{{route('masterAddSosmed',['id'=>$dt->id])}}" class="btn btn-success text-white btn-sm">Edit</a>
                            <a type="button" href="{{route('masterDeleteSosmed',$dt->id)}}" class="btn btn-danger btn-sm">Hapus</a>
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