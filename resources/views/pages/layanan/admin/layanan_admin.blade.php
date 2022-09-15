@extends('layouts.layout_admin')

@section('content')

<div class="container-fluid">

    <div class="row justify-content-between flex-row">

        <div class="col-5">
            <h4 class="fw-bolder mb-3">Layanan</h4>
        </div>

        <div class="col-2">
            <a href="{{route('layananAddAdmin')}}" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fa-solid fa-plus"></i>
                </span>
                <span class="text">Tambah</span>
            </a>
        </div>
    </div>
    
    <div class="container mt-3">
        <div class="row">
            @forelse ($datas as $dt) 
            <div class="col-6">
                <div class="card">
                    <img class="img-fluid" src="{{asset($dt->poster)}}" alt="">

                    <div class="card-body">
                        <div class="row clearfix">
                            <div class="position-absolute">

                                <div class="btn-group float-end" role="group" aria-label="Basic example">
                                    <a href="{{route('layananAddSubAdmin',$dt->id)}}" class="btn btn-success btn-sm text-white">
                                        <i class="fa-solid fa-plus"></i>
                                        <small>Tambah layanan</small>
                                        
                                    </a>
                                    <a href="{{route('layananEditAdmin',$dt->id)}}" class="btn btn-primary btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg>
                                    </a>
                                    {{-- <a href="{{route('layananDeleteAdmin',$dt->id)}}" class="btn btn-danger btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash2" viewBox="0 0 16 16">
                                            <path d="M14 3a.702.702 0 0 1-.037.225l-1.684 10.104A2 2 0 0 1 10.305 15H5.694a2 2 0 0 1-1.973-1.671L2.037 3.225A.703.703 0 0 1 2 3c0-1.105 2.686-2 6-2s6 .895 6 2zM3.215 4.207l1.493 8.957a1 1 0 0 0 .986.836h4.612a1 1 0 0 0 .986-.836l1.493-8.957C11.69 4.689 9.954 5 8 5c-1.954 0-3.69-.311-4.785-.793z"/>
                                          </svg>
                                    </a> --}}
                                    
                                </div>
                            </div>
                            <h4 class="fw-bolder">{{$dt->nama}}</h4>
                        </div>
                        
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table verticle-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($dt->programs as $program)
                                        
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$program->nama}}</td>
                                        <td>
                                            <a href="{{route('layananSubEditAdmin',$program->id)}}" class="btn btn-sm btn-primary">
                                                <i class="fa-solid fa-pencil"></i>
                                            </a>
                                            <a href="{{route('layananSubDeleteAdmin',$program->id)}}" class="btn btn-sm btn-danger mx-1">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>                                
                                    @empty
                                        
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            @empty
                <h4 class="text-center my-3">Tidak ada kelas</h4>
            @endforelse
        </div>

    </div>
</div>




@endsection