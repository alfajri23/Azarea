@extends('layouts.layout_user')
@section('content')

<style>
    .header-transparent{
        background-color: #219EBC !important;
        /* background-color: #ffffff !important; */
        color: black !important;
        position: relative;
    }
</style>

<div class="post-title page-nav pt-lg--7 pt-lg--7 pt-5 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h6 class="text-uppercase fw-600 ls-3 text-primary font-xsss">{{$blog->kategori}}</h6>
                <h2 class="mt-3 mb-2">
                    <a href="#" class="lh-2 display2-size display2-md-size mont-font text-grey-900 fw-700">{{$blog->judul}}</a>
                </h2>                                
                <h6 class="fw-normal mt-3 d-inline-block"><i class="ti-time mr-2"></i> {{date_format(date_create($blog->updated_at),"d M Y")}}</h6> 
                <h6 class="fw-normal mx-3 mt-3 d-inline-block"><i class="ti-user mr-2"></i> {{$blog->penulis}}</h6>
                <h6 class="fw-normal mt-3 d-inline-block"><i class="ti-comments mr-2"></i> {{$blog->komentar}} Comments</h6>
            </div>
        </div>
    </div>
</div>

<div class="post-image">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 text-center mx-auto">
                <img data-src="{{ $blog->gambar != null ? asset($blog->gambar) : 'https://images.unsplash.com/photo-1500989145603-8e7ef71d639e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=876&q=80'}}" alt="blog-image" class="img-fluid rounded-lg lozad">
            </div>
        </div>
    </div>
</div>

<div class="post-content pt-lg--7 pt-lg--7 pt-5 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-left">
                <div class="card shadow-none w-100 border-0 mb-5">
                    <ul class="list-inline m-b0">
                        <li>
                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url()->full()}}" class="site-button sharp radius-xl facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://twitter.com/intent/tweet?text={{url()->full()}}" class="site-button sharp radius-xl twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://wa.me/?text={{url()->full()}}" class="site-button sharp radius-xl whatsapp">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                
                <div class="isi text-dark">
                    {!! $blog->isi !!}
                </div>
                
            </div>

            <div class="col-lg-10">
                <div class="bg-transparent side-wrap rounded-lg mb-4">
                    <div class="form-group mb-3">
                        <label class="fw-700 text-grey-900">Related Blog</label>
                    </div>

                    <div class="d-flex flex-wrap gap-10">
                        @forelse ($populars as $popular)
                        <div class="card shadow bg-light border-0 mb-3 basis-50 p-3 rounded-lg">
                            <div class="row">
                                <div class="col-4">
                                    <img data-src="{{ $popular->gambar != null ? asset($popular->gambar) : 'https://images.unsplash.com/photo-1500989145603-8e7ef71d639e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=876&q=80'}}" alt="blog-image" class="img-fluid rounded-lg lozad">
                                </div>
                                <div class="col-8 pl-1">
                                    <h6 class="text-primary my-0 fs-6 fw-normal">{{$popular->kategori}}</h6>
                                    <a href="{{route('blogDetailUser',['id'=>$popular->id, 'link'=>$popular->link])}}" class="text-gray fw-bolder">{{$popular->judul}}</a>
                                </div>
                            </div>
                        </div>
                        @empty
                        @endforelse
        
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script>
    const observer = lozad();
    observer.observe();

    function copyText() {
        navigator.clipboard.writeText
            ("{{url()->full()}}");
        let copy = document.getElementById("copy");
        copy.innerHTML = "Copied";
    }
</script>


@endsection