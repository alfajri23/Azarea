@extends('layouts.layout_admin')
@section('content')


<div class="container-fluid">

    <div class="row page-titles mx-0">
        <h2 class="fw-bolder">Team</h1>
        <h5>Gambar-gambar pada Team akan ditampilkan dihalaman utama menjadi slide gambar</h5>
    </div>

    <div class="card">
        <div class="card-body">
            
                <div class="row">
                    @forelse ($datas as $data)
                    <div class="media mb-3 align-items-center border-bottom pb-3">
                        <img class="me-3 " alt="image" width="100" src="{{asset($data->foto)}}">
                        <div class="media-body">
                            <h5 class="mb-0 text-pale-sky">{{$data->nama}}
                            </h5>
                            <p class="text-dark mb-0">{{$data->isi}}</p>
                            <small class="text-muted mb-0">{{$data->role}}</small>
                        </div>
                        <div>
                            <a href={{route('masterTeamDelete',$data->id)}} class="btn btn-danger btn-sm">Hapus</a>
                        </div>
                    </div>
                    @empty
                        
                    @endforelse
                    
                </div>

                <div>
                    <div class="mb-3">
                        @include('components.error.error_message')
                        <form method="post" action="{{ route('masterTeamStore')}}" enctype="multipart/form-data">
                        @csrf
                        <label for="exampleFormControlInput1">Tambah Team</label><br>
                        <div class="container">

                            <img class="img-thumbnail" id="output" src="https://via.placeholder.com/220x220.png?text=Team"/>
                        </div>
                        <br>
                        <input onchange="loadFile(event)" type="file" name="foto" class="dropify form-control" id="exampleFormControlInput1" placeholder="">
                        <div id="emailHelp" class="form-text text-danger">File yang diterima : jpeg,png,jpg | Max : 1Mb | Rekomendasi rasio ukuran : 1:1</div>
                    
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" value="" name="nama" class="form-control" required >
                        </div>

                        <div class="mb-3">
                            <label class="form-label">role</label>
                            <input type="text" value="" name="role" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Isi</label>
                            <input type="text" value="" name="isi" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="form-label">Urutan</label>
                            @php
                                $iteration = 0;
                            @endphp
                            <select class="form-select" name="urutan" aria-label="Default select example" required>
                                @forelse ($datas as $data)
                                <option value="{{$loop->iteration}}">{{$loop->iteration}}</option>
                                    @php
                                        $iteration = $loop->iteration;
                                    @endphp
                                @empty
                                <option value="1">1</option>
                                @endforelse

                                @if($iteration != 0)
                                    <option value="{{$iteration+1}}">{{$iteration+1}}</option>
                                @endif

                            </select>
                        </div>

                        

                        <div>
                            <button type="submit" class="btn btn-success text-white">Simpan</button>
                            <a href="{{ url()->previous() }}" class="btn btn-light">Batal</a>
                        </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</div>


<script>
    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
        var output = document.getElementById('output');
        output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
</script>

@endsection