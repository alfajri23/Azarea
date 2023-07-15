<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>{{isset($title) ? $title : 'Azareatimur';}}</title>

    <!-- Additional CSS Files -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <meta name="title" content="@yield('meta_title','Azariatimur')">
    <meta name="keywords" content="@yield('meta_keywords','Azariatimur')">
    <meta name="description" content="@yield('meta_description','Azariatimur')">
    <meta name="copyright" content="azareatimur.com">
    <meta name="geo.placename" content="indonesia">
    <meta name="geo.country" content="id">
    <meta name="content-language" content="id">

    <link rel="stylesheet" href="{{ asset('css/user/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/feather.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/user/owl/owl.carousel.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/user/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/templete.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/plugins.css') }}">

    <link rel="stylesheet" href="{{ asset('css/user/skin/skin-1.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/user/aos.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="{{asset($favicon)}}">
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" sizes="16x16" href="{{ asset('logo.png') }}">

  </head>

<body>


  <!-- ***** Header Area Start ***** -->

  @include('components.navbar.navbar_users_travel')

  <!-- ***** Header Area End ***** -->

  {{-- <div class="banner-wrapper layer-after app-shape bg-antiquewhite">
    <div class="container"> --}}
      @yield('content')
    {{-- </div>
  </div> --}}

  @include('components.floating_button.floating_button')


    @include('components.footer.footer_user')


    <script src="{{ asset('js/user/plugin.js') }}"></script>
    <script src="{{ asset('js/user/aos.min.js') }}"></script>
    <script src="{{ asset('js/user/scripts.js') }}"></script>
    <script>
        AOS.init();
    </script>
    <script src="{{ asset('js/user/dz.carousel.js') }}"></script>

    <script>
      //Number format
      String.prototype.reverse = function() {
                return this.split("").reverse().join("");
            }

            window.currencyFormat = function reformatText(input) {
                var x = input.value;
                x = x.replace(/,/g, ""); // Strip out all commas
                x = x.reverse();
                x = x.replace(/.../g, function(e) {
                    return e + ",";
                }); // Insert new commas
                x = x.reverse();
                x = x.replace(/^,/, ""); // Remove leading comma
                input.value = x;
            }
        //End number
    </script>

    
</body>

</html>