@extends('layouts.layout_user')
@section('content')

<style>
    .background-banner{
        height: 95vh;
        background-position: center;
        background-repeat: no-repeat;
    }

    .paralax-fix{
        background-position: center;
        background-size: cover;
    }

    @media only screen and (max-width: 600px) {
        .background-banner{
            height: 70vh;
        }
    }
</style>

<div class="section-full bg-white background-banner kinder-about-content lozad" 
    data-background-image="{{asset('images/banner/banner_travel_1.png')}}"
    data-placeholder-background="white">
    <div class="overlay-background"></div>
  
    <div class="container position-absolute" style="top:30%;left: 10%;">

        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 wow fadeIn" data-wow-delay="0.2s"  data-wow-duration="2s">
              <div class="section-head kinder-head">
                <h2 class="head-title text-white mb-3">Life is short and the world is wide</h2>
                <p class="text-white">Nikmati petualangan terhebatmu dan jelajahi seluruh indonesia bersama kami sekarang juga </p>
                <div>
                    <button type="button" class="btn btn-primary">Primary</button>
                </div>
            </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12"></div>
        </div>
    </div>
</div>

{{-- Promo --}}
<div class="section-full dlab-we-find bg-img-fix p-t20 p-b20 bg-white wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
    <div class="container">
        <div class="section-content">
            <div class="section-head text-center mt-0 mt-sm-4">
                <h4 class="fw-bolder">Promo Baru Untukmu</h4>
            </div>

            <div class="blog-carousel owl-btn-center-lr owl-carousel owl-btn-3">
                @forelse ($banners as $banner)
                <div class="items">
                    <div class="event-post post-grid shadow radius">
                        <div class="dlab-post-media">
                            <img src="{{asset($banner->foto)}}" alt="">
                        </div>
                    </div>
                </div> 
                    
                @empty
                    
                @endforelse
            </div>
        </div>
    </div>
</div>


<!-- Content Section -->
<div class="section-full content-inner bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 m-b30 about-two align-self-start">
                <div class="row sp10">
                    <img data-placeholder-background="white" data-src="{{asset('images/home/pemandangan-1.png')}}" class="rounded-lg lozad" alt="">       
                </div>
            </div>
            <div class="col-lg-6 m-b30 about-two">
                <div class="section-head mb-4">
                    <h3 class="fw-bolder">We make the best for all our Traveler customers.</h3>
                </div>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoe et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamc laboris nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. .</p>
                
                <div class="row g-4 mt-sm-5 mt-0">
                    <div class="col-6">
                        <span> 
                            <h6>
                                <i class="ti-headphone-alt fs-3 me-2 text-primary"></i>
                                <span>Customer Support 24/7</span> 
                            </h6>
                        </span>
                    </div>
                    <div class="col-6">
                        <span> 
                            <h6>
                                <i class="ti-headphone-alt fs-3  me-2 text-primary"></i>
                                Customer Support 24/7
                            </h6>
                        </span>
                    </div>
                    <div class="col-6">
                        <span> 
                            <h6>
                                <i class="ti-headphone-alt fs-3  me-2 text-primary"></i>
                                Customer Support 24/7
                            </h6>
                        </span>
                    </div>
                    <div class="col-6">
                        <span> 
                            <h6>
                                <i class="ti-headphone-alt fs-3  me-2 text-primary"></i>
                                Customer Support 24/7
                            </h6>
                        </span>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

{{-- Layanan --}}
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center ">
            <h3 class="title">Top Destinasi</h3>
        </div>
        <div class="row">
            @forelse ($destinations as $destinasi)  
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeIn" data-wow-delay="0.2s"  data-wow-duration="2s">
                <div class="icon-bx-wraper sr-iconbox m-b20">
                    <div class="icon-lg m-b20">
                        <a href="javascript:void(0);" class="icon-cell">
                            <img class="rounded lozad" data-placeholder-background="white" data-src="{{$destinasi->foto != null ? asset($destinasi->foto) : 'https://images.pexels.com/photos/237272/pexels-photo-237272.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'}}" alt=""/>
                        </a>
                    </div>
                    <div class="icon-content text-start">
                        <p class="mb-3">

                            <i class="ti-map-alt"></i> {{$destinasi->nama}}
                        </p>
                        
                        <a href="{{route('layananSubDetail',$destinasi->link)}}" class="btn btn-outline-primary btn-sm">Lihat</a>
                    </div>
                </div>
            </div>
            @empty   
            @endforelse
        </div>
    </div>
</div>

{{-- Paralax mobil --}}
<div class="section-full bg-white content-inner-2 kinder-about-content py-5 paralax-fix lozad" 
    data-background-image="{{asset('images/home/paralax-mobil.png')}}"
    data-placeholder-background="white"
    >
  <div class="about-overlay-box"></div>
          <div class="container-md">
    <div class="row">
        <div class="col-sm-7 col-0 wow fadeIn" data-wow-delay="0.2s"  data-wow-duration="2s">
        </div>
      <div class="col-sm-5 col-11 wow fadeIn text-end text-sm-start" data-wow-delay="0.2s"  data-wow-duration="2s">
        <div class="section-head kinder-head my-5">
            <h2 class="text-white mb-3">Find The Best car
                to your Travel</h2>
            <a href="{{route('layananDetail',$layanans[0]->link)}}" class="btn btn-primary">Pesan sekarang</a>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- What we ooffer --}}
