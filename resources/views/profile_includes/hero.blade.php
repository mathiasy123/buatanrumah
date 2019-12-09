<section class="hero is-medium" style="background-image: url('{{ asset('user_assets/images/content/' . $profile->user_id . '/' . $profile->hero_image) }}'); background-repeat: no-repeat; background-size: cover; height: 80%">
    <div class="hero-body">
        <div class="content has-text-centered hero-content">

            <h1 class="has-text-white text-shadow">{{ ucwords($profile->title_hero) }}</h1>
            
            <h5 class="has-text-white text-shadow space-bottom">{{ ucwords($profile->subtitle_hero) }}</h5>

            <h5 class="text-x wrap-text has-text-white text-shadow space-bottom">Pemilik {{ ucwords($profile->cathering_name) }}</h5>

        </div>
    </div>
</section>


