<!-- Media Section -->
<section class="hero-slider">
    <div class="columns is-gapless">
        <div class="column is-6">
            <figure class="image is-1by1">
                <img src="{{ asset('vendor_images/frontend/' . $content->hero_image) }}">
            </figure>
        </div>
        <div class="column is-6 has-background-warning">
            <div class="hero-body">
                <h2 class="is-size-2 title-hero-2"><strong>{{ $content->title_hero }}</strong></h2>
                <h5 class="is-size-5 title-hero-5">{{ $content->subtitle_hero }}</h5>
                <p class="has-text-left hero-text is-hidden-mobile">
                    {{ $content->text_hero }}
                </p>
                <a href="/register" class="button is-medium is-white is-rounded">Jadilah Pemasak Kami</a>
            </div>
        </div>
    </div>
</section>
<!-- End Media Section -->

