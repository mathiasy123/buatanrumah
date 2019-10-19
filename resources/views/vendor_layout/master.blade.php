<!DOCTYPE html>
<html lang="en" id="home">

<head>
    @include('vendor_includes.header')

    <title>@yield('title')</title>
</head>

<body>

    <!-- Navbar Section -->
    @include('vendor_includes.navbar')
    <!-- End Navbar Section -->

    <!-- Tentang Kita Section -->
    @include('vendor_includes.media')
    <!-- End Tentang Kita Section -->

    <!-- Content Section -->
    @yield('vendor_content')
    <!-- End Content Section -->

    <!-- Footer Section -->
    <footer class="footer" id="footer">
        @include('vendor_includes.footer')
    </footer>
    <!-- End Footer Section -->

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

    <!-- Own Javascript -->
    <script src="{{ asset('vendor_js/script.js') }}"></script>
</body>

</html>