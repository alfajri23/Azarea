<header class="site-header mo-left header navstyle3">
    <!-- main header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg ">
        <div class="main-bar clearfix ">
            <div class="container clearfix">
                <!-- website logo -->
                <div class="logo-header mostion logo-white">
                    <img class="pt-3 pt-sm-0 " src="{{asset($data)}}" alt="" style="max-width: 140px !important;"/>
                </div>
                <!-- nav toggle button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- extra nav -->
                <div class="extra-nav">
                    <div class="extra-cell">
                        <button id="quik-search-btn" type="button" class="site-button-link"><i class="la la-search"></i></button>
                    </div>
                </div>
                <!-- Quik search -->
                <div class="dlab-quik-search ">
                    <form action="#">
                        <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                        <span id="quik-search-remove"><i class="ti-close"></i></span>
                    </form>
                </div>
                <!-- main nav -->
                <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                    {{-- <div class="logo-header d-md-block d-lg-none">
                        Azaria Travel
                    </div> --}}
                    <ul class="nav navbar-nav">	
                        {{-- <li class="mx-2">
                            <img class="" src="{{asset($data)}}" alt="" width="150"/>
                        </li> --}}

                        <li class="mx-2">
                            <a class="text-capitalize fw-normal" href="{{route('homeUser')}}">Home</a>
                        </li>

                        <li class="mx-2">
                            <a href="javascript:;" class="text-capitalize fw-normal">Layanan<i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                @forelse ($layanans as $layanan)
                                <li><a href="{{route('layananDetail',$layanan->link)}}">{{$layanan->nama}}</a></li>
                                @empty
                                @endforelse                  
                            </ul>
                        </li>
                        
                        <li class="mx-2">
                            <a class="text-capitalize fw-normal" href="{{route('blogUser')}}">Blog</a>
                        </li>

                        <li class="mx-2">
                            <a class="text-capitalize fw-normal" href="{{route('about')}}">Tentang Kami</a>
                        </li>

                        <li class="d-flex align-items-center mx-2">
                            <div>

                                <a class="btn btn-transparent" href="{{route('layananDetail',$layanans[0]->link)}}">Sewa Mobil</a>
                            </div>
                        </li>
                    </ul>	
                    <div class="dlab-social-icon">
                        <ul>
                            <li><a class="site-button facebook sharp-sm fab fa-facebook-f" href="javascript:void(0);"></a></li>
                            <li><a class="site-button twitter sharp-sm fab fa-twitter" href="javascript:void(0);"></a></li>
                            <li><a class="site-button linkedin sharp-sm fab fa-linkedin-in" href="javascript:void(0);"></a></li>
                            <li><a class="site-button instagram sharp-sm fab fa-instagram" href="javascript:void(0);"></a></li>
                        </ul>
                    </div>			
                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>