<div class="section-full content-inner bg-gray">
    <div class="container">
      <div class="section-head text-black text-center">
        <h3 class="title">What we over</h3>
      </div>
    </div>

    <div class="container">
        <div class="row features-area-one">
            <div class="col-10 col-sm-3 mx-auto">
                <div class="features-box style1 m-b30 wow bounceInUp border mx-auto text-dark" data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="dlab-info text-start">
                        <i class="text-primary ti-car"></i><br>
                        <span class="fw-bolder">Good Transport</span>
                        <p class="">Hallo</p>
                    </div>
                  </div>
            </div>

            <div class="col-10 col-sm-3 mx-auto">
                <div class="features-box style1 m-b30 wow bounceInUp border mx-auto text-dark" data-wow-duration="2s" data-wow-delay="0.3s"">
                    <div class="dlab-info text-start">
                      <i class="text-primary ti-headphone-alt"></i><br>
                      <span class="fw-bolder">Good Tour Guide</span>
                      <p class="">Hallo</p>
                    </div>
                  </div>
            </div>

            <div class="col-10 col-sm-3 mx-auto">
                <div class="features-box style1 m-b30 wow bounceInUp border mx-auto text-dark" data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="dlab-info text-start">
                        <i class="text-primary fas fa-hamburger"></i><br>
                        <span class="fw-bolder">Good Food</span>
                        <p class="">Hallo</p>
                    </div>
                  </div>
            </div>

            <div class="col-10 col-sm-3 mx-auto">
                <div class="features-box style1 m-b30 wow bounceInUp border mx-auto text-dark" data-wow-duration="2s" data-wow-delay="0.3s"">
                    <div class="dlab-info text-start">
                        <i class="text-primary ti-plus"></i><br>
                        <span class="fw-bolder">Good Medic</span>
                        <p class="">Hallo</p>
                    </div>
                  </div>
            </div>
  
        </div>
    </div>
</div>

{{-- Paralax dewata --}}
<div class="section-full bg-white content-inner-2 kinder-about-content" 
    style="
    background-image:url({{asset('images/home/paralax-dewata.png')}});
    background-size: 100%;
    background-repeat: no-repeat;background-position: center;
    background-size: cover;">
  <div class="about-overlay-box"></div>
          <div class="container-md">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-12"></div>
      <div class="col-lg-6 col-md-12 col-sm-12 col-12 wow fadeIn" data-wow-delay="0.2s"  data-wow-duration="2s">
        <div class="section-head kinder-head">
          <h2 class="head-title text-yellow"></h2>
          <p class="text-white"></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Top destination -->
<div class="section-full bg-white content-inner-1 text-center mb-5">
    <div class="container">
        <div class="section-head kinder-head">
            <h3 class="fw-bolder">Layanan Kami</h3>
        </div>
        <div class="row">
            @forelse ($destinations as $destinasi)  
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeIn" data-wow-delay="0.2s"  data-wow-duration="2s">
                <div class="icon-bx-wraper sr-iconbox m-b20">
                    <div class="icon-lg m-b20">
                        <a href="javascript:void(0);" class="icon-cell">
                            <img class="rounded lozad" data-placeholder-background="white" data-src="{{$destinasi->foto != null ? asset($destinasi->foto) : 'https://images.pexels.com/photos/237272/pexels-photo-237272.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'}}" alt=""/>
                        </a>
                    </div>
                    <div class="icon-content text-start">
                        <p class="mb-3">

                            <i class="ti-map-alt"></i> {{$destinasi->nama}}
                        </p>
                        
                        <a href="{{route('layananSubDetail',$destinasi->link)}}" class="btn btn-outline-primary btn-sm">Lihat</a>
                    </div>
                </div>
            </div>
            @empty   
            @endforelse
            <div class="text-center">
                <p>
                    <a class="text-primary" href="{{route('layananDetail',$layanans[1]->link)}}">
                        Lihat selengkapnya
                    </a>
                    
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials Style 11 -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-head head-langschool text-center">
                    <h3 class="fw-bold">Apa Kata Mereka </h3>
                </div>
                <div class="section-content">
                    <div class="testimonial-six owl-carousel owl-btn-center-lr owl-btn-2 primary testimonial-13-area dots-style-3 owl-theme">
                        @forelse ($testimonis as $testimoni)
                            
                        <div class="item">
                            <div class="testimonial-13">
                                <div class="p-3">
                                    <div class="testimonial-pic radius shadow">
                                        <img src="{{asset($testimoni->foto)}}" alt="">
                                    </div>
                                    <h5 class="testimonial-name m-t10 m-b5">{{$testimoni->nama}}</h5> 
                                    <span class="testimonial-position text-primary">{{$testimoni->role}}</span> 
                                </div>
                                <div class="p-3 mt-3">
                                    
                                    <p>{{$testimoni->isi}}</p>
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

<!-- Latest blog -->
<div class="section-full content-inner bg-gray wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
    <div class="container">
        <div class="section-head text-center">
            <h3 class="fw-bolder">Blog Kami</h3>
        </div>
        <div class="blog-carousel owl-none owl-carousel">
            @forelse ($blogs as $blog)
            <div class="item">
                <div class="blog-post blog-grid blog-rounded blog-effect1">
                    <div class="dlab-post-media dlab-img-effect"> 
                        <a href="{{route('blogDetailUser',['id' => $blog->id , 'link' => $blog->link])}}">
                            <img class="lozad" data-placeholder-background="white" data-src="https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
                        </a> 
                    </div>
                    <div class="p-a20 bg-gray">
                        <div class="dlab-post-title">
                            <h4 class="post-title"><a href="{{route('blogDetailUser',['id' => $blog->id , 'link' => $blog->link])}}">{{$blog->judul}}</a></h4>
                        </div>
                        <div class="dlab-post-text">
                            <p>{{$blog->meta_description}}</p>
                        </div>
                        
                    </div>
                </div>						
            </div>
            @empty
        
            @endforelse
            
        </div>
    </div>
</div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script>
    const observer = lozad(); // lazy loads elements with default selector as '.lozad'
    observer.observe();
</script>



@endsection