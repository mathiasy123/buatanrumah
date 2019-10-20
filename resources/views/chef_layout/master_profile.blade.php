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

    <!-- Own Javascript -->
    <script src="{{ asset('chef_js/script.js') }}"></script>

</body>

</html>