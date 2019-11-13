<!DOCTYPE html>
<html lang="en" id="home">

<head>
    @include('admin_includes.header')

    <title>@yield('title')</title>
</head>

<body>

    <div class="columns is-mobile">
        <div class="column is-3 is-three-fifths-mobile">
            <!-- Sidebar Section -->
            @include('admin_includes.sidebar')
            <!-- End Sidebar Section -->
        </div>
        <div class="column is-9">
            <!-- Admin Dashboard Section -->
            @yield('admin_content')
            <!-- End Admin Dashboard Section -->
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="footer" id="footer">
        @include('admin_includes.footer')
    </footer>
    <!-- End Footer Section -->

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

    <!-- Own Javascript -->
    <script src="{{ asset('vendor_js/script.js') }}"></script>
</body>

</html>