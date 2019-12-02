<!DOCTYPE html>
<html lang="en" id="home">
    
<head>
    @include('vendor_includes.header')

    <title>@yield('title')</title>
</head>

<body id="beranda">

    <!-- Navbar Section -->
    @include('vendor_includes.navbar')
    <!-- End Navbar Section -->

    <!-- Hero Carousel Section -->
    @include('vendor_includes.hero')
    <!-- End Hero Carousel Section -->

    <!-- Vendor Content Section -->
    @yield('vendor_content')
    <!-- End Vendor Content Section -->

    <!-- Footer Section -->
    @include('vendor_includes.footer')
    <!-- End Footer Section -->

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    
    <!-- Carousel Script For Bulma -->
    <script src="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.4/dist/js/bulma-carousel.min.js"></script>

    <!-- Script For Carousel Hero -->
    <script>
    bulmaCarousel.attach("#carousel", {

        slidesToScroll: 1,

        slidesToShow: 1,

        autoplay: true,

        infinite: true,

        breakpoints: [
            {
                changePoint: 768,
                slidesToShow: 1,
                slidesToScroll: 1
            }
        ]

    });
    </script>

    <!-- Own Javascript -->
    <script src="{{ asset('vendor_assets/js/script.js') }}"></script>
</body>

</html>