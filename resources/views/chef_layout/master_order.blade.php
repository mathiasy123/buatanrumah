<!DOCTYPE html>
<html lang="en" id="home">

<head>
    @include('chef_includes.header')

    <title>@yield('title')</title>
</head>

<body>

    <!-- Navbar Menu Section -->
    <nav class="navbar is-white is-fixed-top is-spaced" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item">
                    <h5 class="is-size-5"><strong>Buatan Rumah</strong></h5>
                </a>

                <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navMenu" class="navbar-menu">

                <div class="navbar-end">
                    <a class="navbar-item menu-item menu-center page-scroll" href="/profile/1">
                        Home
                    </a>

                    <a class="navbar-item menu-item menu-center page-scroll" href="/profile/1">
                        Tentang
                    </a>

                    <a class="navbar-item menu-item menu-center page-scroll" href="/profile/1">
                        Masakan
                    </a>

                    <a class="navbar-item menu-item menu-center page-scroll" href="#footer">
                        Kontak
                    </a>

                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar Menu Section -->

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