<!DOCTYPE html>
<html lang="en" id="home">

<head>
    @include('chef_includes.header')

    <title>@yield('title')</title>
</head>

<body>

    <!-- Navbar Section -->
    <header>
        @include('chef_includes.profile_navbar')
    </header>
    <!-- End Navbar Section -->

    <!-- Content Section -->
    @yield('chef_content')
    <!-- End Content Section -->

    <!-- Footer Section -->
    <footer class="footer" id="footer">
        @include('chef_includes.footer')
    </footer>
    <!-- End Footer Section -->

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

    <!-- Own Javascript -->
    <script src="{{ asset('chef_js/script.js') }}"></script>
</body>

</html>