<!-- Footer -->
<footer class="site-footer text-uppercase footer-dark">
  <div class="footer-top bg-dark">
    <div class="container saf-footer">
      <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-6 footer-col-4 pe-sm-5 p-0">
          <div class="widget widget_getintuch pe-sm-5 p-0">
            <h5 class="m-b30 ">{{$data->nama}}</h5>
            <div  class="fs-6 text-capitalize">
              {{$data->desc}}
            </div>
            
            {{-- <ul>
              <li>
                <i class="ti-location-pin"></i>
                <strong>Alamat</strong>
                {{$data->alamat}}
              </li>
              <li>
                <i class="ti-mobile"></i>
                <strong>Telepon</strong>
                <a class="text-dark" href="https://api.whatsapp.com/send?phone=6285856561200">
                  {{$data->telepon_1}} (24/7 Support Line)
                </a>
              </li>
              <li>
                <i class="ti-email"></i>
                <strong>email</strong>
                <a class="text-dark text-lowercase" href="mail:{{$data->email}}">{{$data->email}}</a>
              </li>
            </ul> --}}
          </div>
        </div>
        
        <div class="col-md-6 col-lg-3 col-sm-6 footer-col-4 my-5 my-sm-0">
          <div class="widget widget_services border-0">
            <h5 class="m-b30">Bantuan</h5>
            <ul>
              <li><a href="{{route('about')}}">Tentang</a></li>
              <li><a href="{{route('blogUser')}}">Blog</a></li>
            </ul>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-3 col-sm-6 footer-col-4">
          
          <div class="widget widget_services border-0">
            <h5 class="m-b30">Layanan</h5>
            <ul>
              @forelse ($layanans as $layanan)
              <li><a href="{{route('layananDetail',$layanan->link)}}">{{$layanan->nama}}</a></li>
              @empty
              @endforelse
            </ul>
          </div>

          <div class="widget widget_services border-0">
            <h5 class="m-b30">Metode Pembayaran</h5>
            <div>
              <img src="{{asset('images/home/bank.png')}}" alt="" srcset="">
            </div>
          </div>
        </div>

        
      </div>
    </div>
  </div>
  <!-- footer bottom part -->
  <div class="footer-bottom bg-dark">
    <div class="container">
      <div class="row">
        <div class="text-center"> <span>Copyright © 2022 PT Bumi Tekno Indonesia</span> </div>
        
      </div>
    </div>
  </div>
  
</footer>
<!-- Footer END -->
