<!-- Navbar Menu Section -->
<nav class="navbar is-white is-fixed-top is-spaced" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand"> 
            <a href="/biodata/1" class="navbar-item">
                <h5 class="is-size-5"><strong>{{ ucwords(auth()->user()->name) }}</strong></h5>
            </a>

            <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navMenu" class="navbar-menu">

            <div class="navbar-end">
                <a class="navbar-item menu-item menu-center page-scroll" href="/chef">
                    Home
                </a>

                <a class="navbar-item menu-item menu-center page-scroll" href="/food">
                    Kelola Makanan
                </a>

                <a class="navbar-item menu-item menu-center page-scroll" href="/order">
                    Kelola Pemesanan
                </a>

                <div class="navbar-item">
                    <div class="buttons">
                        <a href="/profile/{{ auth()->user()->id }}" class="login-button button is-outlined is-warning is-rounded">
                            <strong>Lihat Profile</strong>
                        </a>
                        <a href="/logout" class="login-button button is-outlined is-warning is-rounded">
                            <strong>Keluar</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- End Navbar Menu Section -->