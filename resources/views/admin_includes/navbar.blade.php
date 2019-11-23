<nav class="navbar is-fixed-top box-shadow-y">
    <!-- Navbar Section -->
    <div class="navbar-brand">
        <a href="#" class="navbar-burger toggler">
            <span></span>
            <span></span>
            <span></span>
        </a>

        <a href="/admin" class="navbar-item has-text-weight-bold has-text-black">Buatan Rumah</a>

        <a href="#" class="navbar-burger nav-toggler">
            <span></span>
            <span></span>
            <span></span>
        </a>
    </div>
    <!-- End Navbar Section -->

    <!-- Navbar Menu Section -->
    <div class="navbar-menu has-background-white">
        <div class="navbar-start">
            <a class="navbar-item has-text-centered-mobile has-text-centered-tablet"><span class="is-hidden-mobile ">Nama:</span> {{ ucwords(auth('admin')->user()->name) }}</a>
            <a class="navbar-item has-text-centered-mobile has-text-centered-tablet"><span class="is-hidden-mobile ">Role:</span> Admin CMS</a>
        </div>

        <div class="navbar-end">
            <a class="navbar-item">

                <!-- Dropdown Section -->
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link has-text-centered-mobile has-text-centered-tablet">Admin</a>
                    <div class="navbar-dropdown is-right">
                        <a class="navbar-item has-text-centered-mobile has-text-centered-tablet"><span class="is-hidden-mobile">Terdaftar: </span> {{ auth('admin')->user()->created_at }}</a>
                        <hr class="navbar-divider">
                        <a href="/admin/logout" class="navbar-item has-text-centered-mobile has-text-centered-tablet">Logout</a>
                    </div>
                </div>
                <!-- End Dropdown Section -->

            </a>
        </div>
    </div>
    <!-- End Navbar Menu Section -->

</nav>

