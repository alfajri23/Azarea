@extends('layouts.layout_user')
@section('content')

<style>
  .row > .column {
    padding: 0 8px;
  }

  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  /* Create four equal columns that floats next to eachother */
  .column {
    float: left;
    width: 18%;
    background-repeat: no-repeat;
    background-size: cover !important;
    /* height: 200px; */
    background-position: center !important;
    border-radius: 20px;
    aspect-ratio: 4 / 3;
  }

  /* The Modal (background) */
  .modal {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: black;
  }

  /* Modal Content */
  .modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    width: 90%;
    max-width: 1200px;
  }

  /* The Close Button */
  .close {
    color: white;
    position: absolute;
    top: 10px;
    right: 25px;
    font-size: 35px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: #999;
    text-decoration: none;
    cursor: pointer;
  }

  /* Hide the slides by default */
  .mySlides {
    display: none;
  }

  /* Next & previous buttons */
  .prev,
  .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -50px;
    color: rgb(31, 31, 31);
    font-weight: bold;
    font-size: 20px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
    -webkit-user-select: none;
  }

  /* Position the "next button" to the right */
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }

  /* On hover, add a black background color with a little bit see-through */
  .prev:hover,
  .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
  }

  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }

  /* Caption text */
  .caption-container {
    text-align: center;
    background-color: black;
    padding: 2px 16px;
    color: white;
  }

  img.demo {
    opacity: 0.6;
  }

  .active,
  .demo:hover {
    opacity: 1;
  }

  img.hover-shadow {
    transition: 0.3s;
  }

  .hover-shadow:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }

  .text-desc{
      width: 100%;
      overflow: hidden;
      text-overflow: ellipsis;
      height: 65px;
  }

  @media only screen and (max-width: 600px) {
    .column {
      width: 40%;
    }
  }

</style>

<div class="banner-wrapper vh-80 vh-md-100 layer-after app-shape d-flex mb-5">
  <div class="container-md my-auto">
    <div class="section-full">
      <div class="row">
          <div class="col-10 col-xxxl-7 col-xl-6 vh-md-100 pt-7 pb-7 align-items-center d-flex order-2 order-sm-1 mx-auto">
            <div class="">
              <h2 class="font-title mt-3">Menuai 
                <span class="text-primary"> Website </span>
                Dengan Syariah</h2>
              <p class="font-20">
                AMF bertekad membumikan syariah terutama di bidang ekonomi pada anggota dan calon anggota kami pada khususnya . Semoga allah memberkahi langkah kami. Aamiin. 
              </p>
            </div>
          </div>
          <div class="col-xxxl-5 col-xl-6 vh-md-100 align-items-center d-flex order-1 order-sm-2">
              <div class="card w-100 border-0 bg-transparent text-center d-block">
                  <img src="https://img.freepik.com/free-vector/hand-drawn-clothing-donation-concept_52683-54708.jpg?w=996&t=st=1660014330~exp=1660014930~hmac=eaa7176a20c5a7cc417f5e9c17463810463710719772edd6897a02cf4bb8c653" alt="app-bg" class="w-100 rounded-xl os-init" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="500">    
              </div>
          </div>
      </div>
    </div>
  </div>
</div>

