<!DOCTYPE html>
<html lang="en" id="home">

<head>
    @include('profile_includes.header')

    <title>@yield('title')</title>
</head>

<body id="beranda">

    <!-- Hero  Section -->
    @include('profile_includes.navbar')
    <!-- End Hero  Section -->

    <!-- Hero  Section -->
    @include('profile_includes.hero')
    <!-- End Hero  Section -->

    <!-- Profile Content Section -->
    @yield('profile_content')
    <!-- End Profile Content Section -->

    <!-- Footer Section -->
    @include('profile_includes.footer')
    <!-- End Footer Section -->

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

    <!-- Own Javascript -->
    <script src="{{ asset('user_assets/js/profile_script.js') }}"></script>

</body>

</html>