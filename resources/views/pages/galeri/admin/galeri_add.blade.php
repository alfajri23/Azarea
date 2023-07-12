@extends('layouts.layout_admin')

@section('content')

<div class="container">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Tambah Galeri</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            
        </div>
    </div>

    <div class="d-none">
        <div class="form-group" id="formDoc">
            <label for="exampleFormControlInput1">Galeri</label><br>
            <input type="file" name="docs[]" class="dropify form-control">
        </div>  
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{route('galeriStoreAdmin')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group" id="formDoc">
                <label for="exampleFormControlInput1">Galeri</label><br>
                <input type="file" name="docs[]" class="dropify form-control">
            </div>  

            <div id="galeri">

            </div>

            <div class="my-4">
                <a onclick="addDoc()" class="btn btn-primary btn-sm">Tambah galeri</a>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <button type="submit" class="btn btn-success text-white">Tambah</button>
                <a href="{{ url()->previous() }}" class="btn btn-light">Batal</a>
            </div>
        </form>
        </div>
    </div>
</div>

<script>
    function addDoc(){
        $( "#formDoc" ).clone().appendTo( "#galeri" );
    }
</script>

@endsection