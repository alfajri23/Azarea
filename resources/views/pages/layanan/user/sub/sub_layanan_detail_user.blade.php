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

<div class="page-content bg-gray">
    <div class="container p-3">
        <div class="row">
            <div class="my-5">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
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

            @if ($data->id_layanan != 1)
            <div class="row features-area-one">
                <div class="col-6 col-sm-3 mx-auto">
                    <div class="features-box style1 m-b30 wow bounceInUp border mx-auto text-dark p-3 pb-5" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="dlab-info text-center">
                            <i class="text-primary ti-car"></i><br>
                            <span class="fw-bolder">Good Transport</span>
                        </div>
                      </div>
                </div>
    
                <div class="col-6 col-sm-3 mx-auto">
                    <div class="features-box style1 m-b30 wow bounceInUp border mx-auto text-dark p-3 pb-5" data-wow-duration="2s" data-wow-delay="0.3s"">
                        <div class="dlab-info text-center">
                          <i class="text-primary ti-headphone-alt"></i><br>
                          <span class="fw-bolder">Good Tour Guide</span>
                        </div>
                      </div>
                </div>
    
                <div class="col-6 col-sm-3 mx-auto">
                    <div class="features-box style1 m-b30 wow bounceInUp border mx-auto text-dark p-3 pb-5" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="dlab-info text-center">
                            <i class="text-primary fas fa-hamburger mb-0"></i><br>
                            <span class="fw-bolder">Good Food</span>
                        </div>
                      </div>
                </div>
    
                <div class="col-6 col-sm-3 mx-auto">
                    <div class="features-box style1 m-b30 wow bounceInUp border mx-auto text-dark p-3 pb-5" data-wow-duration="2s" data-wow-delay="0.3s"">
                        <div class="dlab-info text-center">
                            <i class="text-primary ti-plus"></i><br>
                            <span class="fw-bolder">Good Medic</span>
                        </div>
                      </div>
                </div>
      
            </div>
            @endif

            <div class="section-head text-black">
                
                <h3 class="title">{{$data->nama}}</h3>
                <div>{!!$data->desc!!}</div> 

                <a href="{{$data->link_tombol}}" class="btn btn-info">{{$data->nama_tombol !== null ? $data->nama_tombol : 'Pesan sekarang'}}</a>
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