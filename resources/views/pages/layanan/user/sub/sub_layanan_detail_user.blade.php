@extends('layouts.layout_user')
@section('content')


<style>
    .header-transparent{
        background-color: #219EBC !important;
        /* background-color: #ffffff !important; */
        color: black !important;
        position: relative;
    }

    .desc>p{
      margin-bottom: 5px;
    }



</style>

<div class="page-content bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 mx-auto my-5">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      @forelse ($galeris as $galeri)
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$loop->iteration}}" aria-label="Slide {{$loop->iteration+1}}"></button>
                      @empty
                      @endforelse

                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img data-src="{{asset($data->foto)}}" class="d-block w-100 rounded-md lozad" alt="...">
                      </div>

                      @forelse ($galeris as $galeri)
                      <div class="carousel-item">
                        <img data-src="{{asset($galeri->foto)}}" class="d-block w-100 rounded-md lozad" alt="...">
                      </div>
                      @empty   
                      @endforelse
                      
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>

               
            </div>


            <div class="section-head text-black">
                
                <h3 class="title mb-3">{{$data->nama}}</h3>
                <div class="desc">{!!$data->desc!!}</div> 

                <a href="{{$data->link_tombol}}?text=Saya%20ingin%20menyetahui%20lebih%20lanjut%20layanan%20{{$data->nama}}" class="btn btn-success mt-4">{{$data->nama_tombol !== null ? $data->nama_tombol : 'Pesan sekarang'}}</a>
            </div>

            
        </div>
    </div>
</div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script>
    const observer = lozad(); // lazy loads elements with default selector as '.lozad'
    observer.observe();
</script>

@endsection