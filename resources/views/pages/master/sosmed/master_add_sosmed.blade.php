@extends('layouts.layout_admin')
@section('content')


<div class="container">
  <div class="card">
    <div class="card-body">
      <h1 class="fw-bolder mb-3">Sosmed perusahaan</h1>
      @include('components.error.error_message')

      <form method="post" action="{{ route('masterStoreSosmed')}}" enctype="multipart/form-data">
        @csrf
          @if($data != null)
            <img src="{{$data->foto != null ? asset($data->foto) : '' }}" id="output" class="img-thumbnail" alt="tidak ada foto">
          @endif

          <div class="mb-3">
            <label class="form-label">Logo sosmed</label>
            <input onchange="loadFile(event)" type="file" name="foto" class="dropify form-control" id="exampleFormControlInput1" placeholder="">
          </div>
          <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" value="{{ $data == null ? '' :$data->id }}" name="id" class="form-control" hidden>
            <input type="text" value="{{ $data == null ? '' :$data->nama }}" name="nama" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Link</label>
            <input type="text" value="{{ $data == null ? '' :$data->link }}" name="link" class="form-control">
          </div>

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
	            height: "1000",
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