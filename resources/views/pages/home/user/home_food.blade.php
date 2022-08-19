@extends('layouts.layout_user')
@section('content')

<style>

    .bg-pink{
        background-color:#fffefe;
    }

    .background-banner{
        height: 90vh;
        background-position: center;
        background-repeat: no-repeat;
    }

    @media only screen and (max-width: 600px) {
        .background-banner{
            height: 70vh;
        }
    }
</style>

<div class="section-full bg-white background-banner kinder-about-content" 
    style="background-image:url({{asset('https://cdn.pixabay.com/photo/2017/04/18/15/10/strawberry-ice-cream-2239377_1280.jpg')}});">
    <div class="overlay-background"></div>
  
    <div class="container position-absolute" style="top:30%;left: 5%;">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 wow fadeIn" data-wow-delay="0.2s"  data-wow-duration="2s">
                <div class="section-head kinder-head text-center">
                    <h4 class="text-white mb-2 fw-normal">Diskon up to 70% </h4>
                    <h2 class="text-white mb-5">Theobramine dan Phenylethylamine</h2>
                    <div>
                        <button type="button" class="btn btn-primary">Primary</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12"></div>
        </div>
    </div>
</div>

<div class="section-full bg-pink content-inner about-carousel-ser">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Why Choose Us</h2>
            <p>Praesent accumsan sapien a cursus placerat. Phasellus odio dui, suscipit eu mattis sit amet, viverra quis sem. Nullam suscipit, mi at interdum hendrerit, magna nisl aliquet felis, non laoreet sapien nibh in augue. Integer non.</p>
        </div>
    </div>
</div>

{{-- Why my --}}
<div class="section-full bg-pink content-inner pb-5 pb-sm-0">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12 order-sm-1 order-2">
                <div class="icon-bx-wraper mb-5">
                    <div class="icon-bx-sm text-primary"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-user"></i></a> </div>
                    <div class="icon-content">
                        <h5 class="dlab-tilte text-capitalize">Square Box Center</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
                    </div>
                </div>
                <div class="icon-bx-wraper ">
                    <div class="icon-bx-sm text-primary"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-user"></i></a> </div>
                    <div class="icon-content">
                        <h5 class="dlab-tilte text-capitalize">Square Box Center</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12 order-sm-2 order-1">
                <img src="{{asset('images/home/ice-cream-single.png')}}" alt="">
            </div>

            <div class="col-md-4 col-12 order-sm-3 order-3">
                <div class="icon-bx-wraper mb-5">
                    <div class="icon-bx-sm text-primary"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-user"></i></a> </div>
                    <div class="icon-content">
                        <h5 class="dlab-tilte text-capitalize">Square Box Center</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
                    </div>
                </div>
                <div class="icon-bx-wraper ">
                    <div class="icon-bx-sm text-primary"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-user"></i></a> </div>
                    <div class="icon-content">
                        <h5 class="dlab-tilte text-capitalize">Square Box Center</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Top Menu -->
<div class="section-full bg-pink content-inner-1 text-center pb-5 pb-sm-3">
    <div class="container">
        <div class="section-head kinder-head">
            <h3 class="fw-bolder">New Product</h3>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeIn" data-wow-delay="0.2s"  data-wow-duration="2s">
                <div class="icon-bx-wraper sr-iconbox m-b20">
                    <div class="icon-lg m-b20">
                        <a href="javascript:void(0);" class="icon-cell">
                            <img class="rounded" src="https://images.pexels.com/photos/1294943/pexels-photo-1294943.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=""/>
                        </a>
                    </div>
                    <div class="icon-content text-start">
                        <p class="mb-3">

                            <i class="ti-map-alt"></i> Jakarta
                        </p>
                        
                        <h6>Pantai</h6>
                        <button type="button" class="btn btn-outline-primary">Primary</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeIn" data-wow-delay="0.2s"  data-wow-duration="2s">
                <div class="icon-bx-wraper sr-iconbox m-b20">
                    <div class="icon-lg m-b20">
                        <a href="javascript:void(0);" class="icon-cell">
                            <img class="rounded" src="https://images.pexels.com/photos/1294943/pexels-photo-1294943.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=""/>
                        </a>
                    </div>
                    <div class="icon-content text-start">
                        <p class="mb-3">

                            <i class="ti-map-alt"></i> Jakarta
                        </p>
                        
                        <h6>Pantai</h6>
                        <button type="button" class="btn btn-outline-primary">Primary</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeIn" data-wow-delay="0.2s"  data-wow-duration="2s">
                <div class="icon-bx-wraper sr-iconbox m-b20">
                    <div class="icon-lg m-b20">
                        <a href="javascript:void(0);" class="icon-cell">
                            <img class="rounded" src="https://images.pexels.com/photos/1294943/pexels-photo-1294943.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=""/>
                        </a>
                    </div>
                    <div class="icon-content text-start">
                        <p class="mb-3">

                            <i class="ti-map-alt"></i> Jakarta
                        </p>
                        
                        <h6>Pantai</h6>
                        <button type="button" class="btn btn-outline-primary">Primary</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeIn" data-wow-delay="0.2s"  data-wow-duration="2s">
                <div class="icon-bx-wraper sr-iconbox m-b20">
                    <div class="icon-lg m-b20">
                        <a href="javascript:void(0);" class="icon-cell">
                            <img class="rounded" src="https://images.pexels.com/photos/1294943/pexels-photo-1294943.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=""/>
                        </a>
                    </div>
                    <div class="icon-content text-start">
                        <p class="mb-3">

                            <i class="ti-map-alt"></i> Jakarta
                        </p>
                        
                        <h6>Pantai</h6>
                        <button type="button" class="btn btn-outline-primary">Primary</button>
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
                            <div class="col-3">
                                <div class="testimonial-detail clearfix">
                                    <div class="radius">
                                        <img src="https://img.freepik.com/free-vector/hand-drawn-clothing-donation-concept_52683-54708.jpg?w=996&t=st=1660014330~exp=1660014930~hmac=eaa7176a20c5a7cc417f5e9c17463810463710719772edd6897a02cf4bb8c653" class="img-thumbnail" alt=""></div>
                                   
                                </div>
                            </div>
                            <div class="col-9">
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