{{-- Kenapa Kami --}}
<div class="section-full bg-white content-inner">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="sort-title clearfix text-center">
          <h4>Kenapa Harus Kami</h4>
        </div>
        <div class="section-content box-sort-in p-b0 button-example">
          <div class="row justify-content-center">

            <div class="basis-20 m-b30">
              <div class="icon-bx-wraper center px-1">
                <div class="icon-bx-sm radius text-success border-2 m-b20"> 
                  <a href="javascript:void(0);" class="icon-cell">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-moon-stars" viewBox="0 0 16 16">
                      <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"/>
                      <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
                    </svg>
                  </a> 
                </div>
                <div class="icon-content">
                  <h5 class="font-18 dlab-tilte text-capitalize">Berbasis Syariah</h5>
                  <p class="font-14">Berdasarkan penerapan sistem syariah</p>
                </div>
              </div>
            </div>

            <div class="basis-20 m-b30">
              <div class="icon-bx-wraper center px-1">
                <div class="icon-bx-sm radius text-success border-2 m-b20"> 
                  <a href="javascript:void(0);" class="icon-cell">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-layers" viewBox="0 0 16 16">
                      <path d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zm3.515 7.008L14.438 10 8 13.433 1.562 10 4.25 8.567l3.515 1.874a.5.5 0 0 0 .47 0l3.515-1.874zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z"/>
                    </svg>
                  </a> 
                </div>
                <div class="icon-content">
                  <h5 class="font-18 dlab-tilte text-capitalize">Banyak Pilihan</h5>
                  <p class="font-14">AMF menyediakan berbagai produk dari jenis simpanan, pembiayaan, Baitul Maal, hingga PPOB</p>
                </div>
              </div>
            </div>

            <div class="basis-20 m-b30">
              <div class="icon-bx-wraper center px-1">
                <div class="icon-bx-sm radius text-success border-2 m-b20"> 
                  <a href="javascript:void(0);" class="icon-cell text-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                      <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                      <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                      <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                    </svg>
                  </a> 
                </div>
                <div class="icon-content">
                  <h5 class="font-18 dlab-tilte text-capitalize">Mendapat SHU</h5>
                  <p class="font-14">Berkesempatan Mendapat Sisa Hasil Usaha tiap tahun .</p>
                </div>
              </div>
            </div>

            <div class="basis-20 m-b30">
              <div class="icon-bx-wraper center px-1">
                <div class="icon-bx-sm radius text-success border-2 m-b20"> 
                  <a href="javascript:void(0);" class="icon-cell text-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-bar-chart-line" viewBox="0 0 16 16">
                      <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"/>
                    </svg>
                  </a> 
                </div>
                <div class="icon-content">
                  <h5 class="font-18 dlab-tilte text-capitalize">Meningatkan ekonomi</h5>
                  <p class="font-14">Koperasi dapat meningkatkan perekonomian di Indonesia.</p>
                </div>
              </div>
            </div>

            <div class="basis-20 m-b30">
              <div class="icon-bx-wraper center px-1">
                <div class="icon-bx-sm radius text-success border-2 m-b20"> 
                  <a href="javascript:void(0);" class="icon-cell text-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-clipboard2-heart" viewBox="0 0 16 16">
                      <path d="M10.058.501a.501.501 0 0 0-.5-.501h-2.98c-.276 0-.5.225-.5.501A.499.499 0 0 1 5.582 1a.497.497 0 0 0-.497.497V2a.5.5 0 0 0 .5.5h4.968a.5.5 0 0 0 .5-.5v-.503A.497.497 0 0 0 10.555 1a.499.499 0 0 1-.497-.499Z"/>
                      <path d="M3.605 2a.5.5 0 0 0-.5.5v12a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-12a.5.5 0 0 0-.5-.5h-.5a.5.5 0 0 1 0-1h.5a1.5 1.5 0 0 1 1.5 1.5v12a1.5 1.5 0 0 1-1.5 1.5h-9a1.5 1.5 0 0 1-1.5-1.5v-12a1.5 1.5 0 0 1 1.5-1.5h.5a.5.5 0 0 1 0 1h-.5Z"/>
                      <path d="M8.068 6.482c1.656-1.673 5.795 1.254 0 5.018-5.795-3.764-1.656-6.69 0-5.018Z"/>
                    </svg>
                  </a> 
                </div>
                <div class="icon-content">
                  <h5 class="font-18 dlab-tilte text-capitalize">Asas Kekeluargaan</h5>
                  <p class="font-14">AMF memiliki asas kekeluargaan dalam penerapanya</p>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Tentang kami --}}
<div class="section-full content-inner bg-second">
  <div class="container">
    <div class="row edu-about align-items-center g-5">
      <div class="col-lg-4 m-b30 me-4">
        <div class="card w-100 border-0 bg-transparent text-center d-block">
          <img src="{{asset($logo)}}" alt="app-bg" class="w-100 rounded-xl os-init" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="500">    
      </div>
       
      </div>
      <div class="col-lg-7">
        <div class="row ">
          <div class="section-head m-b20">
            <h5 class="title-small">Tentang kami</h5>
            <h2 class="title text-primary">
              Amanah Mandiri  Finance
            </h2>
          </div>
          <p>
            Amanah Mandiri Finance adalah koperasi dengan aktivitas usaha yang bergerak pada bidang simpanan, pembiayaan, dan investasi berdasarkan penerapan sistem syariah. Didirikan pada tanggal 1 Februari 2011 oleh 19 orang pendiri. KSPPS Amanah Mandiri Finance ini Koperasi dengan pangsa berbasis pendidikan 
          </p>

          <a href="{{route('about')}}" class="text-success">
            Selengkapnya
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg>
          </a>

        </div>
      </div>
    </div>
  </div>
</div>

{{-- Produk --}}
<div class="section-full content-inner bg-gray">
  <div class="container">
    <div class="section-head text-black text-center">
      <h2 class="title">Layanan Kami</h2>
    </div>

    <div class="row justify-content-center">
      @forelse ($layanans as $layanan)
      <div class="col-lg-4 col-md-6 col-sm-12 m-b30 wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.3s">
        <div class="icon-bx-wraper bx-style-1 p-a30 fly-box bg-white">
          <div class="icon-lg m-b20"> 
            <span class="icon-cell text-primary">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-award" viewBox="0 0 16 16">
                <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z"/>
                <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
              </svg>
            </span> 
          </div>
          <div class="icon-content">
            <h5 class="dlab-tilte text-uppercase">{{$layanan->nama}}</h5>
            <div class="dlab-post-text text-desc">
              {!!$layanan->desc!!}
            </div>
            
            <a href="{{route('layananDetail',$layanan->id)}}" class="text-success fw-bolder">
              Selengkapnya
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
        
      @empty    
      @endforelse

    </div>
  </div>
