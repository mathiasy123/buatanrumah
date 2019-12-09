<!DOCTYPE html>
<html lang="en" id="home">

<head>
    @include('profile_includes.header')

    <title>@yield('title')</title>
</head>

<body>

    <!-- Navbar Menu Section -->
    <nav class="navbar is-fixed-top box-shadow-y" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">
                <a href="/pemasak/profil/{{ $profile->user_id }}" class="navbar-item">
                    <strong>{{ $profile->user->name }}</strong>
                </a>

                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div class="navbar-menu">
                <div class="navbar-end has-text-centered has-text-white">
                    <a href="/pemasak/profil/{{ $profile->user_id }}" class="navbar-item">
                        Beranda
                    </a>

                    <a href="/pemasak/profil/{{ $profile->user_id }}" class="navbar-item">
                        Tentang
                    </a>

                    <a href="/pemasak/profil/{{ $profile->user_id }}" class="navbar-item">
                        Makanan
                    </a>

                    <a href="#kontak" class="navbar-item menu-scroll">
                        Kontak
                    </a>

                </div>

                <div class="navbar-end">
                    <div class="navbar-item">
                        <a href="/pemasak/profil/{{ $profile->user_id }}" class="button is-warning is-outlined is-fullwidth is-rounded has-text-black menu-scroll">
                            Pesan Makanan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar Menu Section -->

    <!-- Content Section -->
    @yield('profile_content')
    <!-- End Content Section -->

    <!-- Footer Section -->
    @include('profile_includes.footer')
    <!-- End Footer Section -->

    <!-- Own Javascript -->
    <script src="{{ asset('user_assets/js/profile_script.js') }}"></script>

</body>

</html>