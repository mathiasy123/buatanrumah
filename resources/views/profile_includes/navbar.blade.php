<nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
            <a href="#beranda" class="navbar-item menu-scroll">
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
                <a href="#beranda" class="navbar-item menu-scroll">
                    Beranda
                </a>

                <a href="#tentang" class="navbar-item menu-scroll">
                    Tentang
                </a>

                <a href="#makanan" class="navbar-item menu-scroll">
                    Makanan
                </a>

                <a href="#kontak" class="navbar-item menu-scroll">
                    Kontak
                </a>

            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <a href="#makanan" class="button is-warning is-outlined is-fullwidth is-rounded has-text-black menu-scroll">
                        Pesan Makanan
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>