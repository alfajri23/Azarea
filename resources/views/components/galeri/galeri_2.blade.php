<div class="section-full content-inner bg-gray wow fadeIn pb-5" data-wow-duration="2s" data-wow-delay="0.4s">
    <div class="container">
        <div class="section-head">
            <h2 class="fw-bolder fs-3">Galeri</h2>
        </div>
        <div class="row">
            @forelse ($galeris as $galeri)
            <div class="{{ $loop->first || $loop->remaining == 1 ? 'col-lg-6' : 'col-lg-3' }}  col-md-6 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                <a data-fslightbox="gallery" href="{{asset($galeri->foto)}}" class="category-box dlab-box">
                    <div class="dlab-media dlab-img-effect zoom">
                        <img data-src="{{asset($galeri->foto)}}" class="lozad" alt="galery">
                    </div>
                </a>
            </div>
            @empty
            @endforelse

            @if( request()->segment(1) == '' )
            <div class="col-lg-3 col-md-6 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.8s">
                <a href="{{ route('galeri') }}" class="category-box dlab-box">
                    <div class="dlab-media dlab-img-effect zoom">
                        <img class="lozad" data-placeholder-background="gray">
                    </div>
                    <div class="icon-content">
                        <h2 class="dlab-tilte">Lihat Semua</h2>
                        <p>+10 Galeri</p>
                    </div>
                </a>
            </div>
            @endif


            
        </div>
    </div>
</div>