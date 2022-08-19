@extends('layouts.layout_user')
@section('content')

<style>
    .background-banner{
        height: 80vh;
        background-position: center;
        background-repeat: no-repeat;
    }

    .banner{
        top:20%;
        left: 10%;
    }

    .overlay-barber-1{
        width: 90%;
        aspect-ratio: 1;
        border: 1px solid lightgreen;
        position: absolute;
        z-index: 0;
        top: -5%;
        left: -3%;
        border-radius: 10px;
    }

    .overlay-barber-2{
        width: 90%;
        aspect-ratio: 1;
        border: 1px solid lightgreen;
        position: absolute;
        z-index: 0;
        top: -12%;
        left: -10%;
        border-radius: 10px;
    }

    .features-box{
        cursor: pointer;
    }

    .features-box:hover{
        background-color: rgb(32, 32, 32) !important; 
        color: white !important;
    }

    @media only screen and (max-width: 600px) {
        .background-banner{
            height: 100vh;
        }

        .banner{
            top:10%;
            left: 10%;
        }

    }
</style>

<div class="section-full bg-white background-banner kinder-about-content" 
    style="background-image:url('https://images.pexels.com/photos/7697490/pexels-photo-7697490.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');">
    <div class="overlay-background"></div>
  
    <div class="container position-absolute banner">

        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12 col-12 wow fadeIn order-2 order-md-1 mt-5 mt-sm-0" data-wow-delay="0.2s"  data-wow-duration="2s">
              <div class="section-head kinder-head">
                <h2 class="head-title text-white mb-3">Tampil percaya diri dengan gaya rambut kekinian</h2>
                <p class="text-white">Kami membantu membuat anda tampil lebih rapi dan meningkatkan kepercayaan diri</p>
                <div>
                    <button type="button" class="btn btn-primary">Primary</button>
                </div>
            </div>
            </div>
            <div class="col-md-4 col-10 mx-auto position-relative order-1 order-md-2">
                <div class="overlay-barber-1"></div>
                <div class="overlay-barber-2"></div>
                <img class="position-relative" src="{{asset('images/home/barber.png')}}" alt="">
            </div>
        </div>
    </div>
</div>

{{-- Produk --}}
<div class="section-full content-inner bg-gray">
    <div class="container">
      <div class="section-head text-black text-center">
        <h3 class="title">Pelayanan Kami</h3>
        <p>Babershop kami tidak hanya melayani tentang potong rambut saja tetapi kami juga mempunyai beberapa layanan yang menunjang anda tampil lebih percaya diri </p>
      </div>
    </div>

    <div class="container">
        <div class="row features-area-one">
            <div class="col-10 col-sm-3 mx-auto">
                <div class="features-box style1 m-b30 wow bounceInUp border mx-auto text-dark" data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="dlab-info ">
                        <i class="ti-time"></i><br>
                        <span class="">Sangat bahagia</span>
                        <p class="">Hallo</p>
                    </div>
                  </div>
            </div>

            <div class="col-10 col-sm-3 mx-auto">
                <div class="features-box style1 m-b30 wow bounceInUp border mx-auto text-dark" data-wow-duration="2s" data-wow-delay="0.3s"">
                    <div class="dlab-info ">
                      <i class="ti-time"></i><br>
                      <span class="">Biasa</span>
                      <p class="">Hallo</p>
                    </div>
                  </div>
            </div>

            <div class="col-10 col-sm-3 mx-auto">
                <div class="features-box style1 m-b30 wow bounceInUp border mx-auto text-dark" data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="dlab-info ">
                        <i class="ti-time"></i><br>
                        <span class="">Bahagia</span>
                        <p class="">Hallo</p>
                    </div>
                  </div>
            </div>

            <div class="col-10 col-sm-3 mx-auto">
                <div class="features-box style1 m-b30 wow bounceInUp border mx-auto text-dark" data-wow-duration="2s" data-wow-delay="0.3s"">
                    <div class="dlab-info ">
                        <i class="ti-time"></i><br>
                        <span class="">Sedih</span>
                        <p class="">Hallo</p>
                    </div>
                  </div>
            </div>
  
          </div>
    </div>
</div>

