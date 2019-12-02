<div class="columns is-variable is-0">

    <!-- Menu Sidebar Section -->
    <div>
        <div class="menu-container px-1 has-background-white">

            <!-- Menu Dashboard Section -->
            <div class="menu-wrapper py-1">
                <aside class="menu">
                    <p class="menu-label">
                        Menu Utama
                    </p>
                    <ul class="menu-list">
                        <li>
                            <ul>
                                <li>
                                    <a href="/pemasak" class="{{ (request()->is('pemasak')) ? 'is-active' : ''}}">
                                        <i class="fas fa-tachometer-alt icon"></i>  Dashboard
                                    </a>
                                </li>
                            </ul>
                            
                        </li>
                    </ul>

                    <p class="menu-label">
                        Menu Makanan
                    </p>
                    <ul class="menu-list">
                        <li>
                            <ul>
                                <li>
                                    <a href="/pemasak/makanan" class="{{ (request()->is('pemasak/makanan')) ? 'is-active' : ''}}">
                                        <i class="fas fa-bread-slice icon"></i> Lihat Makanan
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <p class="menu-label">
                        Menu Penjualan
                    </p>
                    <ul class="menu-list">
                        <li>
                            <ul>
                                <li>
                                    <a href="/pemasak/pemesanan" class="{{ (request()->is('pemasak/pemesanan')) ? 'is-active' : ''}}">
                                        <i class="fas fa-cart-arrow-down"></i> Lihat Pemesanan
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li>
                                    <a href="/pemasak/pemesanan-selesai" class="{{ (request()->is('pemasak/pemesanan-selesai')) ? 'is-active' : ''}}">
                                        <i class="fas fa-check-square"></i> Lihat Pemesanan Yang Selesai
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </aside>
            </div>
            <!-- End Menu Dashboard Section -->

        </div>
    </div>
    <!-- End Menu Sidebar Section -->

</div>


