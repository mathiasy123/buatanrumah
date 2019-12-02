<nav class="navbar is-fixed-top box-shadow-y">
    <!-- Navbar Section -->
    <div class="navbar-brand">
        <a class="navbar-burger toggler">
            <span></span>
            <span></span>
            <span></span>
        </a>

        <a href="/pemasak" class="navbar-item has-text-weight-bold has-text-black">Buatan Rumah</a>

        <a class="navbar-burger nav-toggler">
            <span></span>
            <span></span>
            <span></span>
        </a>
    </div>
    <!-- End Navbar Section -->

    <!-- Navbar Menu Section -->
    <div class="navbar-menu has-background-white">
        <div class="navbar-start">
            <a class="navbar-item has-text-centered-mobile has-text-centered-tablet"><span class="is-hidden-mobile "><strong>Nama:</strong></span> {{ ucwords(auth('web')->user()->name) }}</a>
            <a class="navbar-item has-text-centered-mobile has-text-centered-tablet"><span class="is-hidden-mobile "><strong>Role:</strong></span> Pemasak</a>
        </div>

        <div class="navbar-end">
            <a class="navbar-item">

                <!-- Dropdown Section -->
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link has-text-centered-mobile has-text-centered-tablet">Pemasak</a>
                    <div class="navbar-dropdown is-right">
                        <a class="navbar-item has-text-centered-mobile has-text-centered-tablet"><span class="is-hidden-mobile">Terdaftar: </span> {{ auth('web')->user()->created_at }}</a>
                        <hr class="navbar-divider">
                        <a href="/logout" class="navbar-item has-text-centered-mobile has-text-centered-tablet">Keluar Aplikasi</a>
                    </div>
                </div>
                <!-- End Dropdown Section -->

            </a>
        </div>
    </div>
    <!-- End Navbar Menu Section -->

</nav>

