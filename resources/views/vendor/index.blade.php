@extends('vendor_layout.master')

@yield('title', 'Buatan Rumah')

@section('vendor_content')
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
        <div class="button-more">
            <a class="button is-warning is-rounded is-medium"><strong>Lihat Lebih Banyak</strong></a>
            </nav>
        </div>
    </div>
</section>
<!-- End List Pemasak Section -->
@endsection