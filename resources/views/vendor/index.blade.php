@extends('vendor_layout.master')

@yield('title', 'Buatan Rumah')

@section('vendor_content')
<!-- Tentang Kita Section -->
<section class="section" id="tentang">
    <div class="columns">
        <div class="column is-4">
            <figure class="image is-square">
                <img src="{{ asset('vendor_images/frontend/eiliv-sonas-aceron-ZuIDLSz3XLg-unsplash.png') }}">
            </figure>
        </div>
        <div class="column is-4 has-text-centered">
            <div class="content-tentang">
                <h3 class="is-size-3">{{ $content->title_about }}</h3>
                <p class="tentang-text">
                    {{ $content->text_about }} 
                </p>
                <a class="button is-warning is-rounded is-medium"><strong>Cek Selengkapnya</strong></a>
            </div>
        </div>
        <div class="column is-4">
            <figure class="image is-square">
                <img src="{{ asset('vendor_images/frontend/eiliv-sonas-aceron-ZuIDLSz3XLg-unsplash.png') }}">
            </figure>
        </div>
    </div>
</section>
<!-- End Tentang Kita Section -->

<!-- Video Placeholder Section -->
<section class="section" id="video">
    <figure class="image is-16by9">
        <iframe class="has-ratio" width="640" height="360"
            src="{{ asset('vendor_images/frontend/' . $content->video) }}" frameborder="0" allowfullscreen></iframe>
    </figure>
</section>
<!-- End Video Placeholder Section -->

<!-- List Pemasak Section -->
<section class="section" id="pemasak">
    <h1 class="title pemasak-title">Pemasak Unggul</h1>
    <div class="container">
        <div class="columns">
            <div class="column is-4">
                <a href="">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image">
                                <img src="{{ asset('vendor_images/frontend/Mask Group 3.png') }}" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="content">
                                <h1>John Doe</h1>
                                <h6>Pemasak Unggul</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna
                                    aliqua.
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="column is-4">
                <a href="">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image">
                                <img src="{{ asset('vendor_images/frontend/Mask Group 3.png') }}" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="content">
                                <h1>John Doe</h1>
                                <h6>Pemasak Unggul</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna
                                    aliqua.
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="column is-4">
                <a href="">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image">
                                <img src="{{ asset('vendor_images/frontend/Mask Group 3.png') }}" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="content">
                                <h1>John Doe</h1>
                                <h6>Pemasak Unggul</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna
                                    aliqua.
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End List Pemasak Section -->
@endsection