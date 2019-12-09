<!DOCTYPE html>
<html lang="en" class="has-navbar-fixed-top">

<head>
    @include('chef_includes.header')

    <title>@yield('title')</title>
</head>

<body>

    <!-- Navbar Section -->
    @include('chef_includes.navbar')
    <!-- End NavbarSection -->

    <!-- Sidebar Section -->
    @include('chef_includes.sidebar')
    <!-- End Sidebar Section -->

    <!-- Dashboard Content Section -->
    @yield('chef_content')
    <!-- End Dashboard Content Section -->

    <!-- Footer Section -->
    @include('chef_includes.footer')
    <!-- End Footer Section -->

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    
    <!-- Nice Scroll PLuggin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>

    <!-- Nice Scroll PLuggin -->
    <script src="{{ asset('user_assets/js/script.js') }}"></script>
</body>

</html>