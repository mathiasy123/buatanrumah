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
            <a class="navbar-item has-text-centered-mobile has-text-centered-tablet"><span class="is-hidden-mobile "><strong>Nomor Telepon (WA):</strong></span> {{ (auth('web')->user()->phone_call == '') ? '--' : auth('web')->user()->phone_call }}</a>
            <a class="navbar-item has-text-centered-mobile has-text-centered-tablet"><span class="is-hidden-mobile "><strong>Instagram:</strong></span> {{ (auth('web')->user()->instagram == '') ? '--' : auth('web')->user()->instagram }}</a>
        </div>

        <div class="navbar-end">
            <a class="navbar-item">

                <!-- Dropdown Section -->
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link has-text-centered-mobile has-text-centered-tablet">Pemasak</a>
                    <div class="navbar-dropdown is-right">
                        <a class="navbar-item has-text-centered-mobile has-text-centered-tablet"><span class="is-hidden-mobile">Terdaftar: </span> {{ auth('web')->user()->created_at }}</a>
                        <hr class="navbar-divider">
                        <a href="whatsapp://send?text=https%3A%2F%2Fwww.wix.com%2F%0A%0AUntuk%20pemesanan%20makanan%2C%20silahkan%20akses%20link%20diatas%2C%20dengan%20cara%3A%0A--%3E%20Pilih%20makanan%20dan%20isi%20form%20pemesanan%20dengan%20benar%20dan%20lengkap%0A--%3E%20Mohon%20catat%20kode%20pemesanan%20Anda%20%0A--%3E%20Hubungi%20saya%20untuk%20informasi%20lebih%20lanjut%20dan%20untuk%20melakukan%20pembayaran" data-action="share/whatsapp/share" class="navbar-item has-text-centered-mobile has-text-centered-tablet">Bagikan Profil (WhatsApp)</a>
                        <a href="/logout" class="navbar-item has-text-centered-mobile has-text-centered-tablet">Keluar Aplikasi</a>
                    </div>
                </div>
                <!-- End Dropdown Section -->

            </a>
        </div>
    </div>
    <!-- End Navbar Menu Section -->

</nav>

