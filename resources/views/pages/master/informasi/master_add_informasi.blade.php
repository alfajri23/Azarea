@extends('layouts.layout_admin')
@section('content')


<div class="container">
  <div class="card">
    <div class="card-body">
      <h1 class="fw-bolder mb-3">Informasi perusahaan</h1>

      <form method="post" action="{{ route('masterStoreInformasi')}}">
        @csrf
          <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" value="{{ $data == null ? '' :$data->id }}" name="id" class="form-control" hidden>
            <input type="text" value="{{ $data == null ? '' :$data->nama }}" name="nama" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Link</label>
            <input type="text" value="{{ $data == null ? '' :$data->link }}" name="link" class="form-control">
            <small class="text-primary">Link akan menjadi link website untuk halaman ini</small>
          </div>

          <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="isi">
              {{$data == null ? '' :$data->isi}}
            </textarea>
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
	            height: "400",
	            plugins: [
	                "advlist autolink lists charmap print preview anchor",
	                "searchreplace visualblocks code fullscreen",
	                "paste wordcount link","directionality",
                    "media image code"
	            ],
	            toolbar: "link | undo redo | bold italic | bullist numlist outdent indent | ltr rtl | media image",
                image_title: true,
                /* enable automatic uploads of images represented by blob or data URIs*/
                automatic_uploads: true,
                file_picker_callback: function (cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');

                /*
                Note: In modern browsers input[type="file"] is functional without
                even adding it to the DOM, but that might not be the case in some older
                or quirky browsers like IE, so you might want to add it to the DOM
                just in case, and visually hide it. And do not forget do remove it
                once you do not need it anymore.
                */

                input.onchange = function () {
                var file = this.files[0];

                var reader = new FileReader();
                reader.onload = function () {
                    /*
                    Note: Now we need to register the blob in TinyMCEs image blob
                    registry. In the next release this part hopefully won't be
                    necessary, as we are looking to handle it internally.
                    */
                    var id = 'blobid' + (new Date()).getTime();
                    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);

                    /* call the callback and populate the Title field with the file name */
                    cb(blobInfo.blobUri(), { title: file.name });
                };
                reader.readAsDataURL(file);
                };

                input.click();
            },
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
	      
	    });
	});

</script>



@endsection