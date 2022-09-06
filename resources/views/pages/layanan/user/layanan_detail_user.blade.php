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

<div class="page-content bg-white">
   
    <!-- Top destination -->
    <div class="section-full bg-white content-inner-1 text-center">
        <div class="container">
            <div class="section-head text-black text-center border-bottom">
                <h3 class="title">{{$data->nama}}</h3>
                <div>{!!$data->desc!!}</div> 
            </div>
            
            <div class="row">
                @forelse ($subs as $dt)
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeIn" data-wow-delay="0.2s"  data-wow-duration="2s">
                    <div class="icon-bx-wraper sr-iconbox m-b20">
                        <div class="icon-lg m-b20">
                            <a href="javascript:void(0);" class="icon-cell">
                                <img class="rounded lozad" data-src="{{ $dt->foto != null ? asset($dt->foto) : 'https://images.pexels.com/photos/237272/pexels-photo-237272.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'}}" alt=""/>
                            </a>
                        </div>
                        <div class="icon-content text-start">
                            <p class="mb-3 text-dark fw-bolder">

                                {{-- <i class="ti-map-alt"></i>  --}}
                                {{$dt->nama}}
                            </p>
                            
                           
                            <a href="{{route('layananSubDetail',$dt->link)}}" class="btn btn-sm btn-outline-primary">Lihat selengkapnya</a>
                        </div>
                    </div>
                </div> 
                @empty
                    
                @endforelse
                

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