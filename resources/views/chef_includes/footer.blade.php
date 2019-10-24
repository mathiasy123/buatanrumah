<div class="content">
    <div class="container">
        <div class="columns">
            <div class="column is-4 has-text-light logo-text">
                <h1 class="has-text-light">Logo</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur.
                </p>
            </div>
            <div class="column is-4 has-text-light navigasi-section logo-text">
                <h3 class="border-text-footer has-text-light">Navigasi</h3>
                <p>Home</p>
                <p>Tentang</p>
                <p>Rekomendasi</p>
                <p>Masakan</p>
                <p>Kontak</p>
            </div>
            <div class="column is-4 has-text-light logo-text">
                <h3 class="border-text-footer has-text-light">Info kontak</h3>
                <p>
                    {{ ucwords(auth()->user()->address) }}
                </p>
                <p><i class="fab fa-whatsapp fa-lg"></i> {{ auth()->user()->phone_call }}</p>
                <p><i class="far fa-envelope fa-lg"></i> {{ auth()->user()->email }}</p>
                <p><i class="fab fa-instagram fa-lg"></i> {{ auth()->user()->instagram }}</p>
            </div>
        </div>
        <p class="has-text-light text-copyright">Copyrights Logo © 2019. All Right Reserved</p>
    </div>
</div>