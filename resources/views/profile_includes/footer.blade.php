<footer class="footer" id="kontak">
    <div class="container is-fluid">
        <div class="content has-text-centered has-text-white">
            <div class="columns is-variable is-desktop">

                <div class="column is-4">
                    <h3 class="has-text-white">Mathias Yeremia Aryadi</h3>
                    <hr class="line-divider">
                    <p>{{ $profile->text_about }}</p>
                </div>

                <div class="column is-4">
                    <h3 class="has-text-white">Kontak Pemasak</h3>
                    <hr class="line-divider">
                    <p>{{ $profile->user->address }}</p>

                    <p>
                        <span><i class="fab fa-instagram fa-2x"></i></span>
                        {{ $profile->user->instagram }}
                    </p>

                    <p>
                        <span><i class="fab fa-whatsapp fa-2x"></i></i></i></span>
                        {{ $profile->user->phone_call }}
                    </p>
                                
                </div>

                <div class="column is-4">
                    <h3 class="has-text-white">Menu Navigasi</h3>
                    <hr class="line-divider">
                    <p>Beranda</p>
                    <p>Tentang</p>
                    <p>Makanan</p>
                    <p>Kontak</p>
                </div>

            </div>
            <p class="has-text-light text-copyright">Copyrights Buatan Rumah © 2019. All Right Reserved</p>
        </div>
    </div>
</footer> 

