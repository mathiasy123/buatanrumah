@extends('profile_layout.master')

@section('title', $profile->user->name . ' | Profil')

@section('profile_content')

<div class="content">
    <!-- Tentang Section -->
    <section class="section" id="tentang"> 
        <div class="container is-fluid">
            <div class="columns">

                <div class="column is-4">
                    <figure class="image is-square">
                        <img src="{{ asset('user_assets/images/content/' . $profile->user_id . '/' . $profile->about_image) }}">
                    </figure>
                </div>

                <div class="column is-4">   
                    <h3 class="has-text-centered space-top">{{ ucwords($profile->title_about) }}</h3>
                    <p class="wrap-text has-text-centered space-top">{{ $profile->text_about }}</p>
                </div>

                <div class="column is-4">
                    <figure class="image is-square">
                        <img src="{{ asset('user_assets/images/content/' . $profile->user_id . '/' . $profile->about_image) }}">
                    </figure>
                </div>

            </div>
        </div>
    </section>
    <!-- End Tentang Section -->
    
    <!-- Makanan Section -->
    <section class="section has-background-light" id="makanan">
        <div class="container is-fluid">
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <h3 class="has-text-centered">Makanan</h3>
                </div>
            </div>

            <div class="columns is-variable is-desktop">
                <div class="column is-10-desktop is-12-mobile">
                    <form method="post" action="{{ url()->current() }}">
                        @csrf
                        <div class="control has-icons-right">
                            <input class="input is-medium @error('food_keyword') is-danger @enderror" name="food_keyword" type="text" placeholder="Cari Makanan Pemasak">
                            <span class="icon is-right">
                                <i class="fas fa-search"></i>
                            </span>

                            @error('food_keyword')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </form>
                </div>

                <div class="column is-2-desktop is-12-mobile">
                    <a href="/pemasak/profil/1" class="button reset-button is-danger is-rounded is-medium">Reset Pencarian</a>
                </div>
            </div>
            
            @foreach($foods->chunk(3) as $chunk)

            <div class="columns is-variable is-desktop">
                
                @foreach($chunk as $food)

                <div class="column is-4">
                    <div class="card">
                    
                        <div class="card-image">
                            <figure class="image is-square">
                                <img class="fullwidth-image" src="{{ asset('user_assets/images/food/' . $food->user_id .'/' . $food->image) }}" alt="Food Image">
                            </figure>
                        </div>

                        <div class="card-content">

                            <div class="columns is-variable is-desktop">
                                <div class="column is-6">
                                    <h5>Nama Makanan</h5>
                                    <p>{{ ucwords($food->food_name) }}</p>
                                </div>
                                <div class="column is-6">
                                    <h5>Harga Makanan</h5>
                                    <p>Rp {{ number_format($food->price) }}</p>
                                </div>
                            </div>
                            
                        </div>

                        <div class="card-footer">
                            <a href="/pemasak/profil/pesan/makanan/{{ $food->id }}" class="card-footer-item has-background-success has-text-white">Pesan</a>
                        </div>

                    </div>
                </div>

                @endforeach

            </div>

            @endforeach
            
            {{ $foods->links() }}

        </div>
    </section>
    <!-- End Makanan Section -->
    
</div>

@if(session('order_notif'))
<!-- Modal SECTION -->
<div class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title has-text-success has-text-centered">PEMESANAN BERHASIL</p>
            <button class="delete" id="modal-close" aria-label="close"></button>
        </header>
        <section class="modal-card-body">
        <div class="content">
            <p class="has-text-danger">* Dimohon untuk mencatat kode pemesanan Anda.</p>
            <p><strong>Kode Pemesanan Anda : {{ strtoupper(session('order_notif')['kode']) }}</strong></p>
            <p>Total Harga Pemesanan Anda : Rp. {{ number_format(session('order_notif')['total']) }}</p>
            <p>Silahkan, kontak pihak pemasak untuk melakukan transaksi pembayaran dan informasi lebih lanjut.</p>
            <p>Terima Kasih.</p>
            <a href="https://wa.me/{{ $whatsapp_number }}?text=Konfirmasi%20Pemesanan" class="button is-success is-fullwidth">
                Kontak Pemasak
            </a>
        </div>
        </section>
    </div>
</div>
<!-- End Modal Section -->


<script>
    $('.modal').addClass('is-active');

    $('#modal-close').on('click', function () {
        $('.modal').removeClass('is-active');
    });
</script>

@endif

@endsection