{{-- Testi --}}
<div class="section-full bg-white content-inner-2">
    <div class="container">
        <div class="section-head text-black text-center">
          <h3 class="title">Paket terbaik Kami</h3>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- Pricing table-1 Columns 3 with gap -->
            <div class="section-content box-sort-in button-example">
                <div class="pricingtable-row">
                    <div class="row max-w1000 m-auto">
                        <div class="col-sm-12 col-md-4 col-lg-4 p-3">
                            <div class="pricingtable-wrapper style1 px-0 rounded-md">
                                <div class="pricingtable-inner">
                                    <div class="pricingtable-price border-bottom"> 
                                        <div class="icon-bx-wraper left">
											<div class="icon-bx-xs bg-dark  radius"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-headphone"></i></a> </div>
											<div class="icon-content text-start">
												<h4 class="dlab-tilte text-capitalize mb-0">Box Circle MD</h4>
												<p>Lorem ipsum </p>
											</div>
										</div>
                                    </div>
                                    <ul class="pricingtable-features pt-3">
                                        <li><i class="fas fa-check text-primary float-start me-3"></i><small>Full Responsive </small> </li>
                                        <li><i class="fas fa-check text-primary float-start me-3"></i><small>Multi color theme</small> </li>
                                        <li><i class="fas fa-check text-primary float-start me-3"></i><small>With Bootstrap</small> </li>
                                        <li><i class="fas fa-check text-primary float-start me-3"></i><small>Easy to customize</small> </li>
                                        <li><i class="fas fa-check text-primary float-start me-3"></i><small> Many Sortcodes</small></li>
                                    </ul>
                                    <p class="p-3">Lorem ipsum dolor sit amet adipiscing elit sed do eiusmod tempors labore et dolore magna siad enim aliqua</p>
                                    
                                    <h4 class="mb-0">Rp 23.000</h4>
                                    <small>For limited period</small>

                                    <div class="m-t20"> 
                                        <button type="button" class="btn btn-outline-secondary">Dark</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-4 col-lg-4 p-3">
                            <div class="pricingtable-wrapper style1 px-0 rounded-md border border-primary bg-softblue">
                                <div class="pricingtable-inner">
                                    <div class="pricingtable-price border-bottom bg-softblue"> 
                                        <div class="icon-bx-wraper left">
											<div class="icon-bx-xs bg-dark  radius"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-headphone"></i></a> </div>
											<div class="icon-content text-start">
												<h4 class="dlab-tilte text-capitalize mb-0">Box Circle MD</h4>
												<p>Lorem ipsum </p>
											</div>
										</div>
                                    </div>
                                    <ul class="pricingtable-features pt-3">
                                        <li class="bg-softblue"><i class="fas fa-check text-primary float-start me-3"></i><small class="text-dark">Full Responsive </small> </li>
                                        <li class="bg-softblue"><i class="fas fa-check text-primary float-start me-3"></i><small class="text-dark">Multi color theme</small> </li>
                                        <li class="bg-softblue"><i class="fas fa-check text-primary float-start me-3"></i><small class="text-dark">With Bootstrap</small> </li>
                                        <li class="bg-softblue"><i class="fas fa-check text-primary float-start me-3"></i><small class="text-dark">Easy to customize</small> </li>
                                        <li class="bg-softblue"><i class="fas fa-check text-primary float-start me-3"></i><small class="text-dark"> Many Sortcodes</small></li>
                                    </ul>
                                    <p class="p-3">Lorem ipsum dolor sit amet adipiscing elit sed do eiusmod tempors labore et dolore magna siad enim aliqua</p>
                                    
                                    <h4 class="mb-0">Rp 23.000</h4>
                                    <small>For limited period</small>

                                    <div class="m-t20"> 
                                        <button type="button" class="btn btn-outline-secondary">Dark</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-4 col-lg-4 p-3">
                            <div class="pricingtable-wrapper style1 px-0 rounded-md">
                                <div class="pricingtable-inner">
                                    <div class="pricingtable-price border-bottom"> 
                                        <div class="icon-bx-wraper left">
											<div class="icon-bx-xs bg-dark  radius"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-headphone"></i></a> </div>
											<div class="icon-content text-start">
												<h4 class="dlab-tilte text-capitalize mb-0">Box Circle MD</h4>
												<p>Lorem ipsum </p>
											</div>
										</div>
                                    </div>
                                    <ul class="pricingtable-features pt-3">
                                        <li><i class="fas fa-check text-primary float-start me-3"></i><small>Full Responsive </small> </li>
                                        <li><i class="fas fa-check text-primary float-start me-3"></i><small>Multi color theme</small> </li>
                                        <li><i class="fas fa-check text-primary float-start me-3"></i><small>With Bootstrap</small> </li>
                                        <li><i class="fas fa-check text-primary float-start me-3"></i><small>Easy to customize</small> </li>
                                        <li><i class="fas fa-check text-primary float-start me-3"></i><small> Many Sortcodes</small></li>
                                    </ul>
                                    <p class="p-3">Lorem ipsum dolor sit amet adipiscing elit sed do eiusmod tempors labore et dolore magna siad enim aliqua</p>
                                    
                                    <h4 class="mb-0">Rp 23.000</h4>
                                    <small>For limited period</small>

                                    <div class="m-t20"> 
                                        <button type="button" class="btn btn-outline-secondary">Dark</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing table-1 Columns 3 with gap END -->
