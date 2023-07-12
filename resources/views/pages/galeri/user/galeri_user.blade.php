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

    @media only screen and (max-width: 600px) {
      .column {
        width: 40%;
      }
    }
  </style>


<div class="page-content bg-gray py-5">
    
    {{-- <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/bnr4.jpg);">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">Galeri</h1>
            </div>
        </div>
    </div> --}}

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
    
              <div class="column demo hover-shadow mx-1 border"onclick="currentSlide({{$loop->iteration}})" style="background: url('{{asset($galeri->foto)}}');">
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
      slides[slideIndex-1].style.display = "flex";
      slides[slideIndex-1].style.justifyContent = "center";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }
  </script>
  


@endsection