<!-- Top Menu -->
<div class="section-full bg-pink content-inner-1 text-center">
    <div class="container">
        <div class="section-head kinder-head">
            <h3 class="fw-bolder">Special Product</h3>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeIn" data-wow-delay="0.2s"  data-wow-duration="2s">
                <div class="icon-bx-wraper sr-iconbox m-b20">
                    <div class="icon-lg m-b20">
                        <a href="javascript:void(0);" class="icon-cell">
                            <img class="rounded" src="https://images.pexels.com/photos/1294943/pexels-photo-1294943.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=""/>
                        </a>
                    </div>
                    <div class="icon-content text-start">
                        <p class="mb-3">

                            <i class="ti-map-alt"></i> Jakarta
                        </p>
                        
                        <h6>Pantai</h6>
                        <button type="button" class="btn btn-outline-primary">Primary</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeIn" data-wow-delay="0.2s"  data-wow-duration="2s">
                <div class="icon-bx-wraper sr-iconbox m-b20">
                    <div class="icon-lg m-b20">
                        <a href="javascript:void(0);" class="icon-cell">
                            <img class="rounded" src="https://images.pexels.com/photos/1294943/pexels-photo-1294943.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=""/>
                        </a>
                    </div>
                    <div class="icon-content text-start">
                        <p class="mb-3">

                            <i class="ti-map-alt"></i> Jakarta
                        </p>
                        
                        <h6>Pantai</h6>
                        <button type="button" class="btn btn-outline-primary">Primary</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeIn" data-wow-delay="0.2s"  data-wow-duration="2s">
                <div class="icon-bx-wraper sr-iconbox m-b20">
                    <div class="icon-lg m-b20">
                        <a href="javascript:void(0);" class="icon-cell">
                            <img class="rounded" src="https://images.pexels.com/photos/1294943/pexels-photo-1294943.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=""/>
                        </a>
                    </div>
                    <div class="icon-content text-start">
                        <p class="mb-3">

                            <i class="ti-map-alt"></i> Jakarta
                        </p>
                        
                        <h6>Pantai</h6>
                        <button type="button" class="btn btn-outline-primary">Primary</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeIn" data-wow-delay="0.2s"  data-wow-duration="2s">
                <div class="icon-bx-wraper sr-iconbox m-b20">
                    <div class="icon-lg m-b20">
                        <a href="javascript:void(0);" class="icon-cell">
                            <img class="rounded" src="https://images.pexels.com/photos/1294943/pexels-photo-1294943.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=""/>
                        </a>
                    </div>
                    <div class="icon-content text-start">
                        <p class="mb-3">

                            <i class="ti-map-alt"></i> Jakarta
                        </p>
                        
                        <h6>Pantai</h6>
                        <button type="button" class="btn btn-outline-primary">Primary</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Meet -->
<div class="section-full bg-pink content-inner-1 text-center">
    <div class="container">
        <div class="section-head kinder-head">
            <h3 class="fw-bolder">Meet Ours Team</h3>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeIn" data-wow-delay="0.2s"  data-wow-duration="2s">
                <div class="icon-bx-wraper sr-iconbox m-b20">
                    <div class="icon-lg m-b20">
                        <a href="javascript:void(0);" class="icon-cell">
                            <img class="rounded" src="https://images.pexels.com/photos/1294943/pexels-photo-1294943.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=""/>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeIn" data-wow-delay="0.2s"  data-wow-duration="2s">
                <div class="icon-bx-wraper sr-iconbox m-b20">
                    <div class="icon-lg m-b20">
                        <a href="javascript:void(0);" class="icon-cell">
                            <img class="rounded" src="https://images.pexels.com/photos/1294943/pexels-photo-1294943.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=""/>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeIn" data-wow-delay="0.2s"  data-wow-duration="2s">
                <div class="icon-bx-wraper sr-iconbox m-b20">
                    <div class="icon-lg m-b20">
                        <a href="javascript:void(0);" class="icon-cell">
                            <img class="rounded" src="https://images.pexels.com/photos/1294943/pexels-photo-1294943.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=""/>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeIn" data-wow-delay="0.2s"  data-wow-duration="2s">
                <div class="icon-bx-wraper sr-iconbox m-b20">
                    <div class="icon-lg m-b20">
                        <a href="javascript:void(0);" class="icon-cell">
                            <img class="rounded" src="https://images.pexels.com/photos/1294943/pexels-photo-1294943.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=""/>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- Why my --}}
<div class="section-full bg-info content-inner pb-5 pb-sm-0 text-white">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-3 col-12 order-sm-1 order-2">
                <img src="{{asset('images/home/ice-cream-single.png')}}" alt="">
            </div>

            <div class="col-md-6 col-12 order-sm-2 order-1">
                <div class="container">
                    <div class="section-head text-center">
                        <h3 class="lh-base fw-bolder">Khusus Hari Rabu, Pembelian Diatas 
                            Rp 20.000 mendapatkan Gratis 
                            2 Ice Cream Vanila</h3>
                        <button type="button" class="btn btn-primary">Primary</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-12 order-sm-3 order-3">
                <img src="{{asset('images/home/ice-cream-single.png')}}" style="-webkit-box-reflect: right;" alt="">
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