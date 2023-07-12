@extends('layouts.layout_admin')

@section('content')

<div class="container">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Tambah Layanan {{$data->nama}}</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{route('layananSubProgramStoreAdmin')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="d-none">
                    <div class="form-group" id="formDoc">
                        <label for="exampleFormControlInput1">Dokumentasi</label><br>
                        <input type="file" name="docs[]" class="dropify form-control" placeholder="">
                    </div>  
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama</label>
                        <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                        <input type="text" name="id_layanan" value="{{$id}}" class="form-control" hidden>
                    </div>
                </div>

                <div class="col-12 my-2">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Poster</label><br>
                                <input type="file" name="foto" class="dropify form-control">
                                <div id="emailHelp" class="form-text text-danger">Ukuran rasio rekomendasi poster 16:9</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Logo</label><br>
                                <input type="file" name="logo" class="dropify form-control">
                                <div id="emailHelp" class="form-text text-danger">Ukuran rasio rekomendasi logo 1:1, Maks : 500kb</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 my-4">
                    <div class="row">
                        <div class="col">
                            <label for="">Nama tombol</label>
                            <input type="text" name="nama_tombol" class="form-control" >
                            <div class="form-text text-primary">Nama tombol</div>
                        </div>
                        <div class="col">
                            <label for="">Link tombol</label>
                            <input type="text" name="link_tombol" class="form-control" >
                            <div class="form-text text-primary">Link tombol</div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="exampleInputnama1">Deskripsi</label>
                        <textarea name="desc" class="form-control" required>
                            
                        </textarea>
                    </div>
                </div>

                <div id="dokumentasi">

                </div>

                <div class="my-4">
                    <a onclick="addDoc()" class="btn btn-primary btn-sm">Tambah dokumentasi</a>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <button type="submit" class="btn btn-success text-white">Tambah</button>
                    <a href="{{ url()->previous() }}" class="btn btn-light">Batal</a>
                </div>
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

    function addDoc(){
        $( "#formDoc" ).clone().appendTo( "#dokumentasi" );
    }

</script>




@endsection