<div class="section-full content-inner bg-gray wow fadeIn pb-5" data-wow-duration="2s" data-wow-delay="0.4s">
  <div class="container">
    <div class="section-head">
      <h2 class="title">Galeri</h2>
    </div>
    
    <div class="row justify-content-center">
      @forelse ($galeris as $galeri)
        
        <div class="column hover-shadow m-1 border lozad" onclick="openModal();currentSlide({{$loop->iteration}})" data-background-image="{{asset($galeri->foto)}}">
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
          <img class="lozad" data-src="{{asset($galeri->foto)}}" style="width:50%">
        </div>
        @empty
        <div class="mySlides"></div>
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

          <div class="column demo hover-shadow m-1 border" onclick="currentSlide({{$loop->iteration}})" data-background-image="{{asset($galeri->foto)}}">
          </div>
          @empty
          <div class="demo"></div>
          @endforelse
        </div>

      </div>
    </div>

    
  </div>
</div>