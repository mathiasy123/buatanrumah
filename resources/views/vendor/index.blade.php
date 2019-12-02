@extends('vendor_layout.master')

@section('title', 'Buatan Rumah')

@section('vendor_content')
<div class="content">
    <!-- Tentang Section -->
    <section class="section" id="tentang"> 
        <div class="container is-fluid">
            <div class="columns">

                <div class="column is-4">
                    <figure class="image is-square">
                        <img src="{{ asset('vendor_assets/images/gambar-tentang.png') }}">
                    </figure>
                </div>

                <div class="column is-4">   
                    <h3 class="has-text-centered space-top">{{ $vendor_content->title_about }}</h3>
                    <p class="wrap-text has-text-centered space-top">{{ $vendor_content->text_about }}</p>
                    <p class="wrap-text has-text-centered space-top">{{ $vendor_content->text_about }}</p>
                </div>

                <div class="column is-4">
                    <figure class="image is-square">
                        <img src="{{ asset('vendor_assets/images/gambar-tentang.png') }}">
                    </figure>
                </div>

            </div>
        </div>
    </section>
    <!-- End Tentang Section -->

    <!-- Video Section -->
    <section class="section has-background-light" id="video">
        <div class="container is-fluid">
            <div class="columns">
                <div class="column">
                    <h3 class="has-text-centered">Video Kami</h3>
                    <figure class="image is-16by9">
                        <iframe class="has-ratio" width="640" height="360" src="{{ asset('vendor_assets/videos/' . $vendor_content->video) }}" frameborder="0" allowfullscreen></iframe>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- End Video Section -->
    
    <!-- Anggota Section -->
    <section class="section" id="anggota">
        <div class="container is-fluid">
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <h3 class="has-text-centered">Anggota Yang Bergabung Dengan Kami</h3>
                </div>
            </div>
            
            <div class="columns is-variable is-desktop">
                
                @foreach($chefs as $chef)
                
                <div class="column is-4">
                    <div class="card">
                    
                        <div class="card-image">
                            <figure class="image is-square">
                                <img class="fullwidth-image" src="{{ asset('user_assets/images/chef/' . $chef->user_image) }}" alt="Chef Image">
                            </figure>
                        </div>

                        <div class="card-content">

                            <div class="columns is-variable is-desktop">
                                <div class="column is-6">
                                    <h5>Pemasak</h5>
                                    <p>{{ $chef->name }}</p>
                                </div>
                                <div class="column is-6">
                                    <h5>Nomor WA</h5>
                                    <p>{{ $chef->phone_call }}</p>
                                </div>
                            </div>
                            
                            <div class="columns is-variable is-desktop">
                                <div class="column is-6">
                                    <h5>Instagram</h5>
                                    <p>{{ $chef->instagram }}</p>
                                </div>
                                <div class="column is-6">
                                    <h5>Alamat</h5>
                                    <p>{{ $chef->address }}</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </section>
    <!-- End Anggota Section -->
    
    <!-- Kontak Section -->
    <section class="section has-background-light" id="pelayanan">
        <div class="container is-fluid">
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <h3 class="has-text-centered">Kenapa Kami ?</h3>
                </div>
            </div>  

            <div class="columns is-variable is-desktop">

                <div class="column is-4 has-text-centered">
                    <i class="fas fa-id-card fa-4x"></i>
                    <h3>Profil Pribadi</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum tempore voluptatibus, molestiae laudantium incidunt inventore ut quaerat architecto impedit laboriosam!</p>
                </div>

                <div class="column is-4 has-text-centered">
                    <i class="fas fa-dollar-sign fa-4x"></i>
                    <h3>Penjualan dan Keuntungan</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum tempore voluptatibus, molestiae laudantium incidunt inventore ut quaerat architecto impedit laboriosam!</p>
                </div>

                <div class="column is-4 has-text-centered">
                    <i class="fas fa-tasks fa-4x"></i>
                    <h3>Point Of Sales Pribadi</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum tempore voluptatibus, molestiae laudantium incidunt inventore ut quaerat architecto impedit laboriosam!</p>
                </div>

            </div>
        </div>        
    </section>
    <!-- End Kontak Section -->
</div>
@endsection