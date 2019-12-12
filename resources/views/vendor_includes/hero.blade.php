<section class="hero is-medium has-carousel">
    <div class="hero-body">
        <div class="content has-text-centered">
            <h1 class="has-text-white text-shadow">Buatan Rumah</h1>
            
            <h5 class="has-text-white space-bottom text-shadow">{{ $vendor_content->subtitle_hero }}</h5>

            <h6 class="text-x wrap-text has-text-white space-bottom text-shadow">{{ $vendor_content->text_hero }}</h6>

            <a href="https://wa.me/628999000697?text=Saya%20ingin%20bergabung" class="button is-medium is-warning is-rounded space-bottom">Jadilah Anggota Kami</a>
        </div>
    </div>
    <div id="carousel" class="hero-carousel">
        <div class="item-1">
            <!-- Slide Content -->
            <figure class="image is-480x480">
                <img src="{{ asset('vendor_assets/images/' . $vendor_content->hero_image) }}">
            </figure>
        </div>
        <div class="item-2">
            <!-- Slide Content -->
            <figure class="image is-480x480">
                <img src="{{ asset('vendor_assets/images/' . $vendor_content->hero_image) }}">
            </figure>
        </div>
        <div class="item-3">
            <!-- Slide Content -->
            <figure class="image is-480x480">
                <img src="{{ asset('vendor_assets/images/' . $vendor_content->hero_image) }}">
            </figure>
        </div>
    </div>
</section>