</div>

{{-- Paralax --}}
<div class="section-full bg-white content-inner-2 kinder-about-content py-1" 
style="background-image:url({{asset('images/home/barber-paralax.png')}});">
  <div class="about-overlay-box"></div>
          <div class="container-md">
    <div class="row">
      <div class="col-12  wow fadeIn" data-wow-delay="0.2s"  data-wow-duration="2s">
        <div class="section-head kinder-head text-center my-5">
            <p class="text-white mb-2">Memperingati Hari kemerdekaan</p>
            <h3 class="head-title text-white">Diskon 17% + 8%  untuk paket Standart</h3>
            <button type="button" class="btn btn-primary">Primary</button>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- About --}}
<div class="section-full content-inner bg-gray">
    <div class="container">
      <div class="section-head text-black text-center">
        <h4 class="">Tentang kami Kami</h4>
        
      </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-10 border-end d-flex mx-auto">
                <h1 class="title my-auto mx-auto">Ferry <br>Barber Shop</h1>
            </div>
            <div class="col-sm-6 col-12 mx-auto mt-sm-0 mt-3">
                <div class="container">

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu consequat eu duis fames. Elementum ultrices risus nec orci velit, amet imperdiet dignissim. Pulvinar pretium, nunc pellentesque et. Cras nulla ullamcorper felis condimentum nisl urna, mauris.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-full content-inner bg-gray pb-4">
    <div class="container">
      <div class="section-head text-black text-center">
        <h4 class="">Team kami</h4>
      </div>

        <div class="section-content">
            <div class="testimonial-two-dots owl-carousel owl-none owl-theme owl-dots-primary-full owl-loaded owl-drag">
                <div class="item">
                    <div class="testimonial-15 quote-right">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <div class="testimonial-detail clearfix">
                                    
                                    <div class="radius">
                                        <img src="https://img.freepik.com/free-vector/hand-drawn-clothing-donation-concept_52683-54708.jpg?w=996&t=st=1660014330~exp=1660014930~hmac=eaa7176a20c5a7cc417f5e9c17463810463710719772edd6897a02cf4bb8c653" class="" alt="">
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="testimonial-text ">
                                    <strong class="testimonial-name text-dark">David Matin</strong>
                                    <p>
                                        <small>

                                            There are many variations of passages of Lorem Ipsum available,
                                        </small>
                                    </p>
                                </div>
                            </div> 
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div> 
</div>

<!-- Testimonials blog -->
<div class="section-full overlay-black-middle bg-secondry content-inner-2 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s" style="background-image:url(https://images.pexels.com/photos/5383854/pexels-photo-5383854.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2);">
    <div class="overlay-background"></div>
    <div class="container">
        <div class="section-head text-white text-center">
            <h2 class="title">What People Are Saying</h2>
        </div>
        <div class="section-content">
            <div class="client-carousel owl-carousel owl-dots-none owl-theme sprite-nav">
                <div class="item">
                    <div class="testimonial-15 quote-right">
                        <div class="row align-items-center">

                            <div class="col-sm-3 col-10 mx-auto">
                                <div class="testimonial-detail clearfix">
                                    <div class="radius">
                                        <img src="https://img.freepik.com/free-vector/hand-drawn-clothing-donation-concept_52683-54708.jpg?w=996&t=st=1660014330~exp=1660014930~hmac=eaa7176a20c5a7cc417f5e9c17463810463710719772edd6897a02cf4bb8c653" class="img-thumbnail" alt=""></div>
                                </div>
                            </div>

                            <div class="col-sm-9 col-10 mx-auto">
                                <div class="testimonial-text ">
                                    <strong class="testimonial-name">David Matin</strong>
                                    <p>
                                        <small>

                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum
                                        </small>
                                    </p>
                                </div>
                            </div> 
                        </div>
                    </div>                  
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Latest blog -->
<div class="section-full content-inner bg-pink wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
    <div class="container">
        <div class="section-head text-center">
            <h3 class="fw-bolder">Blog Kami</h3>
        </div>
        <div class="blog-carousel owl-none owl-carousel">

            <div class="item">
                <div class="blog-post blog-grid blog-rounded blog-effect1">
                    <div class="dlab-post-media dlab-img-effect"> 
                        <a href="blog-single.html">
                            <img src="https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
                        </a> 
                    </div>
                    <div class="p-a20 bg-pink">
                        <div class="dlab-post-title">
                            <h4 class="post-title"><a href="blog-single.html">The Shocking Revelation of Education.</a></h4>
                        </div>
                        <div class="dlab-post-text">
                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
                        </div>
                        
                    </div>
                </div>						
            </div>
            
        </div>
    </div>
</div>


@endsection