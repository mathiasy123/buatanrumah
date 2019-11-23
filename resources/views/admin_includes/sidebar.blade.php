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
                                    <a href="/admin" class="{{ (request()->is('admin')) ? 'is-active' : ''}}">
                                        <i class="fas fa-tachometer-alt icon"></i>  Dashboard
                                    </a>
                                </li>
                            </ul>
                            
                        </li>
                    </ul>

                    <p class="menu-label">
                        Menu Akun
                    </p>
                    <ul class="menu-list">
                        <li>
                            <ul>
                                <li>
                                    <a href="/admin/pemasak" class="{{ (request()->is('admin/pemasak')) ? 'is-active' : ''}}">
                                        <i class="fas fa-utensils icon"></i> Kelola Akun Pemasak
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/re-seller" class="{{ (request()->is('admin/re-seller')) ? 'is-active' : ''}}">
                                        <i class="fas fa-universal-access icon"></i> Kelola Akun Re-Seller
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <p class="menu-label">
                        Menu Konten
                    </p>
                    <ul class="menu-list">
                        <li>
                            <ul>
                                <li>
                                    <a href="/admin/buatan-rumah" class="{{ (request()->is('admin/buatan-rumah')) ? 'is-active' : ''}}">
                                        <i class="fas fa-id-badge icon"></i> Kelola Konten Umum
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/pemasak-profile" class="{{ (request()->is('admin/pemasak-profile')) ? 'is-active' : ''}}">
                                        <i class="fas fa-id-card icon"></i> Kelola Konten Profile
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
                                    <a href="/admin/pemasak-makanan" class="{{ (request()->is('admin/pemasak-makanan')) ? 'is-active' : ''}}">
                                        <i class="fas fa-bread-slice icon"></i> Kelola Makanan Pemasak
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


