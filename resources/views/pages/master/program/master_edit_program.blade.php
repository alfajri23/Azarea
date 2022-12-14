@extends('layouts.layout_admin')
@section('content')


<div class="container">
    <div class="card">
        <div class="card-body">
            <h2 class="fw-bolder mb-3">Program perusahaan</h1>

            <form method="post" action="{{ route('masterStoreProgram')}}"  enctype="multipart/form-data">
                @csrf
                @include('components.error.error_message')
                <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" value="{{ $data == null ? '' :$data->id }}" name="id" class="form-control" hidden>
                <input type="text" value="{{ $data == null ? '' :$data->nama }}" name="nama" class="form-control" id="disabledTextInput">
                </div>

                @if($data->tipe != 'foto')
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <input type="text" value="{{ $data == null ? '' :$data->deskripsi }}" name="deskripsi" class="form-control">
                    </div>

                    <div class="mb-3">
                    <label class="form-label">Isi</label>
                    <div id="emailHelp" class="form-text text-danger">Kosongi jika tidak ada</div>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="isi">
                        {{$data == null ? '' :$data->isi}}
                    </textarea>
                    </div>
                @endif

                @if($data->tipe != 'text')
                    <div class="mb-3">
                        @if($data != null)
                        <img src="{{$data->foto != null ? asset($data->foto) : '' }}" class="img-thumbnail" alt="tidak ada foto">
                        @endif
                        <br>
                        <label for="exampleFormControlInput1">Foto</label><br>
                        <input type="file" name="foto" class="dropify form-control" id="exampleFormControlInput1" placeholder="">
                        <div id="emailHelp" class="form-text text-danger">File yang diterima : jpeg,png,jpg | Max : 1Mb | Rekomendasi rasio ukuran : 16:9</div>
                    </div>
                @endif

                <div>
                    <button type="submit" class="btn btn-success text-white">Simpan</button>
                    <a href="{{ url()->previous() }}" class="btn btn-light">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.0/tinymce.min.js"
integrity="sha512-XNYSOn0laKYg55QGFv1r3sIlQWCAyNKjCa+XXF5uliZH+8ohn327Ewr2bpEnssV9Zw3pB3pmVvPQNrnCTRZtCg=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">

    $(document).ready(function() {
		tinymce.init({
	            selector: "textarea",
	            branding: false,
	            width: "100%",
	            height: "300",
	            plugins: [
	                "advlist autolink lists charmap print preview anchor",
	                "searchreplace visualblocks code fullscreen",
	                "paste wordcount link","directionality","media"
	            ],
	            toolbar: "link | undo redo | bold italic | bullist numlist outdent indent | ltr rtl"
	    });
	});

</script>



@endsection