</div>

{{-- Join Us --}}
<div class="section-full content-inner bg-second py-2">
  <div class="container">
    <div class="row edu-about align-items-center g-5">
      <div class="col-lg-4 m-b30 me-4">
        <div class="card w-100 border-0 bg-transparent text-center d-block">
          <img src="{{asset($logo)}}" alt="app-bg" class="w-100 rounded-xl os-init" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="500">    
        </div>
       
      </div>
      <div class="col-lg-7">
        <div class="row ">
          <div class="section-head m-b20">
            
            <h2 class="title text-primary">
              Bergabunglah dengan kami
            </h2>
          </div>
          <p>
            membumikan syariah terutama di bidang ekonomi pada anggota
          </p>

          <div>

            <a href="{{route('pendaftaranUser')}}" class="btn btn-outline-success">
              Selengkapnya
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
              </svg>
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>


<!-- Latest blog -->
<div class="section-full content-inner bg-gray wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
  <div class="container">
    <div class="section-head">
      <h2 class="title">Blog kami</h2>
    </div>
    <div class="blog-carousel owl-none owl-carousel">
      @forelse ($blogs as $blog)
      <div class="item border-md">
        <div class="blog-post blog-grid blog-rounded blog-effect1 post-style-1 border-md">
          <div class="dlab-post-media dlab-img-effect"> 
            <img src="https://img.freepik.com/free-photo/information-articles-blogging-device-screen_53876-124046.jpg?w=900&t=st=1660019234~exp=1660019834~hmac=45690c1f3dad6a7b010d684572eac8b427cbd64ca9cec7c8f135e63f6ca74b18" alt="">
          </div>
          <div class="dlab-info p-a20">
            
            <div class="dlab-post-title ">
                <h4 class="post-title font-16">
                  <a href="{{route('blogDetailUser',['id' => $blog->id , 'link' => $blog->link])}}">{{$blog->judul}}</a>
                </h4>
            </div>
            <div class="dlab-post-text font-14 ">
                {{$blog->meta_description}}
            </div>
            
            </div>
        </div>
      </div>
        
      @empty
        
      @endforelse
      
    </div>
  </div>
</div>

<!-- Galeri -->
<div class="section-full content-inner bg-gray wow fadeIn pb-5" data-wow-duration="2s" data-wow-delay="0.4s">
  <div class="container">
    <div class="section-head">
      <h2 class="title">Galeri</h2>
    </div>
    
    <div class="row">
      @forelse ($galeris as $galeri)
        
        <div class="column hover-shadow m-1 border" onclick="openModal();currentSlide({{$loop->iteration}})" style="background: url('{{asset($galeri->foto)}}');">
          {{-- <img src="{{asset($galeri->foto)}}" onclick="openModal();currentSlide({{$loop->iteration}})" class="hover-shadow" /> --}}
        </div>
      @empty
      @endforelse
    </div>

    <div id="myModal" class="modal">
      <span class="close cursor" onclick="closeModal()">&times;</span>
      <div class="modal-content">

        @forelse ($galeris as $galeri)
        <div class="mySlides">
          <div class="numbertext">{{$loop->iteration}} / {{$loop->count}}</div>
          <img src="{{asset($galeri->foto)}}" style="width:50%">
        </div>
        @empty
        @endforelse

        <!-- Next/previous controls -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <!-- Caption text -->
        <div class="my-3">
          
        </div>

        <!-- Thumbnail image controls -->
        <div class="row px-2">

          @forelse ($galeris as $galeri)

          <div class="column demo hover-shadow m-1 border"onclick="currentSlide({{$loop->iteration}})" style="background: url('{{asset($galeri->foto)}}');">
          </div>
          @empty
          @endforelse
        </div>

      </div>
    </div>

    
  </div>
</div>




<script>
  // Open the Modal
  function openModal() {
    document.getElementById("myModal").style.display = "block";
  }
  
  // Close the Modal
  function closeModal() {
    document.getElementById("myModal").style.display = "none";
  }
  
  var slideIndex = 1;
  showSlides(slideIndex);
  
  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    console.log(slides);
    slides[slideIndex-1].style.display = "flex";
    slides[slideIndex-1].style.justifyContent = "center";
    dots[slideIndex-1].className += " active";
    captionText.innerHTML = dots[slideIndex-1].alt;
  }
</script>


@endsection