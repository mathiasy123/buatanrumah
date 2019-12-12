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

                            @if($chef->user_image == null) 

                            <figure class="image is-square">
                                <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                            </figure>
                            
                            @else

                            <figure class="image is-square">
                                <img class="fullwidth-image" src="{{ asset('user_assets/images/chef/' . $chef->user_image) }}" alt="Chef Image">
                            </figure>
                            
                            @endif

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
                                    <p>{{ ($chef->instagram == null) ? '---' : $chef->instagram }}</p>
                                </div>
                                <div class="column is-6">
                                    <h5>Alamat</h5>
                                    <p>{{ ($chef->address == null) ? '---' : $chef->address }}</p>
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
    
    <!-- Pelayanan Section -->
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
                    <p>Dengan bergabung dalam Buatan Rumah, kami menyediakan profil pribadi tentang usaha katering mereka yang berisi tentang usaha katering Anda, foto Anda, dan produk yaitu makanan dari usaha katering Anda sehingga pelanggan dapat melakukan pemesanan dari sana dengan mudah.</p>
                </div>

                <div class="column is-4 has-text-centered">
                    <i class="fas fa-dollar-sign fa-4x"></i>
                    <h3>Penjualan dan Keuntungan</h3>
                    <p>Dengan bergabung dalam Buatan Rumah, kami menyediakan profil dan POS penjualan untuk usaha katering Anda, sehingga memudahkan Anda menyebarkan profil usaha katering Anda sendiri kepada pelanggan yang dapat meningkatkan penjualan dan keuntungan Anda dan Anda sebagai pemilik atau pemasak usaha katering dapat melakukan pengelolaan penjualan Anda.</p>
                </div>

                <div class="column is-4 has-text-centered">
                    <i class="fas fa-tasks fa-4x"></i>
                    <h3>Point Of Sales Pribadi</h3>
                    <p>Dengan bergabung dalam Buatan Rumah, kami menyediakan Point Of Sales (POS) pribadi untuk usaha katering Anda, agar Anda sebagai pemilik atau pemasak dapat memantau dan mengelola penjualan Anda dengan mudah.</p>
                </div>

            </div>
        </div>        
    </section>
    <!-- End Pelayanan Section -->
</div>
@endsection