@extends('layouts.layout_admin')

@section('content')

<div class="container-fluid">

    <div class="row">
        <h2 class="text-grey-700 fw-700 display1-size">Layanan</h2>
    </div>
    
    <div class="container mt-3">
        <div class="row">
            @forelse ($datas as $dt) 
            <div class="col-5">
                <a href="" class="card">
                    <img class="img-fluid" src="{{asset($dt->poster)}}" alt="">

                    <div class="card-body">
                        <h4 class="fw-bolder">{{$dt->nama}}</h4>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table verticle-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>542</td>
                                        <td>Jack Ronan</td>
                                    </tr>                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </a>
            </div>

            @empty
                <h4 class="text-center my-3">Tidak ada kelas</h4>
            @endforelse
        </div>

    </div>
</div>




@endsection