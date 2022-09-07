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

        <div class="row pe-3">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 wow fadeIn" data-wow-delay="0.2s"  data-wow-duration="2s">
              <div class="section-head kinder-head">
                <h2 class="head-title text-white mb-3">Life is short and the world is wide</h2>
                <p class="text-white">Nikmati petualangan terhebatmu dan jelajahi seluruh indonesia bersama kami sekarang juga </p>
                <div>
                    <button type="button" class="btn text-white" style="background-color: #E38B68">Primary</button>
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

<!-- Top destination -->
<div class="section-full bg-white content-inner-1 text-center mb-5">
    <div class="container">
        <div class="section-head kinder-head">
            <h3 class="fw-bolder">Paket Kami</h3>
        </div>
        <div class="row">
            @forelse ($destinations as $destinasi)  
            <div class="col-lg-3 col-md-6 col-sm-6 col-6 my-4 wow fadeIn" data-wow-delay="0.2s"  data-wow-duration="2s">
                <div class="icon-bx-wraper sr-iconbox m-b20">
                    <div class="icon-lg mb-1">
                        <a href="javascript:void(0);" class="icon-cell">
                            <img class="rounded lozad" data-placeholder-background="white" data-src="{{$destinasi->foto != null ? asset($destinasi->foto) : 'https://images.pexels.com/photos/237272/pexels-photo-237272.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'}}" alt=""/>
                        </a>
                    </div>
                    <div class="icon-content text-start">
                        <p class="mb-3">

                            <i class="ti-map-alt"></i> {{$destinasi->nama}}
                        </p>
                        
                        <a href="{{route('layananSubDetail',$destinasi->link)}}" class="btn btn-outline-primary btn-sm mt-3">Lihat Selengkapnya</a>
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
            <div class="col-6 col-sm-3 mx-auto d-sm-block d-flex">
                <div class="features-box style1 m-b30 wow bounceInUp border mx-auto text-dark" data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="dlab-info text-start">
                        <i class="text-primary ti-car"></i><br>
                        <span class="fw-bolder">Good Transport</span>
                        <p class="">Hallo</p>
                    </div>
                  </div>
            </div>

            <div class="col-6 col-sm-3 mx-auto d-sm-block d-flex">
                <div class="features-box style1 m-b30 wow bounceInUp border mx-auto text-dark" data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="dlab-info text-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-check mb-3 mt-4 text-primary" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                      <br>
                      <span class="fw-bolder">Good Tour Guide</span>
                      <p class="">Hallo</p>
                    </div>
                  </div>
            </div>

            <div class="col-6 col-sm-3 mx-auto d-sm-block d-flex">
                <div class="features-box style1 m-b30 wow bounceInUp border mx-auto text-dark" data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="dlab-info text-start">

                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cup-hot mb-4 mt-3 text-primary" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M.5 6a.5.5 0 0 0-.488.608l1.652 7.434A2.5 2.5 0 0 0 4.104 16h5.792a2.5 2.5 0 0 0 2.44-1.958l.131-.59a3 3 0 0 0 1.3-5.854l.221-.99A.5.5 0 0 0 13.5 6H.5ZM13 12.5a2.01 2.01 0 0 1-.316-.025l.867-3.898A2.001 2.001 0 0 1 13 12.5ZM2.64 13.825 1.123 7h11.754l-1.517 6.825A1.5 1.5 0 0 1 9.896 15H4.104a1.5 1.5 0 0 1-1.464-1.175Z"/>
                            <path d="m4.4.8-.003.004-.014.019a4.167 4.167 0 0 0-.204.31 2.327 2.327 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.593.593 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3.31 3.31 0 0 1-.202.388 5.444 5.444 0 0 1-.253.382l-.018.025-.005.008-.002.002A.5.5 0 0 1 3.6 4.2l.003-.004.014-.019a4.149 4.149 0 0 0 .204-.31 2.06 2.06 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.593.593 0 0 0-.09-.252A4.334 4.334 0 0 0 3.6 2.8l-.01-.012a5.099 5.099 0 0 1-.37-.543A1.53 1.53 0 0 1 3 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a5.446 5.446 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 4.4.8Zm3 0-.003.004-.014.019a4.167 4.167 0 0 0-.204.31 2.327 2.327 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.593.593 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3.31 3.31 0 0 1-.202.388 5.444 5.444 0 0 1-.253.382l-.018.025-.005.008-.002.002A.5.5 0 0 1 6.6 4.2l.003-.004.014-.019a4.149 4.149 0 0 0 .204-.31 2.06 2.06 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.593.593 0 0 0-.09-.252A4.334 4.334 0 0 0 6.6 2.8l-.01-.012a5.099 5.099 0 0 1-.37-.543A1.53 1.53 0 0 1 6 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a5.446 5.446 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 7.4.8Zm3 0-.003.004-.014.019a4.077 4.077 0 0 0-.204.31 2.337 2.337 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.593.593 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3.198 3.198 0 0 1-.202.388 5.385 5.385 0 0 1-.252.382l-.019.025-.005.008-.002.002A.5.5 0 0 1 9.6 4.2l.003-.004.014-.019a4.149 4.149 0 0 0 .204-.31 2.06 2.06 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.593.593 0 0 0-.09-.252A4.334 4.334 0 0 0 9.6 2.8l-.01-.012a5.099 5.099 0 0 1-.37-.543A1.53 1.53 0 0 1 9 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a5.446 5.446 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 10.4.8Z"/>
                        </svg>
                        
                        <br>
                        <span class="fw-bolder">Good Food</span>
                        <p class="">Hallo</p>
                    </div>
                  </div>
            </div>

            <div class="col-6 col-sm-3 mx-auto d-sm-block d-flex">
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

<!-- Moibl -->
<div class="section-full bg-white content-inner-1 text-center mb-5">
    <div class="container">
        <div class="section-head kinder-head">
            <h3 class="fw-bolder">Sewa Mobil</h3>
        </div>
        <div class="row">
            @forelse ($mobils as $mobil)  
            <div class="col-lg-3 col-md-6 col-sm-6 col-6 my-4 wow fadeIn" data-wow-delay="0.2s"  data-wow-duration="2s">
                <div class="icon-bx-wraper sr-iconbox m-b20">
                    <div class="icon-lg mb-1">
                        <a href="javascript:void(0);" class="icon-cell">
                            <img class="rounded lozad" data-placeholder-background="white" data-src="{{$mobil->foto != null ? asset($mobil->foto) : 'https://images.pexels.com/photos/237272/pexels-photo-237272.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'}}" alt=""/>
                        </a>
                    </div>
                    <div class="icon-content text-start">
                        <p class="mb-3">

                            <i class="ti-map-alt"></i> {{$mobil->nama}}
                        </p>
                        
                        <a href="{{route('layananSubDetail',$mobil->link)}}" class="btn btn-outline-primary btn-sm mt-3">Lihat Selengkapnya</a>
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