@extends('chef_layout.master_profile')

@section('title', 'Jessica Doe | Profile')

@section('chef_content')
<!-- Hero Section -->
<section class="hero" id="tentang">
    <div class="columns is-gapless">
        <div class="column is-6">
            <figure class="image is-1by1">
                <img src="{{ asset('chef_images/frontend/Mask Group 1.png') }}">
            </figure>
        </div>
        <div class="column is-6 has-background-warning">
            <div class="hero-body">
                <h2 class="is-size-2 title-hero-2"><strong>Jessica Doe</strong></h2>
                <h5 class="is-size-5 title-hero-5">Pemasak Standar</h5>
                <p class="hero-text is-hidden-mobile">
                    Ibu Jessica Doe Sangat Ahli dalam membuat beraneka lauk dan sayur yang dapat memanjakan lidah
                    masyarakat. Lauk dan sayur yang dibuat Ibu Jessica Doe adalah sangat lezat jika dipadukan dengan
                    makanan pokok yaitu nasi.
                </p>
                <a href="#masakan" class="button is-medium is-white is-rounded page-scroll">Cek Masakannya</a>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Section -->

<!-- List Produk Section -->
<section class="section" id="masakan">
    <h1 class="title rekom-title">Masakan</h1>
    <div class="container">
        <div class="columns is-centered is-mobile">
            <div class="column">
                <div class="control has-icons-right">
                    <input class="input is-medium" type="text" placeholder="Cari Masakan">
                    <span class="icon is-right">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="columns">

            @foreach($foods as $food)
            <div class="column is-4">
                <div class="card">
                    <div class="card-image">
                        <figure class="image">
                            <img src="{{ asset('chef_images/frontend/' . $food->image) }}" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <h1>{{ $food->food_name }}</h1>
                            <h6>Rating: {{ $food->rating }}/10</h6>
                            <p>{{ $food->description }}</p>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a href="/profile/order/food/{{ $food->food_id }}" class="has-text-info card-footer-item"><strong>Pesan</strong></a>
                    </footer>
                </div>
            </div>
            @endforeach

        </div>
        <nav class="pagination is-centered" role="navigation" aria-label="pagination">
            <a class="pagination-previous">Previous</a>
            <a class="pagination-next">Next page</a>
            <ul class="pagination-list">
                <li><a class="pagination-link is-current">1</a></li>
                <li><a class="pagination-link">2</a></li>
                <li><a class="pagination-link">3</a></li>
                <li><a class="pagination-link">4</a></li>
                <li><a class="pagination-link">5</a></li>
            </ul>
        </nav>
    </div>
</section>
<!-- End List Produk Section -->
@endsection