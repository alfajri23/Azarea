<header class="site-header mo-left navstyle4 header border-bottom">
    <!-- main header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix ">
            <div class="container-md clearfix">
                <!-- website logo -->
                <div class="logo-header mostion logo-dark">
                    <a href="{{route('homeUser')}}">
                        <img src="{{asset($data)}}" alt="">
                    </a>
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
                    <div class="logo-header d-md-block d-lg-none">
                        <a href="/">
                            <img src="{{asset($data)}}" alt="">
                        </a>
                    </div>
                    <ul class="nav navbar-nav">	
                        <li class="{{Request::segment('1') == '' ? 'active' : ''}}">
                            <a href="{{route('homeUser')}}">Home</a>
                        </li>

                        <li class="{{Request::segment('1') == 'blog' ? 'active' : ''}}">
                            <a href="{{route('blogUser')}}">Blog</a>
                        </li>

                        <li class="{{Request::segment('1') == 'galeri' ? 'active' : ''}}">
                            <a href="{{route('galeri')}}">Galeri</a>
                        </li>

                        <li class="{{Request::segment('1') == 'kontak' ? 'active' : ''}}">
                            <a href="{{route('kontak')}}">Kontak</a>
                        </li>

                        <li class="{{Request::segment('1') == 'tentang-kami' ? 'active' : ''}}">
                            <a href="{{route('about')}}">Tantang kami</a>
                        </li>

                        <li class="{{Request::segment('1') == 'pendaftaran' ? 'active' : ''}} d-flex align-items-center">
                            <div>

                                <a class="btn btn-success" href="">Login</a>
                            </div>
                        </li>
                    </ul>	

                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>

